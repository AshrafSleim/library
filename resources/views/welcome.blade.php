@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading text-center">All Books</div>

        <div class="panel-body">
            {{$books->links()}}
            @if(count($books)>0)
                @foreach($books as $book)
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
                            <a href="{{route('book',$book->id)}}" class="btn btn-info">More Info</a>

                        </div>
                    </div>
                    <hr>
                @endforeach
            @endif
        </div>
    </div>

@endsection
