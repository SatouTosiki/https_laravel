<!-- resources/views/home.blade.php -->
<link rel="stylesheet" href="{{ asset('assets/css/top/top.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/create/button/create.css')}}">
@extends('layouts.app')  <!-- layouts.appレイアウトを拡張 -->

@section('content')  <!-- contentセクションの開始 -->

@foreach($data as $d)
    <div class="test">
        <div class="tests">
            <h2>{{ asset($d->title) }}</h2>
        <p>{{ asset($d->image1_path) }}</p> <!-- パスを表示 -->
        <img src="{{ asset('storage/images/' . $d->image4_path) }}" alt="pushimage">

            {{$d->title}}
            {{$d->id}}
        </div>
    </div>
@endforeach

    @include('layouts.create')<!--これがくりえいとページに飛ぶbutton -->
@endsection  <!-- contentセクションの終了 -->