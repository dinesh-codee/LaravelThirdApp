@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 ">
                {{--   CARD FOR STUDENTS --}}
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h2 class="text-primary">Edit Students</h2>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('students') }}" class="btn btn-primary float-end">Student</a>
                            </div>
                            <div class="col-6 text-end ">
                                {{--   MODAL FOR POPUP EFFECT --}}

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $student['id'] }}">
                            <div class="row">
                                <div class="mb-3  col-md-6 col-sm-12">
                                    <label class="form-label float-start">Name</label>
                                    <input type="text" value="{{ $student['name'] }}" name="name" class="form-control"
                                        placeholder="Enter Name">
                                </div>

                                <div class ="col-md-6 col-sm-12">
                                    <label class="form-label float-start">Address</label>
                                    <input type="text" value="{{ $student['address'] }}" name="address"
                                        class="form-control" placeholder="Enter Address">
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3  col-md-6 col-sm-12">
                                    <label class="form-label float-start">Email</label>
                                    <input type="text" value="{{ $student['email'] }}" name="email"
                                        class="form-control" placeholder="Enter Email">
                                </div>

                                <div class ="col-md-6 col-sm-12">
                                    <label class="form-label float-start">Contact</label>
                                    <input type="text" value="{{ $student['email'] }}" name="contact"
                                        class="form-control" placeholder="Enter Contact">
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3  col-md-6 col-sm-12">
                                    <label class="form-label float-start">DOB</label>
                                    <input type="date" value="{{ $student['dob'] }}" name="dob" class="form-control">
                                </div>

                                <div class ="col-md-6 col-sm-12">
                                    <label class="form-label float-start">Status</label>
                                    <select name="selected" class="form-select">
                                        <option value="Active" @if ($student['selected'] == 'Active') selected @endif>Active
                                        </option>
                                        <option value="Inactive" @if ($student['selected'] == 'Inactive') selected @endif>Inactive
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3  col-md-6 col-sm-12">
                                    <label class="form-label float-start">Profile Image</label>
                                    <input type="file" name="profile" class="form-control">
                                    <img src="{{ asset('images/students/' . $student['profile']) }}" height="100px"
                                        width="250px" alt="">
                                </div>
                            </div>


                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</div>
