<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Dokter extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'spesialis',
        'notelp',
        'jadwal',
    ];

    public static function index()
    {
        return Dokter::all();
    }

    public static function store(Request $request)
    {
        Dokter::create($request->all());
    }

    public static function edit(Request $request, Dokter $dokter)
    {
        $dokter->update($request->all());
    }
}
