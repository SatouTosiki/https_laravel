<!-- resources/views/home.blade.php -->
@extends('layouts.app')  <!-- layouts.appレイアウトを拡張 -->


@section('content')  <!-- contentセクションの開始 -->
    @include('layouts.create')<!--これがくりえいとページに飛ぶbutton -->
    <h1>ホームページへようこそ</h1>
    <p>ここにコンテンツを追加します。</p>
@endsection  <!-- contentセクションの終了 -->
