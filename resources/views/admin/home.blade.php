@extends('admin.layout')
@section('title', 'Home')

@section('content')
<div class="row g-4">
  <div class="col-md-4">
    <div class="card text-white bg-success shadow">
      <div class="card-body">
        <h5>Total Applications</h5>
        <h3>{{ $total }}</h3>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-white bg-primary shadow">
      <div class="card-body">
        <h5>New This Week</h5>
        <h3>{{ $newThisWeek }}</h3>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-white bg-warning shadow">
      <div class="card-body">
        <h5>Classes Offered</h5>
        <h3>4</h3>
      </div>
    </div>
  </div>
</div>

<div class="card mt-4 shadow-sm">
  <div class="card-body">
    <h5 class="text-success">Welcome to Ambassador Academy Admin Panel</h5>
    <p>Here you can manage applications, view alumni updates, handle messages, and maintain student records — all in one place!</p>
  </div>
</div>
@endsection
