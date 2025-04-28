@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card d-flex">
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="col-6">{{ __('Teachers') }}</div>
                            <div class="col-6 text-end ">
                                <button class="btn btn-primary" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#myModal">Add</button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 text-end ">
                                {{--   MODAL FOR POPUP EFFECT --}}
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title text-primary">Add Teacher</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                {{-- FORM Section --}}
                                                <form action="{{ route('teachers.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="mb-3  col-md-6 col-sm-12">
                                                            <label class="form-label float-start">Name</label>
                                                            <input type="text" name="name" class="form-control"
                                                                placeholder="Enter Name">
                                                        </div>

                                                        <div class ="col-md-6 col-sm-12">
                                                            <label class="form-label float-start">Address</label>
                                                            <input type="text" name="address" class="form-control"
                                                                placeholder="Enter Address">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="mb-3  col-md-6 col-sm-12">
                                                            <label class="form-label float-start">Email</label>
                                                            <input type="text" name="email" class="form-control"
                                                                placeholder="Enter Email">
                                                        </div>

                                                        <div class ="col-md-6 col-sm-12">
                                                            <label class="form-label float-start">Contact</label>
                                                            <input type="text" name="contact" class="form-control"
                                                                placeholder="Enter Contact">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="mb-3  col-md-6 col-sm-12">
                                                            <label class="form-label float-start">DOB</label>
                                                            <input type="date" name="dob" class="form-control">
                                                        </div>

                                                        <div class ="col-md-6 col-sm-12">
                                                            <label class="form-label float-start">Status</label>
                                                            <select name="selected" class="form-select">
                                                                <option value="Active">Active</option>
                                                                <option value="Inactive">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3  col-md-6 col-sm-12">
                                                            <label class="form-label float-start">Profile Image</label>
                                                            <input type="file" name="profile" class="form-control">
                                                        </div>
                                                    </div>


                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary"
                                                            data-bs-dismiss="modal">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
