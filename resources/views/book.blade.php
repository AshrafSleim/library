@if(count($book)>0)
@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading text-center">{{$book->titel}}</div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('storage/thumbnails/'.$book->image)}}" class="img-responsive">
                </div>
                <div class="col-md-9">
                    <h2>{{$book->titel}}</h2>
                    <p>{{$book->info}}</p>
                    <br/>
                    Author : {{$book->author}}<br/>
                    <a href="{{asset('storage/books/'.$book->bookfile)}}" class="btn btn-primary">Download</a>

                </div>
            </div>

        </div>
    </div>
    <hr>
@include('commentbox')
@endsection
@else
    Error Not Book Found
@endif