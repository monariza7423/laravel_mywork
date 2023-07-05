<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <title>My Work</title>
    @viteReactRefresh
</head>
<body>
  <header>
    <a href="{{ url('/') }}">
      <img src="{{ asset('image/logo.svg')}}">
    </a>
    <nav>
      <ul>
        <li><a href="{{ url('/about')}}">About</a></li>
        <li><a href="{{ url('/work')}}">Works</a></li>
        <li><a href="{{ route('news.index')}}">News</a></li>
        <li><a href="{{ route('contacts.index')}}">Contact</a></li>
      </ul>
    </nav>
  </header>

  @yield('main')

  <footer>
    <p>© My Work</p>
  </footer>
</body>