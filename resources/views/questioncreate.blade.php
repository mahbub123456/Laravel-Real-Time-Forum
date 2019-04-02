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
<form role="form">
    <div class="box-body">
        <div class="form-group">
            <label for="text">Question Title</label>
            <input name="title" type="text" class="form-control" id="title"
                   placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="text">Qustion category</label>
            <select name="category" id="" class="form-control">
                <option value="">One</option>
                <option value="">One</option>
                <option value="">One</option>
                <option value="">One</option>
                <option value="">One</option>
            </select>
        </div>
       <div class="form-group">
           <label for="">Content</label>
           <textarea id="editor1" name="body" rows="10" cols="80"
                     class="form-control"></textarea>
       </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
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
