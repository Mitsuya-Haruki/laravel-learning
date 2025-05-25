<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        /*$test = $post->orderBY('updated_at', 'DESC')->limit(2)->toSql(); //sqlの確認用
        dd($test);*/

        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(2)]);  
        //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
}
?>