<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment as CommentModel;

class Comment extends Controller
{
    public function index()
    {
        $comment = CommentModel::all();
        $data = [
            'comment' => $comment
        ];

         return view('layout.steller.layout.comment', $data);
    }

    public function post(Request $request)
    {
        $commentBaru = [
            "nama" => $request->nama,
            "email" => $request->email,
            "pesan" => $request->pesan,
        ];
        CommentModel::create($commentBaru);

        return redirect('/');
    }

    public function delete($id)
    {
        $comment = CommentModel::find($id);

        if ($comment === NULL) {
            return redirect('/comment');
        }
        $comment->delete();

        return redirect('/comment');
    }
}