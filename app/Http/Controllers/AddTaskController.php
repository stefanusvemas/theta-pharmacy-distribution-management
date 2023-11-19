<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AddTaskController extends Controller
{
    public function index()
    {
        $responseJne = Http::withHeaders([
            'key' => config("services.rajaongkir.key")
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => 154,
            'destination' => 151,
            'weight' => 1000,
            'courier' => 'jne'
        ]);

        $responsePos = Http::withHeaders([
            'key' => config("services.rajaongkir.key")
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => 154,
            'destination' => 151,
            'weight' => 1000,
            'courier' => 'pos'
        ]);

        $responseTiki = Http::withHeaders([
            'key' => config("services.rajaongkir.key")
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => 154,
            'destination' => 151,
            'weight' => 1000,
            'courier' => 'tiki'
        ]);

        // dd($response->json());

        $layananJne = $responseJne['rajaongkir']['results'][0]['costs'];
        $layananPos = $responsePos['rajaongkir']['results'][0]['costs'];
        $layananTiki = $responseTiki['rajaongkir']['results'][0]['costs'];

        // return ($layananJne);

        return view('admin/addTask', [
            'layananJne' => $layananJne,
            'layananPos' => $layananPos,
            'layananTiki' => $layananTiki
        ]);
    }

    public function store(Request $request)
    {
        $phone= config('services.callmebot.phone');
        $apikey= config('services.callmebot.key');
        $message="https://tinyurl.com/theta-qr";

        $url='https://api.callmebot.com/whatsapp.php?source=php&phone='.$phone.'&text='.urlencode($message).'&apikey='.$apikey;

        $response = Http::get($url);
        
        return redirect('/admin/label');
    }
}
