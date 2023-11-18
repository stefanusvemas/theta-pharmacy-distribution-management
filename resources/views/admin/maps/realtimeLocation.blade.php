<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theta - Admin Page</title>
    <link rel="icon" type="image/x-icon" href="{{'../../images/icon.png'}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script>
        function initMap() {
            const vehicleLocation = {
                lat: -7.773695857971896,
                lng: 110.40967361984983
            };

            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: vehicleLocation,
            });

            const currentMarker = new google.maps.Marker({
                map: map,
                position: vehicleLocation,
                animation: google.maps.Animation.BOUNCE
            });

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
                    lat: -7.776055502365031,
                    lng: 110.39275029071705
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
                travelMode: google.maps.TravelMode.DRIVING
            };

            directionsService.route(request, function(result, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsRenderer.setDirections(result);
                }
            });
        }

        window.initMap = initMap;
    </script>
    <style>
        #map {
            height: 80%;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar justify-content-between py-2" style="background-color: #22668D;">
            <div class="container py-2">
                <a class="navbar-brand text-light" href="{{url('admin')}}">
                    <img src="{{'../../images/logo.png'}}" alt="Logo" width="100" class="d-inline-block align-text-top">
                </a>
                <div class="row justify-content-center align-items-center">
                    <div class="col-auto">
                        <div class="card" style="background-color: inherit; border: none; color: white;">
                            <a href="#" class="btn btn-sm" style="color: white; text-align:center;">
                                Petugas Gudang
                                <img class="rounded-circle" alt="avatar1" src="{{'../../images/person.jpg'}}" style="width: 40px;" />
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <a class="text-light" href="{{url('')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    Tujuan
                </div>
                <div class="col">
                    Service
                </div>
            </div>
            <div class="row">
                <div class="col">
                    PASAR PRAMUKA LT DASAR AKS 159 PS.PRAMUKA
                </div>
                <div class="col">
                    CHARTER/GRANDMAX
                </div>
            </div>
            <p class="text-end mt-2">last update: {{date('H:i')}}</p>
        </div>
    </main>

    <div id="map" class="container mb-4"></div>

    <footer class="mt-auto">
        <nav class="navbar justify-content-between" style="background-color: #22668D;">
            <div class="container" style="height: 40px;">
                <p class="text-light">Theta | 2023</p>
            </div>
        </nav>
    </footer>
    <script src="https://maps.googleapis.com/maps/api/js?key={{config('services.maps.key')}}&callback=initMap&v=weekly" defer></script>
    <script src="https://kit.fontawesome.com/098cbe1db3.js" crossorigin="anonymous"></script>
</body>

</html>