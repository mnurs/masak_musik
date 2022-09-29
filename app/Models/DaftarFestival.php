<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarFestival extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['pimpinan','wa' ,'band' ,'jumlah' ,'alamat' ,'vocal' ,'drum' ,'guitar' ,'bass' ,'keyboard' , 'other'];

    protected $table = 'daftar_festivals';
    protected $guarded =  ['id'];
}
