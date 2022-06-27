@extends('layouts.app')

@section('content')



<div class="container">
    <div class="heading d-flex justify-content-between align-items-center">
        <h1 class="p-5">Characters</h1>
    </div>

    <div class="row row-cols-md-7 g-0">
        @foreach($characters as $character)
        <div class="col">
            <div class="card h-100">
                <a href="{{route('admin.characters.show', $character->id)}}">
                    <img height="300" class="ratio ratio-1x1" src="{{$character->thumb}}" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">{{$character->name}}</h4>
                        <p class="card-text">{{Str::limit($character->description, 100)}}</p>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection