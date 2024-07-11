@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-2 col-sm-4 bg-light">
        <ul class="nav flex-column nav-pills mt-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Analytics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
        </ul>
      </div>

      <div class="col-md-10 col-sm-8">
        <div class="row mt-3">
          <div class="col">
            <h3>{{__('Dashboard')}}</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
        <a href="/home/adding_new_employee" style="text-decoration: none;">
            <div class="card">
              <div class="card-header bg-primary text-light">
                <h5 class="card-title"><i class="fa-solid fa-user"></i> {{__('New Employee')}}</h5>
              </div>
              <div class="card-body">
                <p class="card-text">{{__('Adding Employee with his Employee ID Resdent details.')}}</p>
              </div>
        </a>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-header bg-success text-light">
                <h5 class="card-title">Card Title</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          </div>
      </div>
    </div>
  </div>
@endsection
