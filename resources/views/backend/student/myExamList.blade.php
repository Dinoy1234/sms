

@extends('backend.master')

@section('master_content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form method="GET" action="{{route('student.exam.list')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="col-6 col-sm-6">
                                <div class="form-group">
                                    <label>Subject </label>
                                    <select name="subject_id" class="form-control">
                                        <option >Select subject</option>
                                        @foreach ( $subject as $data)
                                        <option value="{{$data->Subject->id}}">{{$data->Subject->subject_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <h5 class="form-title text-center"><span>Exam List</span></h5>
        </div>
        <div class="col-sm-12">
            <div class="card card-table">


                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>Exam Name</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Date</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exams as $exam)
                                    <tr>
                                        <td>
                                            <h2>
                                                <a>{{$exam->exam_name}}</a>
                                            </h2>
                                        </td>
                                        <td>{{$exam->Department->class}}({{$exam->section}})</td>
                                        <td>{{$exam->Subject->subject_name}}</td>
                                        <td>{{ Carbon\Carbon::parse($exam->start_time)->format('h:i') }}</td>
                                        <td>{{ Carbon\Carbon::parse($exam->end_time)->format('h:i') }}</td>
                                        <td>{{ Carbon\Carbon::parse($exam->date)->format('d-m-Y') }}</td>
                                        <td class="text-right">
                                            <div class="actions">
                                                <a href="{{route('exam_show', $exam->id)}}" class="btn btn-sm text-white bg-success-light mr-2">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                @if ($attend) 
                                                {{-- $all->isEmpty() --}}
                                                @if ($attend->exam_id == $exam->id)
                                                   
                                                    <a class="btn btn-sm text-white bg-warning mr-2">
                                                        You already attend
                                                    </a>
                                                    @else
                                                    <a href="{{route('student.exam.attend',$exam->id)}}" class="btn btn-sm text-white bg-success mr-2">
                                                        attend Exam
                                                    </a>
                                                @endif
                                                @else
                                                <a href="{{route('student.exam.attend',$exam->id)}}" class="btn btn-sm text-white bg-success mr-2">
                                                    attend Exam
                                                </a>
                                                @endif
                                                
                                               
                                            </div>
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
    </div>
</div>

@endsection
