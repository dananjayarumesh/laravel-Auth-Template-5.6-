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
        <h3 class="box-title">User Add</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <form method="post" action="{{route('user.add')}}">
          @csrf

          <div class="form-group {{($errors->has('name'))?'has-error':''}}">

            <label>Name</label>

            <input type="text" name="name" class="form-control" placeholder="Name">

            @if($errors->has('name'))
            <label id="label-error" class="error help-block" for="label">{{$errors->first('name')}}</label>
            @endif

          </div>

          <div class="form-group {{($errors->has('name'))?'has-error':''}}">
            <label>Role</label>
            <select name="role" class="form-control">

              @foreach($roles as $key => $role)
              <option value="{{$role->name}}">{{$role->name}}</option>
              @endforeach

            </select>

            @if($errors->has('role'))
            <label id="label-error" class="error help-block" for="label">{{$errors->first('role')}}</label>
            @endif

          </div>

          <div class="form-group {{($errors->has('email'))?'has-error':''}}">
            <label>Email</label>

            <input type="email" name="email" class="form-control" placeholder="Email">

            @if($errors->has('email'))
            <label id="label-error" class="error help-block" for="label">{{$errors->first('email')}}</label>
            @endif

          </div>

          <div class="form-group {{($errors->has('password'))?'has-error':''}}">
            <label>Password</label>

            <input type="password" name="password" class="form-control" placeholder="Password">

            @if($errors->has('password'))
            <label id="label-error" class="error help-block" for="label">{{$errors->first('password')}}</label>
            @endif

          </div>

          <div class="form-group {{($errors->has('password_confirmation'))?'has-error':''}}">
            <label>Confirm Password</label>

            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">

            @if($errors->has('password_confirmation'))
            <label id="label-error" class="error help-block" for="label">{{$errors->first('password_confirmation')}}</label>
            @endif

          </div>

          <div class="form-group">
            <button class="btn btn-primary">Add</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
@endsection