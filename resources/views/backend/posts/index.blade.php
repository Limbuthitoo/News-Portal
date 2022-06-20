@extends('backend.app');
@section('content')
    <div class="card p-4">
        <div class="card-title">
            <span class="h3">News Articles</span>

                <a href="/posts/create" class="btn btn-success float-right">Add Article</a>

        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-3">
                    <div class="card p-2" style="background-color: white; ">

                        <img src="{{$post->featured}}" alt=""  class="card-img-top">
                        <div class="py-2"></div>
                            <div class="card-title" style="color:black;">
                                <p>{{$post->title}}</p>
                            </div>
                            <div class="px-3">
                                <form action="/posts/{{$post->id}}" method="post">
                                @csrf
                                @method('delete')
<a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
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
