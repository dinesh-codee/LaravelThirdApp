@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Students') }}</div>

                <div class="card-body">
                    <h2 class="text-center">Add Student</h2>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control">
                            <label class="form-label">Contact</label>
                            <input type="text" class="form-control">                            
                        </div>
                        <button class="btn btn-primary float-end">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
