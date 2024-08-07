<!-- resources/views/polls/create.blade.php -->
@extends('layouts.app')

@section('content')

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP&family=Tsukimi+Rounded&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/create.css')}}">

<script src="{{ asset('/assets/js/create.js')}}"></script>
<body>
    <h1 class="textColor">アンケート作成page</h1>
    <form  method="POST" enctype="multipart/form-data">
        <div id="titleDiv">
            <input type="text" id="title" name="title" placeholder="タイトル入力" required>
        </div>
        @csrf
        <div id="options">
            <div class="option">
                <input type="file" id="image_1" name="options[0][image]" required>
                <input type="text" id="text_1" name="options[0][text]" required>
            </div>
        </div>
        <button type="button" onclick="addOption()">選択肢を増やす</button>
        <br>
        <button type="submit">投稿</button>
    </form>


</body>
@endsection

