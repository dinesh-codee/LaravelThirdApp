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
                                <h2 class="text-primary">Students</h2>
                            </div>

                            <div class="col-6 text-end ">
                                {{--   MODAL FOR POPUP EFFECT --}}

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#myModal">Add</button>
                                    <div class="col-6">
                                        @foreach ($errors->all() as $error)
                                            <span class="text-danger">{{ $error }}</span><br>
                                        @endforeach
                                    </div>
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
                                                                placeholder="Enter Name" value="{{ old('name') }}">
                                                            @error('name')
                                                                <div class="mx-auto float-start mt-2">
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>

                                                        <div class ="col-md-6 col-sm-12">
                                                            <label class="form-label float-start">Address</label>
                                                            <input type="text" name="address" class="form-control"
                                                                placeholder="Enter Address" value="{{ old('address') }}">
                                                            @error('address')
                                                                <div class="mx-auto float-start mt-2">
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="mb-3  col-md-6 col-sm-12">
                                                            <label class="form-label float-start">Email</label>
                                                            <input type="text" name="email" class="form-control"
                                                                placeholder="Enter Email" value="{{ old('email') }}">
                                                            @error('email')
                                                                <div class="mx-auto float-start mt-2">
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>

                                                        <div class ="col-md-6 col-sm-12">
                                                            <label class="form-label float-start">Contact</label>
                                                            <input type="text" name="contact" class="form-control"
                                                                placeholder="Enter Contact" value="{{ old('contact') }}">
                                                            @error('contact')
                                                                <div class="mx-auto float-start mt-2">
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="mb-3  col-md-6 col-sm-12">
                                                            <label class="form-label float-start">DOB</label>
                                                            <input type="date" name="dob" class="form-control"
                                                                value="{{ old('dob') }}">
                                                            @error('dob')
                                                                <div class="mx-auto float-start mt-2">
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>

                                                        <div class ="col-md-6 col-sm-12">
                                                            <label class="form-label float-start">Status</label>
                                                            <select name="selected" class="form-select"
                                                                value="{{ old('selected') }}">
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
                    <div class="card-body">
                        <div class="row">
                            {{-- FOR SUCCESS MESSAGE --}}
                            <div class="col-12">
                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                            </div>
                            {{-- DELETE ERROR --}}
                            <div class="col-12">
                                @if (session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <table class="table text-center table-striped" id="studentTable">
                            <thead>
                                <tr class="bg-success text-light">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $student['name'] }}</td>
                                        <td>{{ $student['address'] }}</td>
                                        <td>{{ $student['email'] }}</td>
                                        <td>{{ $student['contact'] }}</td>
                                        <td>{{ $student['dob'] }}</td>
                                        <td>{{ $student['selected'] }}</td>
                                        <td><img height="100px" width="100px"
                                                src="{{ asset('images/students/' . $student->profile) }}"></td>
                                        <td class="d-flex">
                                            <a class="btn btn-primary"
                                                href="{{ route('students.edit', $student['id']) }}">Edit</a>
                                            <a class="btn btn-warning"
                                                href="{{ route('students.delete', $student['id']) }}" onclick="return confirm('Are you sure to delete?')">Delete</a>

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
    <script>
        $(document).ready(function() {
            $('#studentTable').DataTable();
        });
    </script>
@endsection
</div>
