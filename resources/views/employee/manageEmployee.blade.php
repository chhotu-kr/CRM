@extends('company.base')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                @include('company.side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-8">
                        <h5 class="">Manage Employee</h5>
                    </div>
                    <div class="col-4">
                        <a href="{{route('insert.employee')}}" class="btn btn-primary">Insert Employee</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Company Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                    @foreach ($emp as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->firstname}}</td>
                            <td>{{$item->lastname}}</td>
                            <td>{{$item->company->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>
                                <a href="{{route('update.employee',['id'=>$item->id])}}" class="btn btn-success">Edit</a>
                                <a href="{{route('remove.employee',['id'=>$item->id])}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection