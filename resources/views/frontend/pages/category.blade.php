@extends('frontend.app')
@section('content')
    <div class="container">
        <div class="row py-3 g-2">
            <div class="col-lg-9">
                <div class="row g-2 ">
                    @foreach ($posts as $index=> $post)
                    @if ($index==0)
                    <div class="col-lg-12">
                        <div class="card text-center">
                            <div class="card-footer">
                                <h3 class="fw-bold py-3"> {{$post->title}}</h3>
                            </div>
                            <img src="{{asset($post->featured)}}" alt="" class="img-fluid">
                            <div class="card-body">
                                <p>
                                    {!!Str::limit($post->description,350)!!}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100 text-center">
                    <h1>ad here</h1>
                </div>
            </div>
        </div>
         <!-- Body_ad Here -->
         <div class="container">
            <hr class="text-muted">
            <div class="py-2"><div class="card overflow-hidden">
                <a href="">
                    <img src="{{asset($catbodyad->ad_image)}}" alt="" class="card-img-top img-fluid">
                </a>
            </div>
        </div>
            <hr class="text-muted">
        </div>
        <div class="row g-3">
            @foreach ($posts as $index=> $post)
                @if ($index>0 && $index<7)
                    <div class="col-lg-4">
                        <a href="/news/{{$post->id}}">
                            <div class="card h-100 text-center">
                                <h4 class="card-header fw-bold py-3">{{$post->title}}</h4>
                                <img src="{{asset($post->featured)}}" alt="" class="img-fluid">
                                <div class="card-body">
                                    <p>
                                        {!!Str::limit($post->description,150)!!}
                                    </p>
                                </div>
                                <p class="text-end px-4">
                                    <small>
                                        {{$post->created_at->diffForHumans()}}
                                    </small>
                                </p>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="py-5">
    </div>
@endsection
