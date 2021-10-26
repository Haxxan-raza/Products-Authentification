@extends('layouts.layout')
@section('content')
<div class="container">
  <h2>Contextual Classes</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
  <table class="table">
    <thead>
      <tr>
        <th>id </th>
        <th>Dresses</th>
      </tr>
      @foreach ($dresses as $data)
    </thead>
    <tbody>      
      <tr class="success">
        <td>{{$data->id}}</td>
        <td>{{$data->dresses}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>
@endsection