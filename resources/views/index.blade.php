@extends('master')
@section('title', 'Home')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-hover">
                    <thead class="bg-dark" style="color: white">
                      <tr>
                        <th scope="col">ERP</th>
                        <th scope="col">Name</th>
                        <th scope="col">Stream</th>
                        <th scope="col">Year</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Pointer</th>
                        <th scope="col">Operation</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{$student->erp}}</th>
                            <td>{{$student->name}}</td>
                            <td>{{$student->stream}}</td>
                            <td>{{$student->year}}</td>
                            <td>{{$student->semester}}</td>
                            <td>{{$student->pointer}}</td>
                            <td>
                              <a class="btn btn-sm btn-primary" href="student/{{$student->erp}}">View</a>
                              <a class="btn btn-sm btn-warning" href="../student/edit/{{$student->erp}}">Edit</a>
                              <a class="btn btn-sm btn-danger" href="delete/{{$student->erp}}">Delete</a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>   
                  {{-- <div>
                    {{$students->links}}  
                  </div>    --}}
                  <style>
                      .w-5{
                        display: none;
                      }
                    </style>       

                    <a class="btn btn-primary" href="{{route('add.add')}}">Add Student</a>
            </div>
        </div>
    </div>
@endsection