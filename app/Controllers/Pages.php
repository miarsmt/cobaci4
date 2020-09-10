<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Codeigniter 4',
            'test'  => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me | Codeigniter 4'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Perana Kp. Babakan Jampang',
                    'kota' => 'Sukabumi'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Siliwangi No.15',
                    'kota' => 'Bandung'
                ]
            ]
        ];

        return view('/pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
