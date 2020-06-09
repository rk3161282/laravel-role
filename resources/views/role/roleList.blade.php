<!-- extend the default layout  -->
@extends('layout')

@section('title','School List')

@section('top_panel')
  @parent
@endsection

@section('sidebar')
  @parent
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
   <link href="http://webtechnoexperts.com/blog//assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
  <!-- Content Header (Page header) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

  <script>
      $(window).load(function () {
          setTimeout(function () {
              $('.custom_err').fadeOut()
          }, 2000);
      });
  </script>
  
  <section class="content-header">
    <h1 style="font-size:18px;">
      Role List
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Role List</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">

      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
          <p style="font-size: 12;">
                  <span style="float:right;">
                  <a href="{{route('role.create')}}">  <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">ADD ROLE</button>
               </a> </span></p>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                    <th>Role</th>
                    <th>Display Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                 @foreach($roles as $role)
                 <tr>
                    <td>{{$role->name}}</td>
                    <td>{{$role->display_name}}</td>
                    <td>{{$role->description}}</td>
                    <td>
                    <a class="btn btn-info btn-sm" href="{{route('role.edit',$role->id)}}">Edit</a>
                    <form action="{{route('role.destroy',$role->id)}}"  method="POST">
                       {{csrf_field()}}
                       {{method_field('DELETE')}}
                       <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                     </form>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>

<script>
$("#e2").select2({
    placeholder: "Select Module Rights",
    allowClear: true,
    dropdownAutoWidth : true
});
</script>

</script>
@endsection


@section('footer')
  @parent
@endsection