<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen as DosenModel;

class Dosen extends Controller
{
    public function index()
    {
    //      $mahasiswa = [
    //          [
    //              "nama" => "Putri Setiawati",
    //              "nim" => "C5401201087",
    //              "angkatan" => 57,
    //             // "domisili" => "bogor"
    //          ]
    //          ];
    //   }
$dosen = DosenModel::all();
        $data = [
            'dosen' => $dosen
        ];
        
    return view('dosen', $data);
    }

    public function create()
    {
        return view ('dosen-create');
    }

    public function post(Request $request)
    {
        // $firstname = $request->fname;
        // $lastname = $request->lname;

        // var_dump($firstname);
        $dosenBaru = [
            "nama" => $request->nama,
            "matkul" => $request->matkul,
            "nim" => $request->nim,
            "kampus" => $request->kampus,
        ];
        DosenModel::create($dosenBaru);

        return redirect('/dosen');
    }

    public function edit($id)
    {
        $dosen = DosenModel::find($id);
        
        if ($dosen === NULL) {
            return redirect('/dosen');
        }
        
        $data = [
            'dosen' => $dosen
        ];

        return view ('dosen-edit', $data);
    }
    public function postEdit ($id, Request $request)
    {
        // load mdodel data
        $dosen = DosenModel::find($id);
        // assign model properties
        $dosen->nama = $request->nama;
        $dosen->matkul = $request->matkul;
        $dosen->nim = $request->nim;
        $dosen->kampus = $request->kampus;
        // save model data
        $dosen->save();

        return redirect('/dosen');
    }

    public function delete($id)
    {
        $dosen = DosenModel::find($id);

        if ($dosen === NULL)
        {
            return redirect('/dosen');
        }
         $dosen->delete();

         return redirect('/dosen');
     }
     public function message (Request $request)
     {
        
     }
    //  git status
    //  git init
    // git add .
    // git commit -m "first commit"
    // git remote add origin https://github.com/siroputri/landing-magang.git
    // git push
    // git add app/Http/Controllers/Dosen.php
    // git commit -m "new message"
    // git push
    // hello world
}