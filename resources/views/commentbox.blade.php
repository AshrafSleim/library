

    <div class="panel panel-default">
        <div class="panel-heading text-center">Comments</div>

        <div class="panel-body">
            @include('partial.alerts')
            @if(count($book->comments)>0)
                @foreach($book->comments as $comment)
                    <div class="row">
                        <h3>{{auth()->user()->name}}</h3><span class="text-muted">{{$comment->created_at}}</span>
                        <p>{{$comment->comment}}</p>
                    </div>
                    @endforeach
                @endif

            @if(!Auth::guest())
                <hr>
            <form method="post" action="{{route('comment',$book->id)}}">
            {{csrf_field()}}
                <div class="form-group">
                    <textarea class="form-control" name="comment" placeholder="Enter Your Comment">

                    </textarea>
                </div>
                <div class="form-group">
                  <button type="submit" name="addcomment" class="btn btn-primary">Add Comment</button>
                </div>
            </form>
            @endif
        </div>
    </div>

