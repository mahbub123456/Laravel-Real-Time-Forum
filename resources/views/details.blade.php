@extends('admin.master')

@section('content')




    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Questions Details</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="col-md-8">
                                <ul class="list-group">

                                    <li class="list-group-item">{{ $products->user->name  }} {{$products->created_at->diffForHumans()}}  on  {{$products->category->name}}</li>
                                   <h3> <li class="list-group-item">{{$products->title }}</li></h3>
                                    <li class="list-group-item">{{$products->body }}</li>


                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-group">
                                    <a style="color:lightseagreen;" href="#" class="btn btn-info"><li class="list-group-item">5 Replys</li></a>
                                </ul>
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
