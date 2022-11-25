
@extends('layouts.userside')

@section('content')
<div class="col-sm-9  container-fluid" style="margin-left: 300px;   position: absolute; margin-top:50px;">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i>{{ __('Doctors') }}</div>
                <br>
              <div class="card-body">
                  <table class="table table-responsive-sm table-striped">
                  <thead>
                    <tr>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Country</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($items as $user)
                      <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->country }}</td>
                        <td>
                          <a href="{{ route('doctorview.show', $user->id) }}" class="btn btn-block btn-primary">View</a>
                        </td>
                        <td>
                        <a class="nav-link" href="{{ 'doctorview' . '/' . $user->id . '/edit' }}"> <button class="btn btn-block btn-success">Make Appointment</button></a>
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
