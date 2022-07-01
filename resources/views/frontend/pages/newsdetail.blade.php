@extends('frontend.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>{{$post->title}}</h1>
                <img src="{{asset($post->featured)}}" alt="" class="img-fluid">
                <div class="py-2">
                    {!!$post->description!!}
                </div>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
@endsection
