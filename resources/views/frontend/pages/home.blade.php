@extends('frontend.app')
@section('content')
<div class="container py-3">
    <div class="card overflow-hidden">
        <a href=""><img src="{{asset($headad->ad_image)}}" alt="" class="card-img-top img-fluid"></a>
    </div>
    <hr class="text-muted">
</div>

<!-- home news -->
<div class="container ">
    <div class="row">
        @foreach ($posts as $index=>$post )
        @if ($index==0)
        <div class="col-lg-12">
            <div class="card ">
                <a href="/news/{{$post->id}}">

                <div class="card-body text-center">
                        <h4 class="card-title fw-bold display-4">{{$post->title}}</h4>
                        <img src="{{asset($post->featured)}}" alt="" class="card-img-top">
                        <div class="py-2"></div>
                        {!!Str::limit($post->description,250)!!}
                </div>
                </a>
                <p class="py-2 px-4 text-end"><span class="fw-bold">Updated at:</span> {{$post->created_at->diffForHumans()}}</p>
            </div>
        </div>
        @endif
        @endforeach

    </div>

    <div class="py-3"></div>
<div class="row">
    @foreach ($posts as $index=>$post )
        @if ($index>0 && $index<=1)


        <div class="card-body text-center">
            <a href="/news/{{$post->id}}">
            <h1 class="card-title fw-bold">{{$post->title}}</h1>
            </a>
            <div><p class="py-3 px-4 text-end"><span class="fw-bold">Updated at:</span> {{$post->created_at->diffForHumans()}}</p></div>
        </div>

        @endif
    @endforeach
</div>
<div class="py-2"></div>

<hr class="text-muted">
</div>

<!-- Latest News -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">

            <div class="row">

                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-between py-3 px-4 bg-light">
                            <span class="fw-bold">
                                ताजा अपडेट
                            </span>
                            <span>
                                <a href="" class="nav-link fw-bold text-danger">थप+</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-8 py-3">
                        <div class="row">
                            @foreach ($posts as $index=>$post)
                            @if ($index>1 && $index <=3 )
                            <div class="col-lg-6">
                                <a href="/news/{{$post->id}}">
                                    <div class="card overflow-hidden h-100">
                                        <img src="{{asset($post->featured)}}" class="img-fluid" alt="">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold">{{$post->title}}</h5>
                                            <p style="font-size: 12px">{{$post->created_at->diffForHumans()}}</p>
                                            <div class="py-1" style="font-size: 15px">{!!Str::limit($post->description,200)!!}</div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-4 py-4">
                        <div class="row">
                            @foreach ($posts as $index=>$post)
                                @if ($index>3 && $index<9)
                                <a href="/news/{{$post->id}}">
                                    <div class="py-1 d-flex ">
                                        <div class="col-4">
                                            <img src="{{asset($post->featured)}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-8 px-3">
                                            <h6 class="fw-bold">{{Str::limit($post->title,50)}}</h6>
                                            <p style="font-size: 12px">{{$post->created_at->diffForHumans()}}</p>
                                        </div>
                                    </div>
                                </a>

                                @endif
                            @endforeach

                        </div>
                    </div>

            </div>
        </div>

    </div>

</div>


<!-- Body_ad Here -->
<div class="container">
    <hr class="text-muted">
    <div class="py-2"><div class="card overflow-hidden">
        <a href=""><img src="{{asset($bodyad->ad_image)}}" alt="" class="card-img-top img-fluid"></a>
    </div></div>
    <hr class="text-muted">
</div>
<!-- Politics News -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">

            <div class="row">

                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-between py-3 px-4 bg-light">
                            <span class="fw-bold">
                                {{$category->cat_nep}}
                            </span>
                            <span>
                                <a href="" class="nav-link fw-bold text-danger">थप+</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-6 py-3">
                        <div class="row">

                            @foreach ($politics as $index=> $politic )
                            @if ($index==0)
                            <a href="/news/{{$politic->id}}">
                                <div class="col-lg-12">
                                    <div class="card overflow-hidden">
                                        <img src="{{asset($politic->featured)}}" class="img-fluid" alt="">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold">{{$politic->title}}</h5>
                                            <p style="font-size: 12px">{{$politic->created_at->diffForHumans()}}</p>
                                            <div class="py-1" style="font-size: 15px">{!!Str::limit($politic->description,200)!!}</div>

                                        </div>
                                    </div>
                                </div>
                            </a>

                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 py-3">
                        <div class="row gy-3">
                            @foreach ($politics as $index=> $politic)
                                @if ($index>0 && $index<6)
                                <div class="col-lg-12">
                                    <div class="row ">
                                        <a href="/news/{{$politic->id}}" class="d-flex">
                                            <div class="col-4">
                                                <img src="{{asset($politic->featured)}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-8 px-2">
                                                <h6 class="fw-bold ">{{Str::limit($politic->title,50)}}</h6>
                                                <p style="font-size: 12px">{{$politic->created_at->diffForHumans()}}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                @endif
                            @endforeach

                        </div>
                    </div>

            </div>
        </div>
        <div class="col-lg-4">
            <div class="card"></div>
        </div>
    </div>
</div>
@endsection
