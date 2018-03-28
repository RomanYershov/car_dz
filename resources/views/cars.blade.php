@extends('layouts.app')
@section('content')

    <div class="container">
        <table class="table table-responsive">
          <tr>
              <th>Model</th>
              <th>Issue Date</th>
              <th>Color</th>
          </tr>
            @foreach($cars as $car)
              <tr>
                  <td>{{$car->model}}</td>
                  <td>{{$car->issueDate}}</td>
                  <td>{{$car->color}}</td>
              </tr>
            @endforeach
        </table>
    </div>


    @endsection