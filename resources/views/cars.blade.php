@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="well"><a href="/cars/create" class="btn btn-info">Add car</a></div>
        <table class="table table-bordered">
          <tr>
              <th>Model</th>
              <th>Issue Date</th>
              <th>Color</th>
              <th>Image</th>
          </tr>
            @foreach($cars as $car)
              <tr>
                  <td>{{$car->model}}</td>
                  <td>{{$car->issueDate}}</td>
                  <td>{{$car->color}}</td>
                  <td><img src="{{$car->image}}" alt="" width="40px" height="40px"></td>
              </tr>
            @endforeach
        </table>
    </div>


    @endsection