<!-- resources/views/components/header.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="/">MyWebsite</a>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="#home">ホーム</a></li>
                    <li><a href="#about">私たちについて</a></li>
                    <li><a href="#services">サービス</a></li>
                    <li><a href="#contact">お問い合わせ</a></li>
                </ul>
            </nav>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <script src="{{ asset('js/header.js') }}"></script>
</body>
</html>
