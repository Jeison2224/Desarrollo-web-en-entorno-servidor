// PeliculaController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    public function verPelicula($id)
    {
        // Obtener la película y cargar los actores relacionados
        $pelicula = Pelicula::with('actores')->find($id);

        // Verificar si la película existe
        if (!$pelicula) {
            abort(404); // Puedes personalizar la página de error 404 según tus necesidades
        }

        // Pasar la película y sus actores a la vista
        return view('verPelicula', compact('pelicula'));
    }
}

@foreach ($pelicula->actores as $actor)
    {{ $actor->nombre }}
    {{-- Puedes acceder a otros campos del modelo Actor aquí --}}
@endforeach
