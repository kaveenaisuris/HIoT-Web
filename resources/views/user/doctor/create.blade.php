@extends('layouts.userside')

@section('content')
    <div class="col-sm-9  container-fluid" style="margin-left: 300px;   position: absolute; margin-top:50px;">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-8 ">
                    <div class="card" style="background-color: #F0FFFF">
                        <br>
                        <div>
                            <center>
                                <h2>Make An Appointment</h2>
                            </center>
                        </div>
                        <br>
                        <form action="{{ route('doctorview.update', $doctor->id) }}" method="POST">
                        @csrf

@if ($entity->id)
    {{ method_field('put') }}
    @csrf
    @endif
                            {{-- <!-- 2 column grid layout with text inputs for the first and last names --> --}}
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b> <label class="form-label" for="form6Example1">First name</label></b>
                                        <input type="text" value="{{$entity->first_name}}" name="fname" id="form6Example1" class="form-control" readonly/>

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b><label class="form-label" for="form6Example2">Last
                                                name</label></b>
                                        <input type="text" value="{{$entity->last_name}}" name="lname" id="form6Example2" class="form-control" readonly/>

                                    </div>
                                </div>
                            </div>

                         

                            <!-- Text input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example4">Doctor Name</label></b>
                                    <input type="text" value="{{$doctor->name}}" name="adddoctorress" id="form6Example4" class="form-control" readonly />
                                </div>
                            </div>

                            <!-- Number input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example6">Date</label></b>
                                    <input type="date" name="date" id="form6Example6" class="form-control" />
                                </div>
                            </div>

                        
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example6">message</label></b>
                                    <input type="text" name="message" id="form6Example6" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4">Add Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
    </div>
@endsection
