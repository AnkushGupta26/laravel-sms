@extends('master')
@section('title', 'Home')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-3">
                <form method="POST" action="{{route('edit.editToDB')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="erp" class="form-label">ERP</label>
                      <input type="number" class="form-control" id="erp" name="erp" value="{{$student->erp}}">
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="Text" class="form-control" id="name" name="name" value="{{$student->name}}">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="stream" class="form-label">Stream</label>
                                <input type="Text" class="form-control" id="stream" name="stream" value="{{$student->stream}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="year" class="form-label">Year</label>
                                <input type="number" class="form-control" id="year" name="year" value="{{$student->year}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="semester" class="form-label">Semester</label>
                                <input type="number" class="form-control" id="semester" name="semester" value="{{$student->semester}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="pointer" class="form-label">Pointer</label>
                                <input type="number" class="form-control" id="pointer" name="pointer" value="{{$student->pointer}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button> 
                </form>
            </div>
        </div>
    </div>
@endsection