<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class pdfController extends Controller
{
    public function label() {
        $pdf = Pdf::loadView('labelPengiriman');

        return $pdf->stream('labelPengiriman.pdf');
    }
}
