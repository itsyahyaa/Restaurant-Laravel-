@extends('layout')

@section('content')

<h1>Restaurant List Page Is Here</h1>
@if(Session::get('status'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('status')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif

<table class="table ">
<thead>
    <tr class="bg-dark text-light">
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
{{-- Displaying data in loop format --}}
    @foreach ($data as $item)
    <tbody>
      <tr>
        <th scope="row">{{$item['id']}}</th>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['address']}}</td>
      </tr>
    </tbody>
    @endforeach
</table>


@stop
