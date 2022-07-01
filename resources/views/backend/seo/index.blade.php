@extends('backend.app');
@section('content')
    <div class="card p-4">
        <div class="card-title">
            <span class="h3">Seo Table</span>

                <a href="/seo/create" class="btn btn-success float-right">Add Seo</a>

        </div>
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-striped">
    <thead>
        <tr>
            <th>Meta1</th>
            <th>Meta2</th>
            <th>Keywords</th>
            <th>Meta Detail</th>
            <th>Action</th>

        </tr>
    </thead>
<tbody class="height:150px">

    <tr>
@if (!empty($seo))
<td>{{$seo->meta1}}</td>
<td>{{$seo->meta2}}</td>
<td>{{$seo->keywords}}</td>
<td class="width:250;">{{$seo->detail}}</td>
<td>
    <form action="/seo/{{$seo->id}}" method="post">
    @csrf
    @method('delete')
    <a href="/seo/{{$seo->id}}/edit" class="btn btn-success">Edit</a>
    <button class="btn btn-danger">Delete</button>
    </form>
</td>
@endif




    </tr>

</tbody>
</table>
            </div>
        </div>
    </div>
@endsection
