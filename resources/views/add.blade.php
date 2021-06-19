@extends('layout')

@section('content')

<h1>Add Restaurant Page here </h1>
<form action="" method="POST">
@csrf
<div class="col-sm-8">
    <div class="mb-3 ">
      <label  class="form-label">Name </label>
      <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
    </div>
    <div class="mb-3 ">
        <label  class="form-label">Email </label>
        <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
      </div>
      <div class="mb-3 ">
        <label  class="form-label">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Enter Your Address">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
  </form>

@stop
