@extends('layouts.adminapp')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-sm-1">
    </div>
    <div class="col-sm-6" style="margin-top:20px">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border" style="margin-top:20px">
                <h3 class="box-title">Edit Post</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="card">

                <div class="card-body">
                    <form role="form" method="post" action="{{ route('posts.update',$post->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">post Name</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter Title"
                                            name="title" value="{{ $post->title }}">
                                        @if($errors->has('title'))
                                        <strong class="text-danger">{{ $errors->first('title') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">post Auther</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter Auther"
                                            name="auther" value="{{ $post->auther  }}">
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
                                        <strong class="text-danger">{{ $errors->first('image') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">post Description</label>
                                        <textarea class="form-control" name="description">{{ $post->description }}</textarea>
                                        @if($errors->has('description'))
                                        <strong class="text-danger">{{ $errors->first('description') }}</strong>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>

<div class="col-md-2" style="margin-top:80px">
    @foreach ($post->images as $image)
    <img src="/upload/{{ $image }}" width="200; height:300">
    <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#myModal{{$loop->index }}">
        Delete
    </button>
    <!-- The Modal -->
    <div class="modal" id="myModal{{ $loop->index }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">
                        {{ $post->name }}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    Are you sure want to Delete ?
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button"  data-dismiss="modal">Close</button>
                    <form method="post" action="{{ route('post.remove-image', $post->id) }}">
                        @csrf
                        @method('delete')
                        <input type="hidden" value="{{ $image }}" name="image">
                        <input type="submit" value="Delete" class="btn btn-danger"">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
<!-- /.box -->
</div>
<!--/.col (right) -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
