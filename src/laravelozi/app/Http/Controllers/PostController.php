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
        ]);
    
        
        // 画像ファイルの保存（存在する場合のみ保存）
        $img1_path = $request->hasFile('img1') ? $request->file('img1')->store('public/images') : null;
        $img2_path = $request->hasFile('img2') ? $request->file('img2')->store('public/images') : null;
        $img3_path = $request->hasFile('img3') ? $request->file('img3')->store('public/images') : null;
        $img4_path = $request->hasFile('img4') ? $request->file('img4')->store('public/images') : null;
    
        // 新しい Post モデルを作成し、データを保存
        $post = new Post;
    
        $post->title = $validatedData['title'];
        $post->text1 = $validatedData['text1'];
        $post->text2 = $validatedData['text2'];
        $post->text3 = $validatedData['text3'] ?? null;
        $post->text4 = $validatedData['text4'] ?? null;
        $post->image1_path = $img1_path;
        $post->image2_path = $img2_path;
        $post->image3_path = $img3_path;
        $post->image4_path = $img4_path;
    
        // 他のフィールドがある場合はここに追加
        $post->save();
    
        // 投稿成功後にリダイレクト（例: 投稿一覧ページへ）
        return redirect()->route('top');
    }
    
}
