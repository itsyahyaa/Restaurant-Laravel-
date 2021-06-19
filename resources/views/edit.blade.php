@extends('layout')

@section('content')

<h1>Edit Restaurant Page here </h1>
<form action="update" method="POST">
@csrf
<div class="col-sm-8">
    <div class="mb-3 ">
    
      <label  class="form-label">Name </label>
      <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{$data['name']}}">
    </div>
    <div class="mb-3 ">
        <label  class="form-label">Email </label>
        <input type="email" class="form-control" name="email" placeholder="Enter Your Email" value="{{$data['email']}}">
      </div>
      <div class="mb-3 ">
        <label  class="form-label">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Enter Your Address" value="{{$data['address']}}">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
  </form>

@stop
