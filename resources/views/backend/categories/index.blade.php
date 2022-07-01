@extends('backend.app');
@section('content')
    <div class="card p-4">
        <div class="card-title">
            <span class="h3"> Categories</span>

                <a href="/categories/create" class="btn btn-success float-right">Add Category</a>

        </div>
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nepali</th>
            <th>English</th>
            <th>Slug</th>
            <th>Action</th>

        </tr>
    </thead>
<tbody>
    @foreach ($categories as $category)
    <tr>

<td>{{$category->cat_nep}}</td>
<td>{{$category->cat_eng}}</td>
<td>{{$category->slug}}</td>
<td>
    <form action="/categories/{{$category->id}}" method="post">
    @csrf
    @method('delete')
    <a href="/categories/{{$category->id}}/edit" class="btn btn-success">Edit</a>
    <button class="btn btn-danger">Delete</button>
    </form>
</td>



    </tr>
    @endforeach
</tbody>
</table>
            </div>
        </div>
    </div>
@endsection
