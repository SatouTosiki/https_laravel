<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/layouts/create.css') }}">
</head>
<body>
    <div>
        <div>
             <a href="{{ route('auth-check') }}"> <!-- Logincheckしている -->
                <div class="post-btn">
                    <i class="fas fa-plus"></i>
                </div>
            </a>
        </div>
    </div>

    @if(session('alert'))
        <script>
            alert("{{ session('alert') }}");
        </script>
    @endif
</body>
