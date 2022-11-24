<?php 
namespace App\Models;

use CodeIgniter\Model;

class Producto extends Model
{
    protected $table      = 'articulos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'descripcion', 'imagen'];
}