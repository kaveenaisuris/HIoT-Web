@extends('layouts.adminside')

@section('content')
    <div class="col-sm-9  container-fluid" style="margin-left: 300px;   position: absolute; margin-top:50px;">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-8 ">
                    <div class="card" style="background-color: #F8F8FF">
                        <br>
                        <div>
                            <center>
                                <h2>Add Doctor To System</h2>
                            </center>
                        </div>
                        <br>
                        <form action="{{ route('doctor.store') }}" method="POST">
                            @csrf
                            {{-- <!-- 2 column grid layout with text inputs for the first and last names --> --}}
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b> <label class="form-label" for="form6Example1">Title</label></b>
                                        <select class="form-control" name="title">
                                            <option value="doctor">Doctor</option>
                                            <option value="professor">Professor</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b> <label class="form-label" for="form6Example1">First name</label></b>
                                        <input type="text" name="fname" id="form6Example1" class="form-control" />

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b><label class="form-label" for="form6Example2">Last
                                                name</label></b>
                                        <input type="text" name="lname" id="form6Example2" class="form-control" />

                                    </div>
                                </div>
                            </div>

                            <!-- Text input -->

                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example3">Email</label></b>
                                    <input type="email" name="email" id="form6Example3" class="form-control" />
                                </div>
                            </div>

                            <!-- Text input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example4">Address</label></b>
                                    <input type="text" name="address" id="form6Example4" class="form-control" />
                                </div>
                            </div>

                            <!-- Number input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example6">Phone</label></b>
                                    <input type="number" name="phone" id="form6Example6" class="form-control" />
                                </div>
                            </div>



                            <!-- Message input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b> <label class="form-label" for="form6Example1">Postal Code</label></b>
                                        <input type="text" name="pcode"id="form6Example1" class="form-control" />

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b><label class="form-label" for="form6Example2">Country</label></b>
                                        <input type="text" name="country" id="form6Example2" class="form-control" />

                                    </div>
                                </div>
                            </div>

                                 <!-- Message input -->
                                 <div class="row mb-4">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-outline">
                                            <b> <label class="form-label" for="form6Example1">Registation Id</label></b>
                                            <input type="text" name="register_id"id="form6Example1" class="form-control" />

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-outline">
                                            <b><label class="form-label" for="form6Example2">Mobile Number</label></b>
                                            <input type="text" name="mno" id="form6Example2" class="form-control" />

                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-10">
                                        <b><label class="form-label" for="form6Example4">Hospital</label></b>
                                        <input type="text" name="hospital" id="form6Example4" class="form-control" />
                                    </div>
                                </div>
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4">Add Doctor</button>
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
