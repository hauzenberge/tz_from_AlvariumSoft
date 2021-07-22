@extends('layouts.app')

@section('content')
    <div class="card bg-light mt-3">
        <div class="card-header">
             <h1>Employes + Import/Export Excel</h1>
        </div>
            <div class="card-body">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control" required>
                    <br>
                    <button class="btn btn-success">Import Employes</button>
                    <a class="btn btn-warning" href="{{ route('export') }}">Export Employes</a>
                </form>
            </div>
    </div>

    <div class="card bg-light mt-3">
        <div class="card-header">
            <h1>Employes</h1>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th> ID</th>
                        <th> Name</th>
                        <th> Departament</th>
                        <th> Email</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td> {{$user->name}} </td>
                            <td> 
                                <a href="{{url('/employes/'.$user->departament_id)}}">
                                    {{App\Departament::where('id', '=', $user->departament_id)->get()[0]->name}}
                                </a>
                            </td>
                            <td> {{$user->email}} </td>
                            <td>
                                <a type="button" href="{{url('/employes/edit/'.$user->id)}}">
                                  <i class="fa fa-bars">Edit</i>
                                </a>
                            </td>
                            <td>
                                <a type="button" href="{{url('/employes/destroy/'.$user->id)}}">
                                  <i class="fa fa-trash">Delete</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
