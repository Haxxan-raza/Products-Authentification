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
  <form action="{{ url('admin/products') }}" method="post" enctype="multipart/form-data" >
    <div class="form-group">
    @csrf
    <input type="hidden" name="form_id"  >
    <input type="hidden" name="user_id" id="user_id" value="">
    @error('user_id')
          <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      <label for="name">Dress:</label>
      <input type="text" class="form-control" id="dresses" placeholder="Enter name" name="dresses" >
      @error('dresses')
          <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <label for="name">Shoes:</label>
      <input type="text" class="form-control" id="shoes" placeholder="Enter name" name="shoes" >
      @error('shoes')
          <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <label for="name">Accessories:</label>
      <input type="text" class="form-control" id="accessories" placeholder="Enter name" name="accessories" >
      @error('accessories')
          <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    
    <label class="custom-file-label" for="inputGroupFile01">Image Select... </label>
    <input type="file" class="custom-file-input"  name ="image" id="image" >
    
    @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="" class="btn btn-primary">Show Record</a>
  </form>
@endsection