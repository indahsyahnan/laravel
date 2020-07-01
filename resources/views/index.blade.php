<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <h2>SanberBook</h2>
                <!-- Penjelasan -->
                <h3>Social Media Developer Santai Berkualitas</h3>
                <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>
                <!-- Benefit Join di SanberBook-->
                <h4>Benefit Join di SanberBook</h4>
                <ul>
                    <li>Mendapatkan motivasi dari sesama developer</li>
                    <li>Sharing knowledge dari para mastah Sanber</li>
                    <li>Dibuat oleh calon web developer terbaik</li>
                </ul>
                <!-- Cara Bergabung ke SanberBook -->
                <h4>Cara Bergabung ke SanberBook</h4>
                <ol>
                    <li>Mengunjungi Website ini 
                    <li>Mendaftar di <a href="/register">Fom Sign Up</a></li>
                    <li>Selesai!</li>
                </ol>
        </div>
    </body>
</html>