<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return
        [
            "NIS" => 3103119057,
            "Nama" => "Emillia",
            "gender" => "Perempuan",
            "phone" => 6285713750418,
            "class" => "kk4 B RPL 2"
        ];
    }
}
