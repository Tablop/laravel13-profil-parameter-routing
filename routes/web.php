<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("home");
});

Route::get("/profil/{nama}/{kelas}/{cita}", function ($nama, $kelas, $cita) {
    return view("profil", [
        "nama" => $nama,
        "kelas" => $kelas,
        "cita" => $cita,
    ]);
});
Route::get("/profil",function (){
    return view("salah");
});