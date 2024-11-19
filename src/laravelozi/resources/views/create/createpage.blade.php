<!-- resources/views/polls/create.blade.php -->
@extends('layouts.app')



@section('content')

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP&family=Tsukimi+Rounded&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/create/create.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/create/button/createbutton.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/create/button/pulsbutton.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/create/button/pushbutton.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/create/top/top.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script src="{{ asset('/assets/js/create.js')}}"></script>

<body>
    <h1 class="textColor">アンケート作成page</h1>
    <form method="POST" enctype="multipart/form-data" action="{{ route('post.store') }}">
        <!-- routesフォルダのcreatepushのrouteのnameを指定している -->
        <div id="titleDiv">
            <input type="text" id="title" name="title" placeholder="タイトル入力" required>
        </div>
        @csrf
        <div id="options">
            <div class="option">
                <div class="image_option">
                    <input type="file" id="image_1" name="img1" multiple accept="image/*" style="display:none" >
                    <button class="fileButton" type="button">
                        <span class="button_text">画像必須</span>
                        <span class="button_icon">
                            <ion-icon name="add-circle-outline"></ion-icon>
                        </span>
                    </button>
                </div>
                <div class="textStyle">
                    <input type="text" id="text_1" name="text1" placeholder="タイトル(必須)" >
                </div>
            </div>
        </div>
        <!-- 選択肢を増やすbutton -->
        <div class="button">
            <button type="button" onclick="addOption()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                </svg>
            </button>
        </div>
        <br>
        <!-- 投稿ボタン -->
        <div id="pushbutton">
            <button class="pushButton" type="submit">
                <i class="fas fa-upload"></i>
            </button>
        </div>
    </form>




@endsection