
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AES | Login Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
  .login-page {
  /* The image used */
  /* background-image: url('assets/3d-background.jpg'); */

  /* Full height */
  /* height: 80%; */

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  </style>
</head>
<body class="hold-transition login-page">

<div class="row" style="padding: 5%;">
  <div class="col-md-6" style="text-align: -webkit-center;">
  <img src="assets/logo_aksh.png" class="img-responsive" style="    width: 300px;
    height: 250px;"/>
  </div>
  <div class="col-md-6">
  <div class="login-box-body" style="background: #eae6e6!important;">
    <p class="login-box-msg" style="font-size: 24px;">AES Registration Panel</p>

    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->
    @include('flash-message')
    <form class="login-form" action="submitRegisterData" id="myForm" method="post">
    @csrf
    <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" placeholder="Enter Full name" value="{{old('name')}}">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
        @if ($errors->has('name')) <p style="color:red;" class="custom_err">{{ $errors->first('name') }}</p> @endif
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{old('email')}}">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
        @if ($errors->has('email')) <p style="color:red;" class="custom_err">{{ $errors->first('email') }}</p> @endif
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Enter User ID" value="{{old('username')}}">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
        @if ($errors->has('username')) <p style="color:red;" class="custom_err">{{ $errors->first('username') }}</p> @endif
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{old('password')}}">
        <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
        @if ($errors->has('password')) <p style="color:red;" class="custom_err">{{ $errors->first('password') }}</p> @endif
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="phone" placeholder="Enter Phone" value="{{old('phone')}}">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></value="{{old('name')}}"span> -->
        @if ($errors->has('phone')) <p style="color:red;" class="custom_err">{{ $errors->first('phone') }}</p> @endif
      </div>

      <div class="form-group has-feedback">
        <select class="form-control" id="sel1" name="role" placeholder="Select Role">
            <option value="1" {{ old('role') == "1" ? 'selected' : '' }}>Superadmin</option>
        </select>
        @if ($errors->has('role')) <p style="color:red;" class="custom_err">{{ $errors->first('role') }}</p> @endif
      </div>


     
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register here</button>
        </div>
        <div class="col-xs-12" style="margin: 1%;
    font-size: 16px;">
          <p>Login  <a href="/">here</a></p>
          <p>Forgotten Password <a href="forgotPassword">Click here</a></p>
        </div>
        
        <!-- /.col -->
      </div>
    </form>
  </div>
</div>
</div>

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<script>
$(document).ready(function(){
    $("#usertype").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue == 'Super Admin' || optionValue == 'admin' || optionValue == 'school' ){
                $("#select1").hide();
                $("#select2").hide();
            } else{
                $("#select1").show();
                $("#select2").show();
            }
        });
    })
});
</script>
 <script>
  function myFunction() {
    var id = $(this).children(":selected").attr("id");
      var formData = $("#myForm").serialize();
      console.log(formData);
      $.ajax({
          url: "Login/userLogin",
          type: 'POST',
          data: formData,
          dataType: "json",
          success: function (obj) {
              if (obj.err == 0)
              {

                  $("#errors").html("");
                  $("#succ").html(obj.msg);
                  $('#error').css({'display': 'none'});
                  $('#succsess').css({'display': 'block'});



                  window.location.replace("");

              }

              else
              {

                  $("#errors").html(obj.msg);
                  $("#succ").html("");
                  $('#error').css({'display': 'block'});
                  $('#succsess').css({'display': 'none'});
                  setTimeout(function () {
    $('.custom_err').fadeOut()
}, 5000);


              }

          }
      });



  }

        </script>
<script>
    setTimeout(function () {
        $('.custom_err').fadeOut()
    }, 4000);
</script>
<script>
function myFunction1() {
  var x = document.getElementById("school").value;
  var optionsAsString1 = "";
  $( '#branch' ).text('');
  $.ajax({
      url: "Login/getSchoolbranch/"+x,
      type: "POST",
      dataType: "json",
      contentType: false,
      processData: false,
      success: function (obj)
      {
          if (obj.err == 0)
          {
              console.log(obj);

              for(var i = 0; i < obj.data.length; i++) {
                  optionsAsString1 += "<option value='" + obj.data[i].BranchID + "'>" + obj.data[i].BranchName + "</option>";
              }
              $( '#branch' ).append( optionsAsString1 );

          }

          if (obj.err == 1)
          {
            $( '#branch' ).text('');
          }

      }

  });
}
</script>
<script>


           $(window).load(function () {
               setTimeout(function () {
                   $('.custom_err').fadeOut()
               }, 5000);
               setTimeout(function () {
                   $('#custom_err_msg').fadeOut()
               }, 5000);
           });


       </script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
