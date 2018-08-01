  @extends('layouts.master')

  @section('style')
  @endsection

  @section('content')


  <section class="content-header">
    <h1>
      User
      <small>Management</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>


  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">User List</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Name</th>
              <th>Role</th>
              <th></th>
            </thead>
            <tbody>

              @foreach($users as $key => $user)

              <tr>
                <td>{{$key+1}}</td>
                <td>{{$user->name}}</td>
                <td>
                  @foreach($user->roles as $role)
                  {{$role->name}}
                  @endforeach
                  
                </td>
                <td></td>
              </tr>

              @endforeach      

            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
{{--         <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <li><a href="#">«</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">»</a></li>
          </ul>
        </div> --}}
      </div>

    </section>

  </div>

  @endsection