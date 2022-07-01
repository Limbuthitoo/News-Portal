@extends('backend.app');
@section('content')
    <div class="row">
        <div class="continer col-12 grid-margin stretch-card">
            <div class="card p-4">
                <div class="card-title">
                    <span class="h3">Add Seo </span>
                </div>
                <div class="card-body">
                    <form action="/seo" method="post" class="form-sample" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="meta" class="">Meta:</label>
                            <input class="form-control" type="text" id="meta" name="meta"
                                >
                        </div>
                        <div class="form-group">
                            <label for="meta1" class="">Meta1:</label>
                            <input class="form-control" type="text" id="meta1" name="meta1"
                                >
                        </div>
                        <div class="form-group">
                            <label for="keywords" class="">Keywords:</label>
                            <input class="form-control" type="text" id="keywords" name="keywords"
                                >
                        </div>
                        <div class="form-group">
                            <label for="detail" class="">Detail:</label>
                            <input class="form-control" type="text" id="detail" name="detail"
                                >
                        </div>
                        <button type="submit" class="btn btn-success">Add Seo</button>
                        <a href="/seo" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
