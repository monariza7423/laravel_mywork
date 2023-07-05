@extends('layout')

@section('main')
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

    <script src="{{ asset('js/app.jsx') }}"></script>
    <script>
        // ビューファイル内でのReactコンポーネントのレンダリング
        import React from 'react';
        import ReactDOM from 'react-dom';
        import ParentComponent from './ParentComponent';

        ReactDOM
  </main>
@endsection