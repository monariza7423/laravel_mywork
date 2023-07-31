@extends('layout')

@section('main')
  <main id="news" class="wrapper">
    <h1 class="page-title">News</h1>
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
@endsection