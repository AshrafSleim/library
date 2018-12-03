<div class="panel panel-default">
    <div class="panel-heading text-center">Categories</div>
    <div class="panel-body">
@if(count($categories)>0)
    <ui class="nav">
        @foreach($categories as $category)
            <li><a href="{{route('category',$category->id)}}">{{$category->name}}</a></li>
        @endforeach
    </ui>
@endif
</div>
</div>