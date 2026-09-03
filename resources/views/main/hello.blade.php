@extends('layout')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">shortDesc</th>
      <th scope="col">Desc</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
    <tr>
      <th scope="row">{{$article['date']}}</th>
      <td> {{$article['name']}}</td>
      <td> {{$article['shortDesc']}}</td>
      <td> {{$article['desc']}}</td>
      <td> {{$article['preview_image']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection