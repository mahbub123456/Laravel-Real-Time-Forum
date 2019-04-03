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
                                    <form role="form" method="post" action="{{route('question.update',['id'=>$question->id])}}">
                                        @csrf
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="text">Question Title</label>
                                                <input name="title" type="text" class="form-control" id="title"
                                                       placeholder="Enter title" value="{{$question->title}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="text">Question category</label>
                                                <select name="category_id" id="" class="form-control">
                                                    @foreach($category as $category )
                                                        <option value="{{$category->id}}"
                                                            @if($question->category->id==$category->id)
                                                                selected
                                                            @endif
                                                                >{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Content</label>
                                                <textarea id="editor1" name="body" rows="10" cols="80"
                                                          class="form-control">{{$question->body}}</textarea>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Store</button>
                                        </div>
                                    </form>
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
