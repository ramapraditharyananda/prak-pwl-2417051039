<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
public function index($nama = "", $npm = "", $kelas = "")
{
    $data = [
        'name' => $nama ?: 'Rama Praditha Ryananda',
        'npm'  => $npm ?: '2417051039',
        'kelas'=> $kelas ?: 'Computer Science B',
    ];

    return view('profile', $data);
}
}