
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
                        <th>Appoinment Date</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Country</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($items as $user)
                      <tr>
                        <td>{{ $user->date }}</td>
                        <td>{{ $user->user->name }}</td>
                        <td>{{ $user->user->email }}</td>
                        <td>{{ $user->user->address }}</td>
                        <td>{{ $user->user->country }}</td>
                        @if ($user->status == 'Pending')
                          <td style="color: yellow">{{ $user->status }}</td>
                          @elseif ($user->status == 'Confirmed')
                          <td style="color: green">{{ $user->status }}</td>
                          @else
                          <td style="color: red">{{ $user->status }}</td>
                        @endif
                        @if ($user->status == 'Pending')
                        <td>
                          <a href="{{ 'dappoinment' . '/' . $user->id . '/edit' }}" class="btn btn-block btn-warning">Cancel</a>
                        </td>
                        @elseif ($user->status == 'Confirmed')
                        <td>
                            <a href="{{route('confirmAppoinment.show', $user->id) }}" class="btn btn-block btn-primary">View</a>
                          </td>
                        @endif
                        <td>
                            <form action="{{ 'dappoinment' . '/' . $user->id }}"
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
