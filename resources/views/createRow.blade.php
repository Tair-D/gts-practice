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
                    <form method="POST" action="save">

                        @csrf
                        <div class="form-group">
                            <label for="name">First Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Введите имя">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" placeholder="Введите фамилию">
                        </div>
                        <div class="form-group">
                            <label for="birth_date">BirthDate</label>
                            <input type="date" class="form-control" id="birth_date" >
                        </div>

                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>