<?php
namespace App\Http\Controllers;
use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller {
    public function index() {
        return Prestamo::with(['usuario', 'detalles'])->get();
    }
    public function store(Request $request) {
        $prestamo = Prestamo::create($request->all());
        return response()->json($prestamo, 201);
    }
    public function show($id) {
        return Prestamo::with(['usuario', 'detalles'])->findOrFail($id);
    }
    public function update(Request $request, $id) {
        $prestamo = Prestamo::findOrFail($id);
        $prestamo->update($request->all());
        return response()->json($prestamo);
    }
    public function destroy($id) {
        Prestamo::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}