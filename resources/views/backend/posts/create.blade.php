@extends('backend.app');
@section('content')
    <div class="row">
        <div class="continer col-12 grid-margin stretch-card">
            <div class="card p-4">
                <div class="card-title">
                    <span class="h3">Add Article </span>
                </div>
                <div class="card-body">
                    <form action="/posts" method="post" class="form-sample" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title" class="">Title:</label>
                            <input class="form-control" type="text" id="title" name="title"
                                placeholder="Enter post title">
                        </div>
                        <div class="form-group">
                            <label for="category_id" class="" for="id_label_multiple">Category:</label>
                            <select name="category_id[]" id="id_label_multiple" style="color: black;" class="select2 js-states form-control" multiple="multiple">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">
                                    {{$category->cat_nep}}
                                </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea id="description" class="form-control" style="color:black;" name="description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="featured" class="" >Update Featured Image:</label>
                            <input class="form-control" type="file" id="featured" name="featured"
                                placeholder="Update Featured Image" accept="image/jpg, image/png, image/webp, image/jpeg">
                        </div>
                        <button type="submit" class="btn btn-success"> Add Post </button>
                        <a href="/posts" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
