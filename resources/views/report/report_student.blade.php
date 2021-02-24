
@extends('layouts.master')
@section('menu')
@include('sidebar.report_student')

<div class="pcoded-content">
    <div class="pcoded-inner-content">
      <div class="main-body">
        <div class="page-wrapper">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Table Report</h4>
                                <span>Report display all</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">User Table</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Back home</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- update student -->
            @if($message = Session::get('updateStudent'))
            <div class="text-success alert-block text-center" id="update-success">
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <!-- update student -->
            @if($message = Session::get('deleteStudent'))
            <div class="text-success alert-block text-center" id="deleteStudent-success">
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Zero config.table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Student Report</h5>
                                <span>report total</span>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                    <table id="dom-jqry" class="table table-sm table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>ID STUDENT</th>
                                                <th>NAME</th>
                                                <th>SEX</th>
                                                <th>AGE</th>
                                                <th>EMAIL</th>
                                                <th>PHONE</th>
                                                <th>ACTOIN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($reportStudent as $item)
                                            <tr role="row" class="odd">
                                                <td class="idUpdate">{{$item->id}}</td>
                                                <td class="idStudent">{{$item->id_student}}</td>
                                                <td class="name">{{$item->name}}</td>
                                                <td class="sex">{{$item->sex}}</td>
                                                <td class="age">{{$item->age}}</td>
                                                <td class="email">{{$item->email}}</td>
                                                <td class="phone">{{$item->phone_number}}</td>
                                                <td class="text-center">
                                                    <a class="m-r-15 text-muted studentEdits" data-toggle="modal" data-idUpdate="'.$row->id.'" data-target="#userUpdate">
                                                        <i class="icofont icofont-ui-edit" style="color: #2196f3;"></i>
                                                    </a>
                                                    <a href="deleteStudent/{{$item->id}}" onclick="return confirm('Are you sure to want to delete it?')" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt" style="color: red;"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                         <!-- Modal Update-->
                         <div class="modal fade" id="userUpdate" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-write">
                                        <h4 class="modal-title">Update Student</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="ti-close"></i></span>
                                        </button>
                                    </div>
                                    <form action="{{route('updateStudent')}}" method="post"><!-- form delete -->
                                        {{ csrf_field() }}
                                        <input type="text" hidden class="col-sm-9 form-control"id ="idUpdate" name ="idUpdate" value="" />
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">ID STUDENT</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="e_idStudent"name="idStudent" class="form-control" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">NAME</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="e_name"name="nameStudent" class="form-control" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">SEX</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="e_sex"name="sexStudent" class="form-control" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">AGE</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="e_age"name="ageStudent" class="form-control" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">EMAIL</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="e_email"name="emailStudent" class="form-control" value="" required/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">PHONE</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="e_phone"name="phoneStudent" class="form-control" value="" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icofont icofont-eye-alt"></i>Close</button>
                                            <button type="submit" id=""name="" class="btn btn-success  waves-light"><i class="icofont icofont-check-circled"></i>Update</button>
                                        </div>
                                    </form><!-- form delete end -->
                                </div>
                            </div>
                        </div> <!-- End Modal Delete-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // select edit user
    $(document).on('click', '.studentEdits', function()
    {
        var _this = $(this).parents('tr');
        $('#idUpdate').val(_this.find('.idUpdate').text());
        $('#e_idStudent').val(_this.find('.idStudent').text());
        $('#e_name').val(_this.find('.name').text());
        $('#e_sex').val(_this.find('.sex').text());
        $('#e_age').val(_this.find('.age').text());
        $('#e_email').val(_this.find('.email').text());
        $('#e_phone').val(_this.find('.phone').text());
    });
</script>

@endsection
