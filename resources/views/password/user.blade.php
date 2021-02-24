
@extends('layouts.master')
@section('menu')
@include('sidebar.user')

<div class="pcoded-content">
    <div class="pcoded-inner-content">
      <div class="main-body">
        <div class="page-wrapper">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Table User</h4>
                                <span>User display all</span>
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

            <!-- update -->
            @if($message = Session::get('userUpdate'))
                <div class="text-success alert-block text-center" id="update-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Zero config.table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>User</h5>
                                <span>count total</span>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                    <table id="dom-jqry" class="table table-sm table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Profile User</th>
                                                <th>Department</th>
                                                <th>Division</th>
                                                <th>Rule name</th>
                                                <th>Date Join</th>
                                                <th>Update Join</th>
                                                <th>Modify</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($userselect as $row)
                                                <tr role="row" class="odd">
                                                    <td class="idUpdate">{{$row->id}}</td>
                                                    <td class="names">{{$row->name}}</td>
                                                    <td class="email">{{$row->email}}</td>
                                                    <td class="avatar"> <img src="..\files\assets\images\{{$user->avatar}}"alt="User-Profile-Image" width= "20%;"></td>
                                                    <td class="department">{{$row->department}}</td>
                                                    <td class="division">{{$row->division}}</td>
                                                    @if($row->role_name == 'Admin')
                                                    <td class="text-success roleName">{{$row->role_name}}</td>
                                                    @else
                                                    <td class="text-info roleName">{{$row->role_name}}</td>
                                                    @endif
                                                    <td>{{$row->created_at}}</td>
                                                    <td>{{$row->updated_at}}</td>
                                                    <td class="text-center">
                                                        <a class="m-r-15 text-muted userEdits" data-toggle="modal" data-idUpdate="'.$row->id.'" data-target="#userUpdate">
                                                            <i class="icofont icofont-ui-edit" style="color: #2196f3;"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                         <!-- Modal Add New-->
                        <div class="modal fade" id="ImportAdd" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="ti-close"></i></span>
                                        </button>
                                    </div>
                                    <form action="#" method = "post"><!-- form add -->
                                    {{ csrf_field() }}
                                    </form><!-- form add end -->
                                </div>
                            </div>
                        </div> <!-- End Modal Add New-->

                        <!-- Modal Update-->
                        <div class="modal fade" id="userUpdate" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-write">
                                        <h4 class="modal-title">Update</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="ti-close"></i></span>
                                        </button>
                                    </div>
                                    <form action="/userUpdate" method="post"><!-- form delete -->
                                        {{ csrf_field() }}
                                        <input type = "text" hidden class="col-sm-9 form-control"id ="idUpdate" name ="idUpdate" value="" />
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Full Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="e_name"name="name" class="form-control" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="e_email"name="email" class="form-control" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Department</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="e_department"name="department" class="form-control" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Dgitivision</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="e_division"name="division" class="form-control" value="" required/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Role Name</label>
                                                <div class="col-sm-9">
                                                    <input list="status" class="form-control" id="e_roleName" name="roleName" value="" />
                                                    <datalist id="status">
                                                        <option>Please select role name</option>
                                                        <option value="Admin"></option>
                                                        <option value="Normal User"></option>
                                                    </datalist>
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
    $(document).on('click', '.userEdits', function()
    {
        var _this = $(this).parents('tr');
        $('#idUpdate').val(_this.find('.idUpdate').text());
        $('#e_name').val(_this.find('.names').text());
        $('#e_email').val(_this.find('.email').text());
        $('#e_department').val(_this.find('.department').text());
        $('#e_division').val(_this.find('.division').text());
        $('#e_roleName').val(_this.find('.roleName').text());
    });
</script>

@endsection
