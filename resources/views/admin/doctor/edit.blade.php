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
                                <h2>Edit Doctor Details</h2>
                            </center>
                        </div>
                        <br>
                        <form action="{{ route('doctor.update', $entity->id) }}" method="POST">

                @csrf

                @if ($entity->id)
                    {{ method_field('put') }}
                    @csrf

                            {{-- <!-- 2 column grid layout with text inputs for the first and last names --> --}}
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b> <label class="form-label" for="form6Example1">Title</label></b>
                                        <select class="form-control" name="title">
                                            <option value="{{ $entity->doctor->title  }}">{{ $entity->doctor->title }}</option>
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
                                        <input type="text" value="{{ $entity->first_name }}" name="fname" id="form6Example1" class="form-control" />

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b><label class="form-label" for="form6Example2">Last
                                                name</label></b>
                                        <input type="text"  value="{{ $entity->last_name }}" name="lname" id="form6Example2" class="form-control" />

                                    </div>
                                </div>
                            </div>

                            <!-- Text input -->

                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example3">Email</label></b>
                                    <input type="email"  value="{{ $entity->email }}" name="email" id="form6Example3" class="form-control" />
                                </div>
                            </div>

                            <!-- Text input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example4">Address</label></b>
                                    <input type="text"  value="{{ $entity->address }}" name="address" id="form6Example4" class="form-control" />
                                </div>
                            </div>

                            <!-- Number input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <b><label class="form-label" for="form6Example6">Phone</label></b>
                                    <input type="number"  value="{{ $entity->phone }}" name="phone" id="form6Example6" class="form-control" />
                                </div>
                            </div>

                            <!-- Message input -->
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b> <label class="form-label" for="form6Example1">Postal Code</label></b>
                                        <input type="text"  value="{{ $entity->postal_code }}" name="pcode"id="form6Example1" class="form-control" />

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-outline">
                                        <b><label class="form-label" for="form6Example2">Country</label></b>
                                        <input type="text"  value="{{ $entity->country }}" name="country" id="form6Example2" class="form-control" />

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
                <input type="text"  value="{{ $entity->doctor->medical_id }}" name="register_id"id="form6Example1" class="form-control" />

            </div>
        </div>
        <div class="col-md-5">
            <div class="form-outline">
                <b><label class="form-label" for="form6Example2">Mobile Number</label></b>
                <input type="text" name="mno" value="{{ $entity->doctor->mobile_no }}" id="form6Example2" class="form-control" />

            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <b><label class="form-label" for="form6Example4">Hospital</label></b>
            <input type="text" name="hospital" value="{{ $entity->doctor->hospital }}" id="form6Example4" class="form-control" />
        </div>
    </div>
                            <div class="row mb-4">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4">Update User</button>
                                </div>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
    </div>
@endsection
