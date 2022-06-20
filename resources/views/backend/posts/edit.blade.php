@extends('backend.app');
@section('content')
    <div class="row">
        <div class="continer col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-title">
                    <span class="h3">Add Article </span>
                </div>
                <div class="card-body">
                    <form action="/posts/{{$post->id}}" method="post" class="form-sample" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title" class="">Title:</label>
                            <input class="form-control" type="text" id="title" name="title"
                                value="{{$post->title}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea id="description" class="form-control" style="color:black;" name="description" rows="3">{!!$post->description!!}</textarea>
                        </div>

                        <div class="form-group">
                            <div>
                                <img src="{{asset($post->featured)}}" width="350" alt="">
                            </div>
                            <div class="py-2"></div>
                            <label for="featured" class="">Update Featured Image:</label>
                            <input class="form-control" type="file" id="featured" name="featured"
                                placeholder="Update Featured Image" accept="image/jpg, image/png, image/webp, image/jpeg">
                        </div>
                        <button type="submit" class="btn btn-success"> Update Post </button>
                        <a href="/posts" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
