<?php
namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller {
    public function index() {
        return Categoria::all();
    }
    public function store(Request $request) {
        $categoria = Categoria::create($request->all());
        return response()->json($categoria, 201);
    }
    public function show($id) {
        return Categoria::findOrFail($id);
    }
    public function update(Request $request, $id) {
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());
        return response()->json($categoria);
    }
    public function destroy($id) {
        Categoria::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}