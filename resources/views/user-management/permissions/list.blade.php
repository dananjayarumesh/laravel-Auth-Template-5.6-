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
              <th width="150px"></th>
            </thead>

            <tbody>

              @foreach($permissions as $key => $permission)

              <tr>
                <td>{{$key+1}}</td>
                <td>{{$permission->name}}</td>
                <td>
                  <a href="{{route('permission.edit',['id'=>$permission->id])}}" type="button" class="btn btn-warning btn-xs">Edit</a>
                  <button type="button" class="btn btn-danger btn-xs" onclick="deletePermission({{$permission->id}})">Delete</button>

                  <form id="delete-permission-{{$permission->id}}" action="{{ route('permission.delete',['id' => $permission->id]) }}" method="POST">
                   @csrf
                   <input type="hidden" name="_method" value="DELETE">
                 </form>

               </td>
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

 @section('scripts')

 <script type="text/javascript">




    function deletePermission(id){

      var conf = confirm("Are You Sure!");

      if (conf == true) {
        $('#delete-permission-'+id).submit();
      }

    }

</script>

@endsection