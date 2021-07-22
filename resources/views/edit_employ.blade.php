@extends('layouts.app')

@section('content')
    <div class="card bg-light mt-3">
        <div class="card-header">
             <h1>Employes + Import/Export Excel</h1>
        </div>
            <div class="card-body">
                <form action="{{ url('/employes/store/'.$user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputPassword1" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Department</label>
                        <select class="form-control" name="department">                            
                            @foreach (App\Departament::where('id', '=', $user->departament_id)->get() as $depaertament)                
                                <option value="{{ $depaertament->id }}">{{ $depaertament->name }} </option>
                            @endforeach    
                            @foreach (App\Departament::where('id', '!=', $user->departament_id)->get() as $depaertament)                
                                <option value="{{ $depaertament->id }}">{{ $depaertament->name }}</option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}">
                    </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
    </div>
@endsection
