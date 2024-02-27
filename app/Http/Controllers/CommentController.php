<?php

namespace App\Http\Controllers;

//use App\Comment as AppComment;
use App\Models\Comment;
use App\Models\Commentaire as ModelsCommentaire;
use App\Models\User;
use Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
       
       
    }
    public function store(Request $request)
    {
       /*  $request->validate([
            'comment' => 'required',
        ]); */
        $comment= new ModelsCommentaire();
        $comment->comment = request('comment');
        $comment->produit_id= request('produit_id');
        $comment->user_id= request('user_id');
        $comment->save();
        return redirect()->back()->with("reussi");
    } 
   
}
