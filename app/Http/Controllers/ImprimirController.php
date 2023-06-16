<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class ImprimirController extends Controller
{
    public function imprimir(){
        $pdf = PDF::loadView('imprimir');
        return $pdf->download('vale.pdf');
    }
    public function imprimirRecurso(){
        $pdf = PDF::loadView('imprimirRecurso');
        return $pdf->download('acta.pdf');
    }
}
