@extends('layout.base')

@section('pageContent')
  <section class="movie-container">
    <ul>
      @foreach ($movies as $movie)
      <li class="movie">
        <h2>{{$movie['title']}}</h2>
        <i>Original title: {{$movie['original_title']}}</i>
        <p>Nationality: {{$movie['nationality']}}</p>
        <p>Date: {{$movie['date']}}</p>
        <p>Vote: {{$movie['vote']}}/10</p>
      </li>
      @endforeach
    </ul>
  </section>
@endsection