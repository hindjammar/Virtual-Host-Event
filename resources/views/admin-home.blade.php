@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>welcom to the Admin Dashboard</h3>
                    {{ __('You are logged in!') }}
                    {{-- <a href="{{ url('/') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a> --}}
                            <a class="btn btn-primary btn-submit m-3" href="{{url('admin/home/aff')}}">Ajouter</a>
                           
                                <table class="table table-striped">
                                    <tr class="thead-dark">
                                        <th>N°</th>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>Profistion</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                                        
                                    </tr>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($d as $m)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$m->name}}</td>
                                            <td>{{$m->email}}</td>
                                            <td>{{$m->is_admin}}</td>
                                            <td>{{$m->password}}</td>
                                            <td><a class="btn btn-primary btn-submit m-3" href="{{url('admin/home/editU/'.$m->id)}}">Edit</a></td>
                                        </tr>
                                    @endforeach
                                </table>
                                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


