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
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary" id="scrl1">
          <div class="box-header with-border">
            <h3 class="box-title">Add Role</h3>
          </div>
          <form action="{{route('role.update',$role->id)}}" method="post" role="form">
		{{method_field('PATCH')}}
		{{csrf_field()}}

    	<div class="form-group">
    		<label for="name">Name of role</label>
    		<input type="text" class="form-control" name="name" id="" placeholder="Name of role" value="{{$role->name}}">
    	</div>
        <div class="form-group">
    		<label for="display_name">Display name</label>
    		<input type="text" class="form-control" name="display_name" id="" value="{{$role->display_name}}" placeholder="Display name">
    	</div>
        <div class="form-group">
    		<label for="description">Description</label>
    		<input type="text" class="form-control" name="description" id="" placeholder="Description" value="{{$role->description}}">
    	</div>

        <div class="form-group text-left">
            <h3>Permissions</h3>
            @foreach($permissions as $permission)
    		<input type="checkbox" {{in_array($permission->id,$role_permissions)?"checked":""}}   name="permission[]" value="{{$permission->id}}" > {{$permission->name}} <br>
            @endforeach
    	</div>






    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
        <!-- /.box -->

      </div>
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