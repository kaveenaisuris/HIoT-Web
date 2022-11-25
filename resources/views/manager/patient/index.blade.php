
@extends('layouts.doctorsidebar')

@section('content')
<div class="container-fluid" style="margin-left: 300px; margin-top:50px;">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
          <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i>{{ __('Users') }}</div>
              <div class="card-body">
                  <table class="table table-responsive-sm table-striped">
                  <thead>
                    <tr>
                      <th>Patient Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($items as $user)
                      <tr>

                        <td>{{ $user->user->name }}</td>
                        <td>{{ $user->user->email }}</td>
                         <td>{{ $user->user->phone }}</td>
                        <td>
                          <a href="" class="btn btn-block btn-primary">View</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
