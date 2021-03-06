@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit User {{$user->name}}</div>

                    <div class="card-body">
                        <form action="{{route('admin.users.update', [$user->id])}}" method="POST">
                            @csrf
                            @method('PUT')

                            @foreach($roles as $role)
                                <div class="form-check">
                                    <input type="checkbox" name="roles[]" value="{{$role->id}}">
                                    <label for="">{{$role->name}}</label>
                                </div>
                            @endforeach
                            <button class="btn btn-primary">
                                Alterar
                            </button>



                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

