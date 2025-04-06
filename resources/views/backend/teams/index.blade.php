@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h2 class="text-primary">Teams</h2>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#teamModal">Add</button>
                    </div>
                    <div class="modal" id="teamModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-primary">Add Team</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('teams.store') }}" enctype="multipart/form-control">
                                        @csrf
                                        {{-- TEAMS NAME AND EMAIL --}}
                                        <div class="mb-3 row">
                                            <div class="col-6">
                                                <label class="form-label">Team Name</label>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Type Name" >
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Team Email</label>
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="Enter Email">
                                            </div>
                                        </div>
                                        {{-- TEAMS ADDRESS AND CONTACT --}}
                                        <div class="mb-3 row">
                                            <div class="col-6">
                                                <label class="form-label">Address</label>
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="Address" >
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Contact Number</label>
                                                <input type="text" name="contact" class="form-control"
                                                    placeholder="Enter Email">
                                            </div>
                                        </div>
                                        {{-- FACULTY AND PROFILE IMAGE --}}
                                        <div class="mb-3 row">
                                            <div class="col-6">
                                                <label class="form-label">Faculty</label>
                                                <select name="faculty" class="form-control" id="">
                                                    <option value="" selected>Select Faculty</option>
                                                    <option value="Science">Science & Technology</option>
                                                    <option value="Humanities">Humanities & Social Sciences</option>
                                                    <option value="Business">Business & Management</option>
                                                    <option value="Engineering">Engineering & IT</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Team Profile</label>
                                                <input type="file" name="profile" class="form-control">
                                            </div>
                                        </div>
                                        {{-- STATUS --}}
                                            <div class="col-6">
                                                <label class="form-label">Status</label>
                                                <select name="status" id="" class="form-control">
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Archived">Archived</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" >Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#teamTable').DataTable();
        });
    </script>
@endsection
