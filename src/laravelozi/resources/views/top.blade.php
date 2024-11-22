<!-- resources/views/home.blade.php -->
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP&family=Tsukimi+Rounded&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/create/create.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/top/top.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/create/button/create.css')}}">
@extends('layouts.app')  <!-- layouts.appレイアウトを拡張 -->

@section('content')  <!-- contentセクションの開始 -->

@foreach($data as $d)
    <div class="titleDiv">
        <h2>{{ $d['title'] }}</h2>
    </div>

    <div id="options">
        @foreach($d['options'] as $option)
            @if(!empty($option['image']) || !empty($option['text']))
                <div class="option">
                    {{-- 画像がある場合のみ表示 --}}
                    @if(!empty($option['image']))
                        <div class="image_option">
                            <img class="imgs" src="{{ asset('storage/images/' . $option['image']) }}" alt="画像なし">
                        </div>
                    @endif

                    {{-- テキストがある場合のみ表示 --}}
                    @if(!empty($option['text']))
                        <div class="textStyle">
                            <p>{{ $option['text'] }}</p>
                        </div>
                    @endif
                </div>
            @endif
        @endforeach
    </div>
@endforeach



    @include('layouts.create')<!--これがくりえいとページに飛ぶbutton -->
@endsection  <!-- contentセクションの終了 -->