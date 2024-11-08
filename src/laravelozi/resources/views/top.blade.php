<!-- resources/views/home.blade.php -->
@extends('layouts.app')  <!-- layouts.appレイアウトを拡張 -->

@section('content')  <!-- contentセクションの開始 -->
<link rel="stylesheet" href="{{ asset('assets/css/top/top.css')}}">

    @include('layouts.create')<!--これがくりえいとページに飛ぶbutton -->
    <h1>ホームページ</h1>
    <p class="test_text">ここにコンテンツを追加します</p>
    
    <ul>
        @foreach($data as $d)
    
            {{$d->id}}
            <br>
        
        @endforeach
    </ul>
@endsection  <!-- contentセクションの終了 -->