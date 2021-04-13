@extends('master')
@section('title', 'Home')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-3">
                <form>
                    @csrf
                    <div class="mb-3">
                      <label for="erp" class="form-label">ERP</label>
                      <input type="number" class="form-control" id="erp" name="erp" disabled value="{{$student->erp}}">
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="Text" class="form-control" id="name" name="name" disabled value="{{$student->name}}">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="stream" class="form-label">Stream</label>
                                <input type="Text" class="form-control" id="stream" name="stream" disabled value="{{$student->stream}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="year" class="form-label">Year</label>
                                <input type="number" class="form-control" id="year" name="year" disabled value="{{$student->year}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="semester" class="form-label">Semester</label>
                                <input type="number" class="form-control" id="semester" name="semester" disabled value="{{$student->semester}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="pointer" class="form-label">Pointer</label>
                                <input type="number" class="form-control" id="pointer" name="pointer" disabled value="{{$student->pointer}}">
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-sm btn-primary" href="../students">View All</a>  
                </form>
            </div>
        </div>
    </div>
@endsection