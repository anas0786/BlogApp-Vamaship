@extends('layouts.adminapp')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12" style="margin-top:20px">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Posts</h4>
                    <div class="box-tools">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                            <form  method="get" action="{{ route('posts.index') }}">
                            </div>
                        </form>
                        </div>
                            <div class="input-group input-group-sm hidden-xs" style="width: 150px;margin-left:1000px">
                                <a class="btn btn-sm btn-primary" href="{{ route('posts.create') }}">
                                    post
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Sr</th>
                            <th>Name</th>
                            <th>Auther</th>
                            <th>Create_at Date</th>
                            <th colspan="2" class="text-center">Action</th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->auther }}</td>
                            <td>{{ $post->created_at->format('d-M-Y') }}</td>
                            <td><a href="{{ route('posts.show',$post->id) }}" class="btn btn-success">Show</a></td>

                            <td><a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary">Edit</a></td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#remove{{ $post->id }}">
                                    Remove
                                </button>

                                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <div class="modal fade" id="remove{{ $post->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="remove{{ $post->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="remove{{ $post->id }}Label">
                                                        {{ $post->title }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to remove this iteam ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $posts->links() }}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</div>
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">

    jQuery(function() {
      jQuery('#category').change(function() {
          this.form.submit();
      });
  });
  </script>

@endsection
@endsection
