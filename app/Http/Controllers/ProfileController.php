<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
        $data = [
            'nama' => 'Iqlima Juliana',
            'npm' => '2417051048',
            'kelas' => 'A'
        ];

        return view('profile', $data);
    }
}