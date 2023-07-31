@extends('layout')

@section('main')
  <main id="show" class="wrapper">
    <h1 class="page-title">
      {{ $news->title }}
    </h1>
    <p>{{ $news->created_at }}</p>
    <p>{{ $news->text }}</p>
    <img src="{{ Storage::url($news->avatar)}}">

    <a href="{{ route('news.index')}}">一覧に戻る</a>
  </main>
@endsection