@extends('backend.app');
@section('content')
    <div class="row">
        <div class="continer col-12 grid-margin stretch-card">
            <div class="card p-4">
                <div class="card-title">
                    <span class="h3">Add Ad </span>
                </div>
                <div class="card-body">
                    <form action="/ads/{{$ad->id}}" method="post" class="form-sample" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="company_name" class="">Company Name:</label>
                            <input class="form-control" type="text" id="company_name" name="company_name"
                                value="{{$ad->company_name}}">
                        </div>
                        <div class="form-group">
                            <label for="ad_type" class="">Ads Type:</label>
                            <input class="form-control" type="text" id="ad_type" name="ad_type"
                            value="{{$ad->ad_type}}">
                        </div>
                        <div class="form-group">
                            <label for="link" class="">Link:</label>
                            <input class="form-control" type="text" id="link" name="link"
                            value="{{$ad->link}}">
                        </div>
                        <div class="form-group">
                            <label for="contact" class="">Contact:</label>
                            <input class="form-control" type="text" id="contact" name="contact"
                            value="{{$ad->contact}}">
                        </div>

                        <div class="form-group">
                            <div><img src="{{asset($ad->ad_image)}}" width="300" alt=""></div>
                            <label for="ad_image" class="">Upload Banner:</label>
                            <input class="form-control" type="file" id="ad_image" name="ad_image"
                                placeholder="Update Featured Image" accept="image/jpg, image/png, image/gif,  image/webp, image/jpeg">
                        </div>
                        <button type="submit" class="btn btn-success"> Update Ad </button>
                        <a href="/ads" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
