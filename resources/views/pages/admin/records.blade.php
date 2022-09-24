@extends('layouts.app')
@section('content')
  <h1 class="text-center text-dark">Views</h1>
  <div class="container" data-aos="fade-up">
      <h2>Total: <span>{{ count($views) }}</span></h2>
      <table class="table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Country</th>
            <th>City</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($views as $view)
            <tr>
              <td>{{ $view->date_time }}</td>
              <td>{{ $view->country }}</td>
              <td>{{ $view->city }}</td>
            </tr> 
            @endforeach
        </tbody>
      </table>
  </div>
@endsection