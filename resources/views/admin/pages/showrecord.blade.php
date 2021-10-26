@extends('layouts.layout')
@section('content')
  <p><h1>Table Record</h1></p>  
  
  @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
  <table class="table">
    <thead>
        
      <tr>
        <th>Name</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $data)
      <tr>
        <!-- <td>{{$data->user_id}}</td> -->
        <td>{{$data->name}}</td>
        <td><img width="30%" class="img-circle" src="{{ asset('images/' . $data->image)}}" /></td>
        <td><a href="{{url('admin/editrecord'.'/'.$data->id)}}" class="btn btn-primary">Edit </a></td>
      </tr>
    </tbody>
    <div class="d-flex justify-content-center">
</div>
    @endforeach
  </table>
        <div class="d-flex justify-content-center">
                {!! $users->appends(['sort' => 'science-stream'])->links() !!}
            </div>            
  @endsection