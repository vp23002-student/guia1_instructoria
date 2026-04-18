<?php
namespace App\Http\Controllers;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller {
    public function index() {
        return Libro::with(['categoria', 'autores'])->get();
    }
    public function store(Request $request) {
        $libro = Libro::create($request->all());
        return response()->json($libro, 201);
    }
    public function show($id) {
        return Libro::with(['categoria', 'autores'])->findOrFail($id);
    }
    public function update(Request $request, $id) {
        $libro = Libro::findOrFail($id);
        $libro->update($request->all());
        return response()->json($libro);
    }
    public function destroy($id) {
        Libro::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}