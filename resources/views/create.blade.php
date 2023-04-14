@extends('template')

@section('container')
    <section>
        <form method="POST" action="/post">
            @csrf
            <input type="text" name="title" placeholder="title">
            <input type="text" name="slug" placeholder="slug">
            <input type="text" name="content" placeholder="content">
            <button type="submit">submit</button>
        </form>
    </section>
@endsection
