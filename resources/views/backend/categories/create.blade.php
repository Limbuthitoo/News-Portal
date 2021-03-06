@extends('backend.app');
@section('content')
    <div class="row">
        <div class="continer col-12 grid-margin stretch-card">
            <div class="card p-4">
                <div class="card-title">
                    <span class="h3">Add Category </span>
                </div>
                <div class="card-body">
                    <form action="/categories" method="post" class="form-sample" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="cat_nep" class="">Category(Nepali):</label>
                            <input class="form-control" type="text" id="cat_nep" name="cat_nep"
                                >
                        </div>
                        <div class="form-group">
                            <label for="cat_eng" class="">Category(English):</label>
                            <input class="form-control" type="text" id="cat_eng" name="cat_eng"
                                >
                        </div>
                        <button type="submit" class="btn btn-success"> Add Category </button>
                        <a href="/categories" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
