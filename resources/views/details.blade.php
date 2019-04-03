@extends('admin.master')

@section('content')


 @php
     $id_current = Auth::user()->id;
 @endphp



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
                                    @if(Auth::user()->id == $products->user_id)
                                    <a style="color:lightseagreen;" href="{{route('question.edit',['id'=>$products->id])}}" class="btn btn-info"><li class="list-group-item">Edit</li></a>
                                     <a onclick="return confirm('Are you sure delete this data');" style="color:lightseagreen;" href="{{route('question.delete',['id'=>$products->id])}}" class="btn btn-info"><li class="list-group-item">Delete</li></a>
                                    @endif


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
