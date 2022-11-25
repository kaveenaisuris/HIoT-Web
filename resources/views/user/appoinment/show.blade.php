@extends('layouts.userside')

@section('content')
<div class="col-sm-9  container-fluid" style="margin-left: 300px;   position: absolute; margin-top:50px;">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-8 ">
                    <div class="card" style="background-color: #F8F8FF">
                        <br>
                        <div>
                            <center>
                                <h2>Appoinment Details</h2>
                            </center>
                        </div>
                        <br>

                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <div class="form-outline">
                                        <b> <label class="form-label" for="form6Example1">Doctor name</label></b>
                                        <input type="text" value="{{ $entity->doctor->name }}" name="fname" id="form6Example1" class="form-control" readonly/>

                                    </div>
                                </div>
                            </div>

                            <!-- Text input -->

                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example3">Email</label></b>
                                    <input type="email"  value="{{ $entity->doctor->email }}" name="email" id="form6Example3" class="form-control" readonly/>
                                </div>
                            </div>

                            <!-- Text input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example4">Address</label></b>
                                    <input type="text"  value="{{ $entity->doctor->address }}" name="address" id="form6Example4" class="form-control" readonly/>
                                </div>
                            </div>

                            <!-- Number input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example6">Phone</label></b>
                                    <input type="number"  value="{{ $entity->doctor->phone }}" name="phone" id="form6Example6" class="form-control" readonly/>
                                </div>
                            </div>

                            <!-- Message input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <div class="form-outline">
                                        <b> <label class="form-label" for="form6Example1">Appoinmnet date</label></b>
                                        <input type="text"  value="{{ $entity->date }}" name="pcode"id="form6Example1" class="form-control" readonly/>

                                    </div>
                                </div>
                            </div>

                            <!-- Message input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <div class="form-outline">
                                        <b> <label class="form-label" for="form6Example1">Message</label></b>
                                        <input type="text"  value="{{ $entity->message }}" name="register_id"id="form6Example1" class="form-control" readonly/>

                                    </div>
                                </div>
                                <
                            </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                            </div>
  @endsection
