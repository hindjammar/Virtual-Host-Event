@extends('layouts.app')

@section('content')

<div class="container">
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @elseif (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('error')}}
        </div>
    @endif
    <form method="post" action="{{url('admin/home/updateU')}}">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$data->id}}">
         <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name"  value="{{$data->name}}">

            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" readonly value="{{$data->email}}">

            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="is_admin" class="form-label">Profession</label>|<span class="text-muted">    admin=>1 | user=>0 | manager=>2</span>
            <input type="number" name="is_admin" id="is_admin" class="form-control" placeholder="Profestion" readonly value="{{$data->is_admin}}">

            @error('is_admin')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="{{$data->password}}">

            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        

        

        <div class="mb-3">
            <button type="submit" class="btn btn-success btn-submit">Update</button>
            <a href="{{url('admin/home')}}" class="btn btn-primary">Back</a>
        </div>
    </form>
</div>

@endsection