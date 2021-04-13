@extends('master')
@section('title', 'Add')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div>
                    @if(session('success'))
                        <h5>Inserted Successfully</h5>
                    @endif
                </div>
                <div class="mb-3">
                    <h3>Add Student</h3>
                  </div>
                <form method="POST" action="{{route('add.addToDB')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="erp" class="form-label">ERP</label>
                      <input type="number" class="form-control" id="erp" name="erp">
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="Text" class="form-control" id="name" name="name">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="stream" class="form-label">Stream</label>
                                <input type="Text" class="form-control" id="stream" name="stream">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="year" class="form-label">Year</label>
                                <input type="number" class="form-control" id="year" name="year">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="semester" class="form-label">Semester</label>
                                <input type="number" class="form-control" id="semester" name="semester">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="pointer" class="form-label">Pointer</label>
                                <input type="number" class="form-control" id="pointer" name="pointer">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection