@extends('layouts.doctorsidebar')

@section('content') <br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Doctor Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged as Doctor dashboard
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
