
@extends('layouts.userside')

@section('content')
<div class="col-sm-9  container-fluid" style="margin-left: 300px;   position: absolute; margin-top:50px;">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i>{{ __('Appoinments') }}</div>
                <br>
              <div class="card-body">
                  <table class="table table-responsive-sm table-striped">
                  <thead>
                    <tr>
                      <th>Doctor Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($items as $user)
                      <tr>
                        <td>{{ $user->doctor->name }}</td>
                        <td>{{ $user->doctor->email }}</td>
                        <td>{{ $user->doctor->address }}</td>
                        @if ($user->allow_access == 0)
                          <td style="color: yellow">Allow Access</td>
                          @else
                          <td style="color: red">Remove Access</td>
                        @endif
                        @if ($user->allow_access == 0)
                        <td>
                          <a href="{{ 'confirmdoctors' . '/' . $user->id . '/allow' }}" class="btn btn-block btn-warning">Allow</a>
                        </td>
                        @else
                        <td>
                            <a href="{{ 'confirmdoctors' . '/' . $user->id . '/remove' }}" class="btn btn-block btn-primary">Remove</a>
                          </td>
                        @endif
                        @if ($user->is_blocked == 0)
                        <td>
                          <a href="{{ 'confirmdoctors' . '/' . $user->id . '/block' }}" class="btn btn-block btn-warning">Block</a>
                        </td>
                        @else
                        <td>
                            <a href="{{ 'confirmdoctors' . '/' . $user->id . '/unblock' }}" class="btn btn-block btn-primary">UnBlock</a>
                          </td>
                        @endif
                        <td>
                            <form action="{{ 'confirmdoctors' . '/' . $user->id }}"
                                method="POST" class="form form-inline js-confirm">
                              {{ method_field('delete') }}
                              {{ csrf_field() }}
                              <button class="btn btn-danger js-tooltip"
                                      title="Delete"><em class="fa fa-times"></em> Delete
                              </button>
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
