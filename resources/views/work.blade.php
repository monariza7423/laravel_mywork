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
  <main id="works" class="wrapper">
    <h1 class="works-title">Works</h1>
    <div class="works-img">
      <img src="{{ asset('works1.jpg')}}">
    </div>
    <h4 class="works-contents">PHOTO WORK6</h4>
    <p class="works-text">
      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
    </p>

    <div class="works-img">
      <img src="{{ asset('works2.jpg')}}">
    </div>
    <h4 class="works-contents">PHOTO WORK6</h4>
    <p class="works-text">
      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
    </p>

    <div class="works-img">
      <img src="{{ asset('works3.jpg')}}">
    </div>
    <h4 class="works-contents">PHOTO WORK6</h4>
    <p class="works-text">
      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
    </p>

    <div class="works-img">
      <img src="{{ asset('works4.jpg')}}">
    </div>
    <h4 class="works-contents">PHOTO WORK6</h4>
    <p class="works-text">
      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
    </p>
  </main>
  @include('footer')
</body>