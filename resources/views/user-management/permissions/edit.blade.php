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
      <li>Permissions</li>
      <li class="active">Edit</li>
    </ol>
  </section>

  <section class="content">
    <div class="box">

      <div class="box-header with-border">
        <h3 class="box-title">Permission Edit</h3>
      </div>

      <!-- /.box-header -->
      <div class="box-body">

        <form method="post" action="{{route('permission.update',['id'=>$permission->id])}}">
          @csrf

          <div class="form-group {{($errors->has('name'))?'has-error':''}}">

            <label>Name</label>

            <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('name',$permission->name)}}" autocomplete="off">

            @if($errors->has('name'))
            <label id="label-error" class="error help-block" for="label">{{$errors->first('name')}}</label>
            @endif

          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{route('permission.list')}}" class="btn btn-primary">Cancel</a>
          </div>

        </form>

      </div>
    </div>
  </section>

</div>
@endsection