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
        <h3 class="box-title">Permission Add</h3>
      </div>

      <!-- /.box-header -->
      <div class="box-body">

        <form method="post" action="{{route('permission.store')}}">
          @csrf

          <div class="form-group {{($errors->has('name'))?'has-error':''}}">

            <label>Name</label>

            <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('name')}}">

            @if($errors->has('name'))
            <label id="label-error" class="error help-block" for="label">{{$errors->first('name')}}</label>
            @endif
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>

        </form>

      </div>
    </div>
  </section>

</div>
@endsection