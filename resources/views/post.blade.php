@extends('template')

@section('container')
    <section class="data">
        @foreach ($data as $item)
            <div class="card">
                <h3>Title : {{ $item['title'] }}</h3>
                <small>{{ $item['content'] }}</small>
                <div class="card__button">
                    <a href="/post/{{ $item['id'] }}/edit">edit</a>
                    <form action="/post/{{ $item['id'] }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit">delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </section>
    <div class="pagination">
        {{ $data->links() }}
    </div>
@endsection
