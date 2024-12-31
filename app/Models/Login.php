<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Pastikan ini diimport
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User;

class Login extends Authenticatable // Ganti dengan Authenticatable 
{
    use Notifiable;

    public $timestamps = false;
    protected $table = 'login'; // Sesuaikan dengan nama tabel yang digunakan
    protected $fillable = [
        'username', 'email', 'password', 'id_karyawan', 'divisi', 'jabatan',
    ];

    // Aturan validasi
    public static function rules($id = null)
    {
        return [
            'username' => 'required|max:50|unique:login,username,' . $id,
            'email' => 'required|email|unique:login,email,' . $id,
            'password' => 'required|confirmed|min:8',
            'id_karyawan' => 'required|integer',
            'divisi' => 'required|string|max:50',
            'jabatan' => 'required|string|max:50',
        ];
    }
}