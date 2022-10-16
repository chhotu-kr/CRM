@extends('company/base')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            @include('company.side')
        </div>
        <div class="col-9">
            <h3>Insert Employee here</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('store.employee')}}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="">First Name</label>
                            <input type="text" name="firstname" class="form-control" value="{{old('firstname')}}">
                            @error('firstname')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Last Name</label>
                            <input type="text" name="lastname" class="form-control" value="{{old('lastname')}}">
                            @error('lastname')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Company_id</label>
                            <select name="companies_id" id="" class="form-select" required>
                            <option value="0">Select company name</option>
                            @foreach ($company as $new)
                                <option value="{{$new->id}}">{{$new->name}}</option>
                            @endforeach
                            </select>
                          </div>
                        <div class="mb-3">
                            <label for=""> Email</label>
                            <input type="text" name="email" class="form-control" value="{{old('email')}}">
                            @error('email')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for=""> Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{old('phone')}}">
                            @error('phone')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <input type="submit" value="Create"  class="btn btn-success w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection