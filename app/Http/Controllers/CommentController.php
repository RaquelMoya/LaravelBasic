<?php

namespace App\Http\Controllers;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function findAll()
    {
        $comments = Comment::all();
        return $comments;
    }
    public function findOne($id)
    {
        $comment = Comment::find($id);
        return $comment;
    }
    public function create(Request $request)
    {
       // $data = $request->all();

        $data = [
            'title' => $request -> title,
            'description' => $request -> description,
            'user_id' => $request -> user_id,
            'post_id' => $request -> post_id
        ];
        $newComment = Comment::create($data);
        return 'Comment created';
    }
    public function updateOne(Request $request, $id)
    {
        $comment = Comment::firstOrFail($id);
        if(isset($request->title)){
            $comment->title = $request->title;
        }
        if($request->has('description')){
            $comment->description = $request->description;
        }
        $comment->save();
        return 'Comment updated';
    }
    public function delete($id)
    {
        $comment = Comment::firstOrFail($id);

        $comment->delete();
        
        return 'Delete comment success';
    }
    public function deleteAll()
    {
        $comment = Comment::find();

        $comment->deleteAll();
        
        return 'Delete comments success';
    }
}
