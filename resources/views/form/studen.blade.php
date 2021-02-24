
@extends('layouts.master')
@section('menu')
@include('sidebar.student')

<div class="pcoded-content">
    <div class="pcoded-inner-content">
      <div class="main-body">
        <div class="page-wrapper">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>form studen</h4>
                                <span>studen display all</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">student form</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Back home</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- inser student -->
            @if($message = Session::get('insertStudent'))
            <div class="text-success alert-block text-center" id="insert-student-success">
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h5>Input Information</h5>
                    <span>Add new</span>
                    <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>
                </div>
                <div class="card-block">
                <form action="/insertStudent" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ID Studen</label>
                            <div class="col-sm-10">
                                <input type="text" id="idStudent" name="idStudent" class="form-control form-control-normal" placeholder="Enter id student">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="nameStudent" name="nameStudent" class="form-control form-control-normal" placeholder="Enter full name">
                            </div>
                        </div>

                        <div class="form-group row has-success">
                            <label class="col-sm-2">Sex</label>
                            <div class="col-sm-10">
                                <div class="form-radio">
                                    <div class="radio radiofill radio-primary radio-inline">
                                        <label>
                                            <input type="radio" id="sexStudent" name="sexStudent" value="Male" data-bv-field="sexStudent">
                                            <i class="helper"></i>Male
                                        </label>
                                    </div>
                                    <div class="radio radiofill radio-primary radio-inline">
                                        <label>
                                            <input type="radio" name="sexStudent" value="Female" data-bv-field="sexStudent">
                                            <i class="helper"></i>Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Age</label>
                            <div class="col-sm-10">
                                <input type="text" id="ageStudent" name="ageStudent" class="form-control form-control-normal" placeholder="Enter Age">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" id="emailStudent" name="emailStudent" class="form-control form-control-normal" placeholder="Enter email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Phone number</label>
                            <div class="col-sm-10">
                                <input type="tel" id="phoneStudent" name="phoneStudent" class="form-control form-control-normal" placeholder="Enter phone">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success"><i class="icofont icofont-check-circled"></i>Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
