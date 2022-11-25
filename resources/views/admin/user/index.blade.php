
@extends('layouts.adminside')

@section('content')
<div class="col-sm-9  container-fluid" style="margin-left: 300px;   position: absolute; margin-top:50px;">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i>{{ __('Users') }}</div>
                <br>
                <div class="col-md-4">
                    <a class="nav-link" href="{{ route('patiantuser.create') }}"> <button class="btn btn-block btn-success">Add New</button></a>
                </div>
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
                          <a href="{{ route('patiantuser.show', $user->id) }}" class="btn btn-block btn-primary">View</a>
                        </td>
                        <td>
                          <a href="{{ 'patiantuser' . '/' . $user->id . '/edit' }}" class="btn btn-block btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('patiantuser.destroy', $user->id) }}"
                                method="POST" class="form form-inline js-confirm-delete">
                              {{ method_field('delete') }}
                              @csrf
                              <button class="btn btn-danger js-tooltip"
                                      title="PERMANENTLY DELETE. THIS CANNOT BE REVERSED!"><em class="fa fa-times"></em> Delete</button>
                          </form>
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
