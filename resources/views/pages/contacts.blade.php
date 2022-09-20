@extends('layouts.app')
@section('content')
  <h1 class="text-center text-dark">Contacts</h1>
  <div class="container" data-aos="fade-up">
      <h2>Total: <span>{{ count($contacts) }}</span></h2>
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Country</th>
            <th>City</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
              <td>{{ $contact->name }}</td>
              <td>{{ $contact->email }}</td>
              <td>{{ $contact->country }}</td>
              <td>{{ $contact->city }}</td>
              <td>{{ $contact->subject }}</td>
              <td>{{ $contact->message }}</td>
              <td>{{ $contact->date_time }}</td>
              
            </tr> 
            @endforeach
        </tbody>
      </table>
  </div>
@endsection