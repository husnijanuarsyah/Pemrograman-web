<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model1 extends Model
{
    use HasFactory;
    protected $table='model1s';
    protected $fillable=['nama','nis','kelas','alamat','tgllhr'];
}
