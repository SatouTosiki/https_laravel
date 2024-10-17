<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store(Request $request) {
        // バリデーション
        $validatedData = $request->validate([
            'title' => 'required|string|max:255', // title は必須かつ最大255文字
            'image1_path' => 'nullable|string',
        ]);

        // 新しい Post モデルを作成し、データを保存
        $post = new Post;
        $post->title = $validatedData['title'];
        // 他のフィールドがある場合はここに追加
        $post->save();

        // 投稿成功後にリダイレクト（例: 投稿一覧ページへ）
        return redirect()->route('top')->with('success', '投稿が成功しました！');
        //投稿が終わったらtop画面に飛ばしている
    }
}
