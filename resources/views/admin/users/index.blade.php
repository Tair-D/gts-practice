@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Lastname</th>
                                <th scope="col">Birthday</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->birth_date}}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    <a href="api/save">
                        <button type="button" class="btn btn-warning">+</button>
                    </a>
                    <button type="button" class="btn btn-primary">Загрузить с Excel</button>

                    <button type="button" class="btn btn-success">Сохранить</button>

                </div>
            </div>
        </div>
    </div>
</div>