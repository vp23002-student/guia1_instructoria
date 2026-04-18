<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DetallePrestamo extends Model {
    protected $table = 'detalle_prestamo';
    protected $fillable = ['id_prestamo', 'id_libro'];

    public function prestamo() {
        return $this->belongsTo(Prestamo::class, 'id_prestamo');
    }

    public function libro() {
        return $this->belongsTo(Libro::class, 'id_libro');
    }
}