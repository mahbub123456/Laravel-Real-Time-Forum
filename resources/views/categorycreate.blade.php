@extends('admin.master')

@section('content')




    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Create Questions</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="col-md-6 col-md-offset-2">
                                <div class="box box-primary">

                                    <!-- /.box-header -->
                                    <!-- form start -->
                                    @include('admin.error_message')
                                    <form role="form" method="post" action="{{route('category.store')}}">
                                        @csrf
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="text">Question Category</label>
                                                <input name="name" type="text" class="form-control" id="title"
                                                       placeholder="Enter Category Name">
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Store</button>
                                        </div>
                                    </form>
                                </br>
                                </br>
                                </br>
                                    <ul class="list-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="box-model" style="border:5px solid darkgreen;padding:10px">
                                                  @foreach($categorys as $category)

                                                    <h4><li class="list-group-item">{{$category->name}}</li></h4>
                                                  @endforeach

                                                    <li class="list-group-item"><a href="#">Edit</a></li>
                                                    <li class="list-group-item"><a href="#">Delete</a></li>
                                                </div>

                                            </div>
                                        </div>

                                    </ul>
                                </div>
                            </div>
                                <!-- /.box -->

                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
    <!-- /.content -->

@endsection
