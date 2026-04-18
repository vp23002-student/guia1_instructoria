<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model {
    protected $table = 'prestamos';
    protected $fillable = ['id_usuario', 'fecha_prestamo', 'fecha_devolucion'];

    public function usuario() {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function detalles() {
        return $this->hasMany(DetallePrestamo::class, 'id_prestamo');
    }
}