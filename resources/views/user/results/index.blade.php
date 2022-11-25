
@extends('layouts.userside')

@section('content')
<div class="container-fluid" style="margin-left: 300px; margin-top:50px;">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
          <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i>{{ __('Results') }}</div>
              <div class="card-body">
                  <table class="table table-responsive-sm table-striped">
                  <thead>
                    <tr>
                      <th>Username</th>
                      <th>E-mail</th>
                      <th>Roles</th>
                      <th>Email verified at</th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @foreach($users as $user) --}}
                      <tr>
                        <td>ww</td>
                        <td>ww</td>
                        <td>ww</td>
                        <td>w</td>
                        <td>
                          <a href="" class="btn btn-block btn-primary">View</a>
                        </td>
                        <td>
                          <a href="" class="btn btn-block btn-primary">Edit</a>
                        </td>
                        <td>
                          <form action="" method="POST">
                              @method('DELETE')
                              @csrf
                              <button class="btn btn-block btn-danger">Delete User</button>
                          </form>
                        </td>
                      </tr>
                    {{-- @endforeach --}}
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
