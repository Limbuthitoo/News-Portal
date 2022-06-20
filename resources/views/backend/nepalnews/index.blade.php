@extends('backend.app');
@section('content')
    <div class="card p-4">
        <div class="card-title">
            <span class="h3">Company Infomration</span>
            @if ($company->isEmpty)
                <a href="/nepalnews/create" class="btn btn-success float-right">Add Company</a>
            @endif

        </div>
        <div class="card body">
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
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->address }}</td>
                            <td>{{ $company->email }}</td>
                            <td>{{ $company->contact }}</td>
                            <td><a href="/nepalnews/{{ $company->id }}/edit" class="btn btn-success">Edit</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
