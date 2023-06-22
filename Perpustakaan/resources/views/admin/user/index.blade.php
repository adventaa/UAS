@extends('admin.layouts.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4" style="min-height: 733px;">
            <div class="card">
                <div class="card-header">
                    Data User
                </div>

                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                </tr>
                                @foreach ( $users as $user )
                                <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <th>{{ $user->name }}</th>
                                        <th>{{ $user->email}}</th>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection