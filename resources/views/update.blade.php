@extends('template')

@section('container')
    <section>
        <form action="/post/{{ $post['id'] }}" method="POST">
            @method('put')
            @csrf
            <input type="text" value="{{ $post['title'] }}">
            <input type="text" value="{{ $post['slug'] }}">
            <input type="text" value="{{ $post['content'] }}">
            <button type="submit">submit</button>
        </form>
    </section>
@endsection
