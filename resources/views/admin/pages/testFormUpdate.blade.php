@extends('layouts.layout')
@section('content')

<h2>Data form</h2>
@if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif

  <form action="{{url('admin/edit')}}" method="post" enctype="multipart/form-data" >
    <div class="form-group">
    @csrf
    <input type="hidden" name="id"  value="{{ $allrecord->id ?? ''}}">
    <input type="hidden" name="user_id" id="user_id" value="{{$allrecord->user_id ?? ''}}">
    @error('user_id')
          <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $allrecord->name ?? ''}}">
      @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    
    
    <div class="form-group">
    <div class="custom-file">
    <input type="file" class="custom-file-input"  name ="image" id="image" enctype="multipart/form-data" value="{{ asset('images/' . $allrecord->image)}}" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Image Select... </label>
    <img width="60px" height="50px" class="img-circle" src="{{ asset('images/' . $allrecord->image)}}" />
    @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  </div>
    <button type="submit" class="btn btn-primary">Update Submit</button>
    <!-- <a href="showrecord" class="btn btn-primary">Show Record</a> -->
  </form>
@endsection