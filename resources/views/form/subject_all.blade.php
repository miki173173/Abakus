
@extends('layouts.master')
@section('menu')
@include('sidebar.student')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <h5>Input Score</h5>
                    <span>Inut new</span>
                    <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>
                </div>
                <div class="card-block">
                    <form>
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="text" id="idStudent" name="idStudent" class="form-control form-bg-primary" placeholder="Input ID Student">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="studentName" name="studentName" class="form-control form-bg-success" placeholder="Input Student Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="number" id="webApplication" name="webApplication" class="form-control form-txt-warning" placeholder="Input Web Application">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="Csab" name="Csab" class="form-control form-txt-warning" placeholder="Input C#">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="text" id="linux" name="linux" class="form-control form-txt-danger" placeholder="Input Linux">
                            </div>
                            <div class="col-sm-6">
                                <input type="number" id="java" name="java" class="form-control form-txt-success" placeholder="Input JAVA">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="number" id="mis" name="mis" class="form-control form-txt-inverse" placeholder="Input MIS">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" id="resultScore" name="resultScore" readonly class="form-control form-txt-info">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" id="gpa" name="gpa" readonly class="form-control form-txt-info">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success"><i class="icofont icofont-check-circled"></i>Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

$(document).ready(function(){
    $("#mis").keyup(function(){
        totalScore = parseInt($("#webApplication").val()) + parseInt($("#Csab").val())
        + parseInt($("#linux").val()) + parseInt($("#java").val())+ parseInt($("#mis").val());
        gpa = totalScore / 5 ;
        $("#resultScore").val(totalScore);
        $("#gpa").val(gpa);
    });

});
</script>

@endsection
