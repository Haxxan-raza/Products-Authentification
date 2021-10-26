@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Products</h2>
<div class="row">
<div class="col-sm-4">
  <img src="/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Dresses Products</h1>
  <p class="price">15% Discount</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><a href="{{url('product.showData')}}" class="btn btn-primary">Dresses</a></p>
  
</div>

<div class="col-sm-4">
  <img src="/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Shoes Products</h1>
  <p class="price">10% Discount</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><a href="" class="btn btn-primary">Shoes</a></p>
</div>
<div class="col-sm-4">
  <img src="/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Accessories Products</h1>
  <p class="price">10% Discount</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><a href="{{url('admin/products/show')}}" class="btn btn-primary">Accessories</a></p>
</div>
</div>
</body>
</html>
@endsection
