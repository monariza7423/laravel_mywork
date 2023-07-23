@extends('layout')

@section('main')
    <main id="contact" class="wrapper">
        <h1 class="contact-title">Contact</h1>
        <div class="contact-form">
        <form method="POST" action="{{ route('contacts.confirm') }}">
        @csrf

            <label for="name">NAME</label>
            <input id="name" type="text" name="name">

            <label for="email" class="col-md-3 col-form-label text-md-right">E-MAIL</label>
            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>


            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="contact" class="col-md-3 col-form-label text-md-right">MESSAGE</label>
            <textarea id="contact" class="form-control  @error('contact') is-invalid @enderror" name="contact" cols="30" rows="10"></textarea>

            @error('contact')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <button type="submit" class="btn btn-primary">
                        送信
            </button>
        </form>
        </div>
    </main>
@endsection