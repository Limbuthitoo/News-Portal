@extends('backend.app');
@section('content')

    <div class="row">
        <div class="continer col-12 grid-margin stretch-card">
            <div class="card p-4">
                <div class="card-title">
                    <span class="h3">Add Ad </span>
                </div>
                <div class="card-body">
                    <form action="/ads" method="post" class="form-sample" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="company_name" class="">Company Name:</label>
                            <input class="form-control" type="text" id="company_name" name="company_name"
                                placeholder="Enter company name">
                        </div>
                        <div class="form-group">
                            <label for="ad_type">Ads Type</label>
                            <select id="ad_type" class="form-control" name="ad_type">
                                <option value="topbar_ad">Top ads</option>
                                <option value="header_ad">Header ads</option>
                                <option value="body_ad">body ads</option>
                                <option value="catbody_ad">Category body ads</option>
                                <option value="catbody_ad">Side Bar ads</option>
                                <option value="catbody_ad">Footer ads</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="link" class="">Link:</label>
                            <input class="form-control" type="text" id="link" name="link"
                               >
                        </div>
                        <div class="form-group">
                            <label for="contact" class="">Contact:</label>
                            <input class="form-control" type="text" id="contact" name="contact"
                               >
                        </div>

                        <div class="form-group">
                            <label for="ad_image" class="">Upload Banner:</label>
                            <input class="form-control" type="file" id="ad_image" name="ad_image"
                                placeholder="Update Featured Image" accept="image/jpg, image/png, image/gif, image/webp, image/jpeg">
                        </div>
                        <button type="submit" class="btn btn-success"> Add Ad </button>
                        <a href="/ads" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
