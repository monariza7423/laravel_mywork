@extends('layout')

@section('main')
    <main>
        <div class="main-visual">
            <img src="{{ asset('image/mainvisual-pc.jpg')}}" alt="Image">
        </div>

        <div class="wrapper">
            <section id="works">
                <h2 class="section-title">Works</h2>
                <ul>
                    <li><img src="{{ asset('image/works1.jpg')}}" alt="Image"></li>
                    <li><img src="{{ asset('image/works2.jpg')}}" alt="Image"></li>
                    <li><img src="{{ asset('image/works3.jpg')}}" alt="Image"></li>
                    <li><img src="{{ asset('image/works4.jpg')}}" alt="Image"></li>
                    <li><img src="{{ asset('image/works5.jpg')}}" alt="Image"></li>
                    <li><img src="{{ asset('image/works6.jpg')}}" alt="Image"></li>
                </ul>
                <a href="{{ url('/work')}}">see more</a>
            </section>

            <section id="news">
                <h2 class="section-title">News</h2>
                @foreach ($data as $news)
                <dl>
                    <dt>
                        <h2>{{ $news->created_at }}</h2>
                    </dt>
                    <dd>
                        <p>{{ $news->title }}</p>
                    </dd>
                </dl>
                @endforeach
            </section>
        </div>
    </main>
@endsection
