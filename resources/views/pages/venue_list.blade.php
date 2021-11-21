@extends('layouts.app')
@section('content')


<div class="container mt-1">
    <table class="table border table-striped">
        <thead class="bg-primary">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Capacity</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($venues as $venue)
                <tr>
                    <td>{{ $venue->name }}</td>
                    <td>{{ $venue->address }}</td>
                    <td>{{ $venue->capacity }}</td>
                    <td>{{ $venue->price }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

</div>




@endsection
