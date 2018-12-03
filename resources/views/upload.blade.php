@extends('layouts.app')

@section('content')

                <div class="panel panel-default">
                    <div class="panel-heading">Upload File</div>

                    <div class="panel-body">
                        @include('partial.alerts')
                        <form action="{{route('upload.save')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" id="titel" name="titel" placeholder="Enter Titel">

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="author" name="author" placeholder="Enter Author">

                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="info" name="info" placeholder="Enter Your Information"></textarea>

                            </div>
                            <div class="form-group">
                                <select class="form-control" name="category">
                                    @if(count($categories)>0)
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        @endif

                                </select>

                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" id="image" name="image" >

                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" id="book" name="book" >

                            </div>
                            <div class="form-group">
                                <button type="submit" name="upload"  class="btn btn-primary btn-block">Upload Book</button>
                            </div>

                        </form>
                    </div>
                </div>

@endsection
