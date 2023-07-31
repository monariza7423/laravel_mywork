@extends('layout')

@section('main')
    <main id="contact" class="wrapper">
        <h1 class="page-title">Contact</h1>
        <div class="contact-form">
        <form method="POST" action="{{ route('contacts.confirm') }}">
        @csrf
            <div class="form-group">
                <label for="name" class="label">NAME</label>
                <input id="name" type="text" name="name">
            </div>

            <div class="form-group">
                <label for="email" class="label">E-MAIL</label>
                <input id="email" type="text" name="email" value="{{ old('email') }}" autofocus>
            </div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="form-group">
                <label for="contact" class="label">MESSAGE</label>
                <textarea id="contact" class="form-control  @error('contact') is-invalid @enderror" name="contact" cols="30" rows="10"></textarea>
            </div>
            
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