  @extends('layouts.master')

  @section('style')
  @endsection

  @section('content')


  <section class="content-header">
    <h1>
      Permissions
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
        <h3 class="box-title">Permission List</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Name</th>
            </thead>
            <tbody>

              @foreach($permissions as $key => $permission)

              <tr>
                <td>{{$key+1}}</td>
                <td>{{$permission->name}}</td>
              </tr>

              @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>

    </section>

  </div>

  @endsection