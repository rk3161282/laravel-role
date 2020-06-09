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

   <link href="assets/dist/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
  <!-- Content Header (Page header) -->
  <script>
      $(window).load(function () {
          setTimeout(function () {
              $('.custom_err').fadeOut()
          }, 2000);
      });
  </script>
 
  <section class="content-header">
    <h1 style="font-size:18px;">
    School Settings
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">School Settings</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary" id="scrl1">
        <div class="box">
          <div class="box-header">
          <p style="font-size: 12;"><strong>School List</strong>
                  <span style="float:right;">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">ADD SCHOOL</button>
                </span></p>
           
          </div>
          <!-- /.box-header -->
          <div class="box-body" style="max-height: 900px;overflow: scroll;overflow-x: scroll;overflow-y: scroll;max-width: 100%;">
            <table id="example1" class="table table-bordered table-striped" >
              <thead>
                <tr>
                    <th>School Name</th>
                    <th>School Code</th>
                    <th>Address</th>

                    <th>Email</th>
                    <th>Phone</th>
                    <th>Session</th>
                 <th>State</th>
                    <th>Role</th>
                    <th>Status</th>
                     <th>Created Date</th>
                      <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>

      </div>
    
    </div>
    <!-- /.row -->
  </section>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #3c8dbc;color: #fff;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">System Settings</h4>
        </div>
        <div class="modal-body">
        <div id="succ1" class="custom_err" style="display: none;">
              <div class="alert alert-success">

                  <strong>Success!</strong><span id="success1"></span>
              </div>
          </div>
          <div style="display: none;" class="custom_err" id="err1">
              <div class="alert alert-danger">

                  <strong>Error!</strong> <span id="error1"></span>
              </div>
          </div>
        <form  role="form" method="POST" action="" id="myForm" autocomplete="off">
            <input type="hidden" name="id" id="id" value=""/>
            <div class="box-body">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">School Name<span style="color:red">*</span></label>

                            <input type="text"  class="form-control" value="" name="school_name" id="school_name" autocomplete="off" placeholder="School Name">

                    </div>

                    </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">School State<span style="color:red">*</span></label>
                        <select name="state" id="state" class="form-control">
                          <option value="AP">Andhra Pradesh</option>
                          <option value="AN">Andaman and Nicobar Islands</option>
                          <option value="AR">Arunachal Pradesh</option>
                          <option value="AS">Assam</option>
                          <option value="BH">Bihar</option>
                          <option value="CH">Chandigarh</option>
                          <option value="CT">Chhattisgarh</option>
                          <option value="DN">Dadar and Nagar Haveli</option>
                          <option value="DD">Daman and Diu</option>
                          <option value="DL">Delhi</option>
                          <option value="LD">Lakshadweep</option>
                          <option value="PY">Puducherry</option>
                          <option value="GA">Goa</option>
                          <option value="GJ">Gujarat</option>
                          <option value="HR">Haryana</option>
                          <option value="HP">Himachal Pradesh</option>
                          <option value="JH">Jammu and Kashmir</option>
                          <option value="JK">Jharkhand</option>
                          <option value="KA">Karnataka</option>
                          <option value="KL">Kerala</option>
                          <option value="MP">Madhya Pradesh</option>
                          <option value="MH">Maharashtra</option>
                          <option value="MN">Manipur</option>
                          <option value="ME">Meghalaya</option>
                          <option value="MI">Mizoram</option>
                          <option value="NA">Nagaland</option>
                          <option value="OR">Odisha</option>
                          <option value="PB">Punjab</option>
                          <option value="RJ">Rajasthan</option>
                          <option value="SK">Sikkim</option>
                          <option value="TN">Tamil Nadu</option>
                          <option value="TS">Telangana</option>
                          <option value="TR">Tripura</option>
                          <option value="UP">Uttar Pradesh</option>
                          <option value="UT">Uttarakhand</option>
                          <option value="WB">West Bengal</option>
                          </select>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                  <div class="col-md-12">
                  <div class="form-group">
                        <label class="bmd-label-floating">Address<span style="color:red">*</span></label>

                        <textarea class="form-control" rows="3" name="school_address" id="school_address"></textarea>

                        </div>
                        </div>
                  </div>
                  <div class="col-md-12">
                  <div class="col-md-6">
                  <div class="form-group">
                        <label class="bmd-label-floating">Phone<span style="color:red">*</span></label>

                            <input type="text" class="form-control" value="" name="school_phone" id="school_phone" autocomplete="off" placeholder="Phone">

                        </div>
              			
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                        <label class="bmd-label-floating">Email<span style="color:red">*</span></label>

                            <input type="text" class="form-control" value="" name="school_email" id="school_email" autocomplete="off" placeholder="Email">

                        </div>
              			
                  </div>
            </div>
            <div class="col-md-12">
                  <div class="col-md-6">
                  <div class="form-group">
                        <label class="bmd-label-floating">Session<span style="color:red">*</span></label>

                        <select class="form-control" name="school_session" id="school_session">
                        <option value=''>--Select Session--</option>
                            <option value="2020-2021">2020-2021</option>
                        </select>

                        </div>
              			
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                        <label class="bmd-label-floating">Session Start Month<span style="color:red">*</span></label>

                        <select class="form-control" name="school_session_start_month" id="school_session_start_month">
                        <option value=''>--Select Month--</option>
                        <option value='1'>Janaury</option>
                        <option value='2'>February</option>
                        <option value='3'>March</option>
                        <option value='4'>April</option>
                        <option value='5'>May</option>
                        <option value='6'>June</option>
                        <option value='7'>July</option>
                        <option value='8'>August</option>
                        <option value='9'>September</option>
                        <option value='10'>October</option>
                        <option value='11'>November</option>
                        <option value='12'>December</option>
                        </select>

                        </div>
              			
                  </div>
              
            </div>


          </div>

            <!-- /.box-body -->

            <div class="box-footer" style="float:right;">
             
            </div>
          </form>
        </div>
        <div class="modal-footer">
        <button type="button" onclick="saveNewData()" class="btn btn-primary" id="btn">Save</button>
        </div>
      </div>
      
    </div>
  </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal_reset" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #3c8dbc;color: #fff;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reset Password</h4>
        </div>
        <div class="modal-body">
        <div id="succ11" class="custom_err" style="display: none;">
              <div class="alert alert-success">

                  <strong>Success!</strong><span id="success11"></span>
              </div>
          </div>
          <div style="display: none;" class="custom_err" id="err11">
              <div class="alert alert-danger">

                  <strong>Error!</strong> <span id="error11"></span>
              </div>
          </div>
        <form  role="form" method="POST" action="" id="myForm1" autocomplete="off">
            <input type="hidden" name="schoolid" id="schoolid" value=""/>
            <div class="box-body">
           
                    <div class="col-md-12">
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">New Password<span style="color:red">*</span></label>
                      
                        <input type="text" class="form-control"  name="new_password" id="new_password" autocomplete="off" placeholder="New password">

                        </div>
                    </div>
                  </div>
   
          </div>

            <!-- /.box-body -->

            <div class="box-footer" style="float:right;">
             
            </div>
          </form>
        </div>
        <div class="modal-footer">
        <button type="button" onclick="saveResetNewData()" class="btn btn-primary" id="btn">Save</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <script>
    function getEditDetails(id,school_name,school_code,school_address,school_phone,school_email,school_session,school_session_start_month,state){
      $('#id').val(id);
      $('#school_name').val(school_name);
      $('#school_code').val(school_code);
      $('#school_address').val(school_address);
      $('#school_phone').val(school_phone);
      $('#school_email').val(school_email);
      $('#school_session').val(school_session);
      $('#school_session_start_month').val(school_session_start_month);
      $('#state').val(state);

      $('#btn').html("Update");
      $('#myModal').modal('show');
    }
  </script>

<script>
    function getResetDetails(id){
      $('#schoolid').val(id);
      $('#btn').html("Update");
      $('#myModal_reset').modal('show');
    }
  </script>
<script>
$('#parent_module').on('change', function() {
  var parent_module = this.value;
  if(parent_module == '0'){
      $("#menuLink").css("display", "none");
  }else{
      $("#menuLink").css("display", "block");
  }
});
</script>
<style>
.file-upload {
  background-color: #ffffff;
  /* width: 600px; */
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}
</style>
<script>

function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});

</script>
<script>
function saveResetNewData()
{
    var formData = new FormData($('#myForm1')[0]);
    var urlrest = "";
    $.ajax({
        url: urlrest,
        cache: false,
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        data: formData,
          beforeSend: function () {
              $("#wait").css("display", "block");
            // App.blockUI({
            //     target: '#myForm',
            //     animate: true
            // });
        },
        success: function (obj)
        {
            $("#wait").css("display", "none");
        //   App.unblockUI("#myForm");

            if (obj.err == 0)
            {
              $("#error11").html("");
                $("#success11").html(obj.msg);
                $('#err11').css({'display': 'none'});
                $('#succ11').css({'display': 'block'});
                $('html, body').animate({
                    scrollTop: $("#scrl1").first().offset().top - 250
                }, 1000);

                setInterval(function () {
                    window.location.href = redirect_url;
                }, 3000);
            }

            else
            {
                $("#error11").html(obj.msg);
                $("#success11").html("");
                $('#err11').css({'display': 'block'});
                $('#succ11').css({'display': 'none'});
                $('html, body').animate({
                    scrollTop: $("#scrl1").first().offset().top - 250
                }, 1000);
                setTimeout(function () {
                    $('.custom_err').fadeOut()
                }, 5000);
            }

        }

    });
}
</script>
@endsection


@section('footer')
  @parent
@endsection