@extends('adminlte::page')

@section('title', 'create category')



@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Add New Category</h3>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a class="btn btn-primary" href="{{route('categories.index')}}">View All Categories</a>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form action="{{route('categories.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name">

                </div>
                <div class="form-group">
                    <button type="submit" name="add"  class="btn btn-primary btn-block">Add Category</button>
                </div>

            </form>
        </div>
        <!-- /.box-body -->

        <!-- box-footer -->
    </div>
    <!-- /.box -->


@stop

