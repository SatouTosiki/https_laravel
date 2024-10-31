<!-- resources/views/home.blade.php -->
@extends('layouts.app')  <!-- layouts.appレイアウトを拡張 -->


@section('content')  <!-- contentセクションの開始 -->
    @include('layouts.create')<!--これがくりえいとページに飛ぶbutton -->
    <h1>ホームページへようこそ</h1>
    <p>ここにコンテンツを追加します。</p>

    <ul>
        @foreach($data as $d)
        <li>
            {{$d->title}}
        </li>
        @endforeach
    </ul>
@endsection  <!-- contentセクションの終了 -->
