<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Steller as StellerModel;

class Steller extends Controller
{
    public function index()
    {
        $steller = StellerModel::all();
        $data = [
            'steller' => $steller
        ];

        return view('steller', $data);
    }
    public function post(Request $request)
    {
        $stellerBaru = [
            "nama" => $request->nama,
            "email" => $request->email,
            "pesan" => $request->pesan,
        ];
        StellerModel::create($stellerBaru);

        return redirect('/steller');
    }
}
?>