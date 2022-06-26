@extends('frontend.app')
@section('content')
    <div class="container">
        <div class="row g-4 py-3">
            @foreach ($posts as  $post)
            <div class="col-lg-4">
                <a href="/news/{{$post->id}}">
                    <div class="card h-100">
                        <h4 class="card-header fw-bold">{{$post->title}}</h4>
                        <img src="{{asset($post->featured)}}" alt="" class="img-fluid">
                        <div class="card-body">
                            <p>{!!Str::limit($post->description,300)!!}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
