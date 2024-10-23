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
            'text1' => 'required|string|max:10',
            'text2' => 'required|string|max:10',
            'text3' => 'nullable|string|max:10',
            'text4' => 'nullable|string|max:10',
            'image1_path' => 'nullable|image|max:2048',
            'image2_path' => 'nullable|image|max:2048',
            'image3_path' => 'nullable|image|max:2048',
            'image4_path' => 'nullable|image|max:2048',
        ]);

        // 新しい Post モデルを作成し、データを保存
        $post = new Post;
        $post->title = $validatedData['title'];
        $post->text1 = $validatedData['text1'];
        $post->text2 = $validatedData['text2'];
        $post->text3 = $validatedData['text3'] ?? null;
        $post->text4 = $validatedData['text4'] ?? null;
        $post->image1_path = $validatedData['image1_path'] ?? null;
        $post->image2_path = $validatedData['image2_path'] ?? null;
        $post->image3_path = $validatedData['image3_path'] ?? null;
        $post->image4_path = $validatedData['image4_path'] ?? null;

        // 他のフィールドがある場合はここに追加
        $post->save();

        // 投稿成功後にリダイレクト（例: 投稿一覧ページへ）
        return redirect()->route('top');
        //投稿が終わったらtop画面に飛ばしている
    }
}
