<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Obat extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'harga',
        'keterangan',
    ];

    public static function index()
    {
        return Obat::all();
    }

    public static function store(Request $request)
    {
        Obat::create($request->all());
    }

    public static function edit(Request $request, Obat $obat)
    {
        $obat->update($request->all());
    }
}
