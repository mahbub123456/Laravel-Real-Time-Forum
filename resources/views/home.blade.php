@extends('admin.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in! {{Auth::user()->name}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Questions</h3>
                    </div>
                    <!-- /.box-header -->

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-md-8">
                            <ul class="list-group">
                                @foreach($questions as $question)
                                     <li class="list-group-item">{{ $question->user->name  }} {{$question->created_at->diffForHumans()}}  on  {{$question->category->name}}</li>
                                    <a href="{{route('question.details',['id'=>$question->id])}}"><li class="list-group-item">{{$question->title}}</li></a>
                                    <p class="lead">{{$question->body}}</p>
                                @endforeach
                                {{$questions->links()}}
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item">Cras justo odio</li>
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
