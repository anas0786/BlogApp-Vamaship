@extends('layouts.adminapp')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12" style="margin-top:20px">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Post Details</h4>

                    <div class="box-tools">
                            <div class="input-group input-group-sm hidden-xs" style="width: 150px;margin-left:1000px">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th scope="row">Title</th>
                          <td>{{ $post->title}}</td>
                          </tr>
                          <tr>
                            <th scope="row">Auther Name</th>
                          <td>{{ $post->auther}}</td>
                          </tr>
                          <tr>
                            <th scope="row">Image</th>
                            <td><img src="/upload/{{ $post->images[0]}}" width="200px" height="200px"></td>
                          </tr>
                          <tr>
                            <th scope="row">Description</th>
                            <td>{{ $post->description}}</td>
                          </tr>

                        </tbody>
                      </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</div>
@endsection
