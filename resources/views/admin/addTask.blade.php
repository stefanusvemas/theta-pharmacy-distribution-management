@extends('admin/index')
@section('content')
<style>
     #map {
        height: 100%;
    }

    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-2">Tambah Tugas Pengiriman</h5>
                <form id="deliveryForm" action="{{ url('your_php_route') }}" method="POST" onsubmit="setSelectedValue()">
                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto col-lg-4">
                            <label for="moda">Moda Transportasi</label>
                            <select id="moda" class="form-select" onchange="filterLayananOptions()">
                                <option selected hidden>Moda Transportasi</option>
                                <optgroup label="Transport Internal">
                                    <option value="DRIVING">GrandMax</option>
                                    <option value="TWO_WHEELER">Motor</option>
                                </optgroup>

                                <optgroup label="Transport External">
                                    <option value="jne">JNE</option>
                                    <option value="pos">Pos</option>
                                    <option value="tiki">Tiki</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto col-lg-4">
                            <label for="layanan">Layanan Pengiriman</label>
                            <select id="layanan" class="form-select" name="layanan" disabled>
                                <option selected hidden>Layanan Pengiriman</option>
                                @foreach($layananJne as $i => $layanan)
                                <option value="{{ $i+1 }}">{{ $layanan['description'] }} ({{ $layanan['cost'][0]['etd'] }} days) <span id="cost">Rp.{{ number_format($layanan['cost'][0]['value'], 2) }}</span></option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row justify-content-start justify-content-lg-end align-items-end">
                        <div class="col-auto mt-2 mt-lg-0">
                            <button type="submit" class="btn btn-success w-100">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="map" class="container my-2" style="display: none;"></div>


    

</main>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Add event listener to moda select element
        const modaSelect = document.getElementById('moda');
        modaSelect.addEventListener('change', function () {
            filterLayananOptions();
            
            // Call initMap() only if 'Motor' or 'GrandMax' is selected
            const selectedMode = modaSelect.value;
            if (selectedMode === 'TWO_WHEELER' || selectedMode === 'DRIVING') {
                initMap();
                map.style.display = 'block';
            } else {
                // Hide the map if a different option is selected
                const map = document.getElementById("map");
                map.style.display = 'none';
            }
        });

        // Your existing filterLayananOptions function
        function filterLayananOptions() {
            const modaSelect = document.getElementById('moda');
            const layananSelect = document.getElementById('layanan');

            // Reset layanan options
            layananSelect.innerHTML = '<option selected hidden>Layanan Pengiriman</option>';

            // If JNE is selected, add only JNE options
            if (modaSelect.value === 'jne') {
                layananSelect.disabled = false;
                @foreach($layananJne as $i => $layanan)
                    layananSelect.innerHTML += "<option value='{{ $i+1 }}'>{{ $layanan['description'] }} Rp.{{ number_format($layanan['cost'][0]['value'], 2) }} ({{ $layanan['cost'][0]['etd'] }} days)</option>";
                @endforeach
            } else if (modaSelect.value === 'pos') {
                layananSelect.disabled = false;
                @foreach($layananPos as $i => $layanan)
                    layananSelect.innerHTML += "<option value='{{ $i+1 }}'>{{ $layanan['description'] }} Rp.{{ number_format($layanan['cost'][0]['value'], 2) }} ({{ $layanan['cost'][0]['etd'] }} days)</option>";
                @endforeach
            } else if (modaSelect.value === 'tiki') {
                layananSelect.disabled = false;
                @foreach($layananTiki as $i => $layanan)
                    layananSelect.innerHTML += "<option value='{{ $i+1 }}'>{{ $layanan['description'] }} Rp.{{ number_format($layanan['cost'][0]['value'], 2) }} ({{ $layanan['cost'][0]['etd'] }} days)</option>";
                @endforeach
            } else {
                layananSelect.disabled = true;
            }
        }

        // Your existing initMap function
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
            });

            const selectedMode = modaSelect.value;

            const markerA = new google.maps.Marker({
                map: map,
                position: {
                    lat: -7.778330650049965,
                    lng: 110.41520232224033
                },
                label: 'A'
            });

            const markerB = new google.maps.Marker({
                map: map,
                position: {
                    lat: -7.794188616777174,
                    lng: 110.32263306443436
                },
                label: 'B'
            });

            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer({
                map: map,
                suppressMarkers: true
            });

            const request = {
                origin: markerA.getPosition(),
                destination: markerB.getPosition(),
                travelMode: google.maps.TravelMode[selectedMode]
            };

            directionsService.route(request, function (result, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsRenderer.setDirections(result);
                }
            });
        }

        // Call initMap when the page loads
        initMap();
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{config('services.maps.key')}}&callback=initMap&v=weekly" defer></script>
<script src="https://kit.fontawesome.com/098cbe1db3.js" crossorigin="anonymous"></script>
@endsection