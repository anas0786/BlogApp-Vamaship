@extends('layouts.adminapp')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-2">
    </div>
    <div class="col-md-8" style="margin-top:20px">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border" style="margin-top:20px">
                <h3 class="box-title">Create post</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="card">

                <div class="card-body">
                    <form role="form" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter title"
                                            name="title" value="{{ old('title') }}">
                                        @if($errors->has('title'))
                                        <strong class="text-danger">{{ $errors->first('title') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Auther Name</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter Auther Name"
                                            name="auther" value="{{ old('auther') }}">
                                        @if($errors->has('auther'))
                                        <strong class="text-danger">{{ $errors->first('auther') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Images</label>
                                        <input type="file" class="form-control"  name="images[]" value="{{ old('images') }}" multiple>
                                        @if($errors->has('images'))
                                        <strong class="text-danger">{{ $errors->first('images') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea class="form-control" name="description"></textarea>
                                        @if($errors->has('description'))
                                        <strong class="text-danger">{{ $errors->first('description') }}</strong>
                                        @endif
                                    </div>
                                </div>
                             </div>

                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary btn-block">Publish</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.box -->
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!--/.col (right) -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>

@endsection

