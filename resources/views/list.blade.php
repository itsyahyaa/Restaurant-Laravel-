@extends('layout')

@section('content')

<h1></h1>
Restaurant List Page Is Here
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
