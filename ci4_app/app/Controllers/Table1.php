<?php

namespace App\Controllers;

class Table1 extends BaseController
{
    public function index()
    {
        $data['mahasiswa'] = [
            ['nama' => 'Farell', 'nim' => '001', 'umur' => 20],
            ['nama' => 'Daffa', 'nim' => '002', 'umur' => 21],
            ['nama' => 'Aditya', 'nim' => '003', 'umur' => 22],
            ['nama' => 'Paijo', 'nim' => '004', 'umur' => 20],
            ['nama' => 'Rama',   'nim' => '005', 'umur' => 23]
        ];

        return view('table1', $data);

    }
}
