<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    //especificamos el nombre de la tabla en la base de datos
    protected $table = 'autos';
    //es necesario especificar los campos que se pueden llenar desde el formulario
    protected $fillable = ['marca', 'modelo', 'anio', 'color', 'precio'];
    //laravel guarda por defecto la fecha de creación y modificación de los registros,
    // si no queremos que se guarden estas fechas, debemos especificarlo (timestamps = false)
    public $timestamps = false;
}
