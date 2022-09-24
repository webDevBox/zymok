@extends('layouts.app')
@section('content')
  <h1 class="text-center text-dark">Links</h1>
  <div class="container" data-aos="fade-up">
      <h2>Total: <span>{{ count($links) }}</span></h2>
      <table class="table">
        <thead>
          <tr>
            <th>Date & Time</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($links as $link)
            <tr>
              <td>{{ $link->date_time }}</td>
              
            </tr> 
            @endforeach
        </tbody>
      </table>
  </div>
@endsection