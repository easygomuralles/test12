<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Portafolio extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'portafolios'; // Asegúrate de que el nombre de la tabla sea correcto

    // ... código existente ...

    /**
     * Boot function from Laravel.
     */
    protected static function boot()
    {
        parent::boot();

        // Ordenar por created_at desc
        static::addGlobalScope('order', function ($builder) {
            $builder->orderBy('created_at', 'desc');
        });
    }

    // ... código existente ...
}

namespace App\Http\Controllers;

use App\Models\Portafolio; // Importa el modelo Portafolio
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Obtener los portafolios ordenados por fecha de creación en orden descendente
        $portafolios = Portafolio::orderBy('created_at', 'desc')->get();

        // Pasar los datos a la vista
        return view('admin.portafolio', compact('portafolios'));
    }
}
