<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Kontrol extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'notelp',
        'jadwal',
    ];

    public static function index()
    {
        return Kontrol::all();
    }

    public static function store(Request $request)
    {
        Kontrol::create($request->all());
    }

    public static function edit(Request $request, Kontrol $kontrol)
    {
        $kontrol->update($request->all());
    }
}
