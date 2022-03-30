<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function findAll()
    {
        $posts = Post::all();
        return $posts;
    }
    public function findOne($id)
    {
        $user = User::find($id);
        $post = Post::find($id);
        return $post;
    }
    public function create(Request $request)
    {
       // $data = $request->all();

        $data = [
            'title' => $request -> title,
            'description' => $request -> description,
            'user_id' => $request -> user_id
        ];
        $newPost = Post::create($data);
        return 'Post created';
    }
    public function updateOne(Request $request, $id)
    {
        $post = Post::firstOrFail($id);
        if(isset($request->title)){
            $post->title = $request->title;
        }
        if($request->has('description')){
            $post->description = $request->description;
        }
        $post->save();
        return 'Post updated';
    }
    public function delete($id)
    {
        $post = Post::firstOrFail($id);

        $post->delete();
        
        return 'Delete post success';
    }
    public function deleteAll()
    {
        $post = Post::find();

        $post->deleteAll();
        
        return 'Delete posts success';
    }
}
