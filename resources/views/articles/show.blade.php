@extends('layout')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Title</th>
      <th scope="col">shortDesc</th>
      <th scope="col">Desc</th>
    </tr>
  </thead>
  <tbody>
@foreach($articles as $article)
    <tr>
      <th scope="row">{{$article['datePublic']}}</th>
      <td><a href="/article/{{$article->id}}">{{$article['title']}}</a></td>
      <td>{{$article['shortDesc']}}</td>
      <td>{{$article['desc']}}</td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection

@extends('layout')
@section('content')
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}></h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$article->shortDesc}}</h6>
    <p class="card-text">{{$article->desc}}</p>
    <a href="#" class="card-link">Edit</a>
    <a href="#" class="card-link">Delete</a>
</div>
@endsection