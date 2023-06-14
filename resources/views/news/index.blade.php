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
  <main id="news" class="wrapper">
    <h1 class="news-title">News</h1>
    <dl>
    @foreach($news as $news)
      <dt>{{ $news->created_at->format('Y.m.d') }}</dt>
      <dd>
        <a href="{{ route('news.show', ['id' => $news->id])}}">
          {{ $news->title }}
        </a>
      </dd>
    @endforeach
    </dl>
  </main>
  @include('footer')
</body>