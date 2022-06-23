@extends('backend.app');
@section('content')
    <div class="row">
        <div class="continer col-12 grid-margin stretch-card">
            <div class="card p-4">
                <div class="card-title">
                    <span class="h3">Edit Article </span>
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
                            <label for="category_id">Category:</label>
                            <select name="category_id[]" id="category_id" class="js-example-basic-multiple" multiple="multiple" style="width:100%">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}"
                                    @foreach ($post->categories as $item)
                                    {{$item->id ==$category->id? 'selected': ''}}
                                    @endforeach>
                                    {{$category->cat_nep}}

                                </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea id="description" class="form-control" style="color:black;" name="description" rows="3">{!!$post->description!!}</textarea>
                        </div>



                            <div class="form-group">
                                <div>
                                    <img src="{{asset($post->featured)}}" width="350" alt="">
                                </div>
                                <label>Upload Featured Image</label>
                                <input type="file" name="featured" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
                              </div>

                        <button type="submit" class="btn btn-success"> Update Post </button>
                        <a href="/posts" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
