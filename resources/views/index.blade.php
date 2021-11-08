@extends('layout.base')

@section('pageContent')
  <section>
    <ul>
      @foreach ($movies as $movie)
      <li>
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