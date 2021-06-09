@extends('layouts.main')


@section('content')
<main>
    <div class="container movies">
        <div class="cards">
            @foreach ($movies as $movie)
                <div class="card">
                    <h3>{{$movie['title']}}</h3>
                    <h3>{{$movie['original_title']}}</h3>
                    <p>{{$movie['nationality']}}</p>
                    <p>{{$movie['date']}}</p>
                    <p>{{$movie['vote']}}</p>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
