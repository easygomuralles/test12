<?php

namespace App\Http\Controllers;

use App\Models\Portafolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Obtener los portafolios ordenados por fecha de creación en orden descendente
        $portafolios = Portafolio::all(); // Ya están ordenados por el alcance global

        // Pasar los datos a la vista
        return view('admin.portafolio', compact('portafolios'));
    }
}
