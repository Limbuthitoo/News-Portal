@extends('backend.app');
@section('content')
    <div class="card p-4">
        <div class="card-title">
            <span class="h3">Company Infomration</span>
            @if (empty($company))
                <a href="/nepalnews/create" class="btn btn-success float-right">Add Company</a>
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Company Name </th>
                            <th> Address </th>
                            <th> Email </th>
                            <th> Contact </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                                @if (!empty($company))
                                <td>{{ $company->name }}</td>
                            <td>{{ $company->address }}</td>
                            <td>{{ $company->email }}</td>
                            <td>{{ $company->contact }}</td>
                            <td>
                                <form action="/nepalnews/{{ $company->id }}" method="post">
                                    @csrf
                                    @method("delete")
                                    <a href="/nepalnews/{{ $company->id }}/edit" class="btn btn-success">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
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
