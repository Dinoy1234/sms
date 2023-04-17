@extends('backend.master')

@section('master_content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Add Students</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="students.html">Students</a></li>
                    <li class="breadcrumb-item active">Add Students</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('student.store')}}" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Student Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Student Id</label>
                                    <input type="text" name="student_id" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Student Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="gender" class="form-control">
                                        <option >Select Gender</option>
                                        <option value="female">Female</option>
                                        <option value="mail"> Male</option>
                                        <option value="other">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <div>
                                        <input type="date" name="birth_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <input type="text" name="class" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Religion</label>
                                    <input type="text" name="religion" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Admission Date</label>
                                    <div>
                                        <input type="date" name="join_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="phone"  name="phone" class="form-control">
                                </div>
                            </div>
                            {{-- <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Admission Number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div> --}}
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Section</label>
                                    <select name="section" class="form-control">
                                        <option>Select section</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Student Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <h5 class="form-title"><span>Parent Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Father's Name</label>
                                    <input type="text" name="father_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Father's Occupation</label>
                                    <input type="text" name="father_occ" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Father's Mobile</label>
                                    <input type="phone" name="father_phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Father's Email</label>
                                    <input type="email" name="father_email" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mother's Name</label>
                                    <input type="text" name="mother_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mother's Occupation</label>
                                    <input type="text" name="mother_occ" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mother's Mobile</label>
                                    <input type="phone" name="mother_phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mother's Email</label>
                                    <input type="email" name="mother_email" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Present Address</label>
                                    <textarea class="form-control" name="present_address"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Permanent Address</label>
                                    <textarea class="form-control" name="permanent_address"></textarea>
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
</div>

@endsection
