<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <title>My Work</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>
<body>
    @include('header')
    <main>
        <div class="main-visual">
            <img src="{{ asset('mainvisual-pc.jpg')}}" alt="Image">
        </div>

        <div class="wrapper">
            <section id="works">
                <h2 class="section-title">Works</h2>
                <ul>
                    <li><img src="{{ asset('works1.jpg')}}" alt="Image"></li>
                    <li><img src="{{ asset('works2.jpg')}}" alt="Image"></li>
                    <li><img src="{{ asset('works3.jpg')}}" alt="Image"></li>
                    <li><img src="{{ asset('works4.jpg')}}" alt="Image"></li>
                    <li><img src="{{ asset('works5.jpg')}}" alt="Image"></li>
                    <li><img src="{{ asset('works6.jpg')}}" alt="Image"></li>
                </ul>
                <a href="{{ url('/work')}}">see more</a>
            </section>

            <section id="news">
                <h2 class="section-title">News</h2>
                @foreach ($data as $news)
                    <h2>{{ $news->created_at }}</h2>
                    <p>{{ $news->title }}</p>
                @endforeach
            </section>
        </div>
    </main>
    @include('footer')
</body>
</html>