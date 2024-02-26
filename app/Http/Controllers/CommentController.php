<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        $user_id= Auth::user()->id;
        return view ('web.detail',[
            'user_id'=>$user_id,
        ]);
    }
    public function store(Request $request)
    {

        Comment::create([
            'comment' => $request->comment,
            'user_id' => $request->user_id,
            'produit_id' => $request->produit_id,
        ]);
        return redirect()->back()->with("reussi");
    } 
}
