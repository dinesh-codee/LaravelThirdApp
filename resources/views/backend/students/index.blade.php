@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h2 class="text-primary">Students</h2>
                            </div>
                            <div class="col-6 text-end ">
                                {{--   MODAL FOR POPUP EFFECT --}}

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#myModal">Add</button>
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title text-primary">Add Student</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                            {{-- FORM Section --}}
                                                <form action="{{ route('students.store') }}" method="POST"
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
                                                            <input type="text" name="address"  class="form-control"
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
                                                            <input type="file"  name="profile" class="form-control">
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
                            <table class="table text-center table-striped">
                                <thead>
                                    <tr class="bg-success text-light">
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dinesh</td>
                                        <td>Kailali</td>
                                        <td>dineshchy@gmail.com</td>
                                        <td>9820135012</td>
                                        <td>1970</td>
                                        <td>Active</td>
                                        <td class="d-flex">
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-warning">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Arjun</td>
                                        <td>KTM</td>
                                        <td>arjunrana@gmail.com</td>
                                        <td>9710203620</td>
                                        <td>1995</td>
                                        <td>Active</td>
                                        <td class="d-flex">
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-warning">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Milan</td>
                                        <td>KTM</td>
                                        <td>milandhami@gmail.com</td>
                                        <td>9715689520</td>
                                        <td>2020</td>
                                        <td>Inactive</td>
                                        <td class="d-flex">
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-warning">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</div>
