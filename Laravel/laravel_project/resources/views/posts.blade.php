@extends('layout.master')

@section('content')

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($posts as $item)
        <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->title}}</td>
        <td>{{$item->description}}</td>
        <td></td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection