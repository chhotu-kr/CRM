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
                        <h5 class="">Manage Company</h5>
                    </div>
                    <div class="col-4">
                        <a href="{{route('insert.company')}}" class="btn btn-primary">Insert Company</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Logo</th>
                        <th>Website</th>
                        
                    </tr>
                    @foreach ($company as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td> <img src="{{asset('images/'.$item->logo)}}" width="50px" height="auto"></td>
                            <td>{{$item->website}}</td>
                            <td>
                                <a href="{{route('update.company',['id'=>$item->id])}}" class="btn btn-success">Edit</a>
                                <a href="{{route('remove.company',['id'=>$item->id])}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection