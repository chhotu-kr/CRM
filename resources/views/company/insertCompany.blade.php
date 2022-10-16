@extends('company/base')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            @include('company.side')
        </div>
        <div class="col-9">
            <h3>Insert Company here</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('store.company')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{old('namee')}}">
                            @error('name')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="{{old('email')}}">
                            @error('email')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Logo</label>
                            <input type="file" name="logo" class="form-control" value="{{old('logo')}}">
                            @error('logo')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for=""> Website</label>
                            <input type="text" name="website" class="form-control" value="{{old('website')}}">
                            @error('website')
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