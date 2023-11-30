<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $nama ="Desi Fitria";
        $alamat ="kp burujul";
        $tanggal_lahir ="06 Desember 2002";
        $data_array = array(
        "nama" => array(
        "Fauzi", "desi", "ressa", "wulan",
    ),
);

       
        
        return view ('profile', compact ('nama',
        'alamat',
        'tanggal_lahir','data_array')
        );
    }
}

//tugas buat perulangan for dalam view, if, foreach//forelse untuk data ketika null