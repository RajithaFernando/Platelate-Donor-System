<html>
<head>
<link rel="stylesheet" type="text/css" href="login_style.css">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="login_effect.js"></script>
</head>
   
<body>

<!-- <center>
 <input type="button" id="show_login" value="Show Login">
 <div id = "loginform">
  <form method = "post" action = "">
    <div class="coverpadx"></div>
   <p>Join TalkersCode And get Quick Access To Our Tutorials,Questions,Web Tricks And Many More</p>
   <input type = "image" id = "close_login" src = "images/close.png">
   <input type = "text" id = "login" placeholder = "Email Id" name = "uid">
   <input type = "password" id = "password" name = "upass" placeholder = "***">
   <input type = "submit" id = "dologin" value = "Login">
  </form>
 </div>
</center> -->
  <div class="container">
    <h1>User Profile</h1>
    <hr>
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="<?php echo base_url('assets/images/media/user.png');?>" class="avatar img-circle" alt="avatar" style="width: 150px; height: 150px;">
          <!-- <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control"> -->
        </div>
        <div class="col-md-3" >
          <ul>
            <li>About</li>
            <li>Donation Details</li>
          </ul>
        </div>
      </div>
      

      <!-- edit form column -->
      <div class="col-md-9">
        <!-- <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div> -->
        <h3>Sumudu Hansani</h3>
        
        <form class="form-horizontal" role="form">
          
          <div class="coverpad"></div>
          <div class="coverpadx">
            
            <form class="form-horizontal" role="form">
          
          
          <div class="form-group">
            <label for="exampleInputEmail1">NIC Number</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NIC Number" name="donorNIC" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Gender</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Gender" name="donorGender" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="address" class="form-control" id="exampleInputEmail1" placeholder="Address" name="donorAddress" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Occupation</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Occupation" name="donorOccupation" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email Address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address" name="donorEmail" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Date Of Birth</label>
            <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Date Of Birth" name="donorDOB" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Height</label>
            <input type="double" class="form-control" id="exampleInputEmail1" placeholder="Height" name="donorHeight" disabled>
        </div>



        <div class="form-group">
            <label>Available Times</label><br>
            <input type="radio" class="availableTimes" value="weekday" name="donorAvailable" disabled><label for="weekday" class="light">Week day</label><br>
            <input type="radio" class="availableTimes" value="weekend" name="donorAvailable" disabled><label for="weekend" class="light">week end</label><br>
            <input type="radio" class="availableTimes" value="anyday" name="donorAvailable" disabled><label for="anyday" class="light">Any day</label>

        </div>
          </div>

        </form>
        
        </div>

        </form>
        
      </div>
  </div>
</div>
<hr>
</body>
<style type="text/css">
  /*.coverpad{
    left: 100px;
    top: 60px;
    background: white;
    height: 360px;
    width: 850px;
    position: absolute;
    display: none;
  }*/
  /*.coverpadx{
    left: 50px;
    top: 120px;
    background: white;
    height: 100%;
    width: 750px;
    position: absolute;
    -webkit-box-shadow: 0 3px 8px rgba(0,0,0,.25);
  }*/
</style>
</html>