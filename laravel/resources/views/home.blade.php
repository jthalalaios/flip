@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">A/A</th>
                                <th scope="col">Name</th>
                                <th scope="col">Fullname</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Date of birth</th>
                            </tr>
                        </thead>
                        @if (isset($flip_users))
                        @foreach ($flip_users as $flip_user)
                        <tbody>
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$flip_user['name']}}</td>
                                <td>{{$flip_user['fullname']}}</td>
                                <td>{{$flip_user['email']}}</td>
                                <td>{{$flip_user['phone']}}</td>
                                <td>{{date('Y-M-d', strtotime($flip_user['date_of_birth']))}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                        @endif
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
