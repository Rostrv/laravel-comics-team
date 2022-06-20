@extends('layouts.app')

@section('content')
<div class="container">
  <img src="{{$character->thumb}}" alt="{{$character->name}}">
  <h1>{{$character->name}}</h1>
  <div class="content">
    {{$character->description}}
  </div>
</div>
@endsection