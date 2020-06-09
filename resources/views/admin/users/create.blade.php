@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create</div>
                <div class="card-body">
                    <!-- <form action="{{route('admin.users.create')}}" method="POST">

                    </form> -->
                    <form method="POST" action="{{ route('admin.users.create') }}">

                        @csrf
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstNameInput" placeholder="Введите имя">
                        </div>
                        <div class="form-group">
                            <label for="firstName">Last Name</label>
                            <input type="text" class="form-control" id="lastNameInput" placeholder="Введите фамилию">
                        </div>
                        <div class="form-group">
                            <label for="firstName">BirthDate</label>
                            <input type="date" class="form-control" id="birthInput" >
                        </div>

                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>