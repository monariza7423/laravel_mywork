<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <title>My Work</title>
</head>
<body>
  @include('header')
  <main id="show" class="wrapper">
    <h1 class="title">
      {{ $news->title }}
    </h1>
    <p>{{ $news->created_at }}</p>
    <p>{{ $news->text }}</p>
    {{ $news->avatar }}

    <a href="{{ route('news.index')}}">一覧に戻る</a>
  </main>
  @include('footer')
</body>