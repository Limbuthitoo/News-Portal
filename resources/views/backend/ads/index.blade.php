@extends('backend.app');
@section('content')
    <div class="card p-4">
        <div class="card-title">
            <span class="h3">Ads List</span>

                <a href="/ads/create" class="btn btn-success float-right">Add Ad</a>

        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($ads as $ad)
                <div class="col-md-3">
                    <div class="card p-2" style="background-color: white; ">

                        <img src="{{$ad->ad_image}}" alt=""  class="card-img-top">
                        <div class="py-2"></div>
                            <div class="card-title" style="color:black;">
                                <h3>{{$ad->ad_type}}</h3>
                            </div>
                            <div class="px-3">
                                <form action="/ads/{{$ad->id}}" method="post">
                                @csrf
                                @method('delete')
                                    <a href="/ads/{{$ad->id}}/edit" class="btn btn-success">Edit</a>
                                    <button type="submit" class="btn btn-danger float-right">Delete</button>
                                </form>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
