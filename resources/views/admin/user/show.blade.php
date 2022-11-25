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
                                <h2> Patient Details</h2>
                            </center>
                        </div>
                        <br>
                     
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b> <label class="form-label" for="form6Example1">First name</label></b>
                                        <input type="text" value="{{ $entity->first_name }}" name="fname" id="form6Example1" class="form-control" readonly />

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b><label class="form-label" for="form6Example2">Last
                                                name</label></b>
                                        <input type="text"  value="{{ $entity->last_name }}" name="lname" id="form6Example2" class="form-control" readonly/>

                                    </div>
                                </div>
                            </div>

                            <!-- Text input -->

                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example3">Email</label></b>
                                    <input type="email"  value="{{ $entity->email }}" name="email" id="form6Example3" class="form-control" readonly/>
                                </div>
                            </div>

                            <!-- Text input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example4">Address</label></b>
                                    <input type="text"  value="{{ $entity->address }}" name="address" id="form6Example4" class="form-control" readonly/>
                                </div>
                            </div>

                            <!-- Number input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example6">Phone</label></b>
                                    <input type="number"  value="{{ $entity->phone }}" name="phone" id="form6Example6" class="form-control" readonly/>
                                </div>
                            </div>

                            <!-- Message input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b> <label class="form-label" for="form6Example1">Postal Code</label></b>
                                        <input type="text"  value="{{ $entity->postal_code }}" name="pcode"id="form6Example1" class="form-control" readonly/>

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b><label class="form-label" for="form6Example2">Country</label></b>
                                        <input type="text"  value="{{ $entity->country }}" name="country" id="form6Example2" class="form-control" readonly/>

                                    </div>
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
