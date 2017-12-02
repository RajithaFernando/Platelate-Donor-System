<html>
<head>
<link rel="stylesheet" type="text/css" href="login_style.css">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="login_effect.js"></script>
</head>
   
<body>

<div class="container">

<ul>
  <li><a href="<?php echo base_url()?>/donors/donor_profile"> 
    <div class="row equipo-item">
    <div class="col-md-2 separador-vertical"><center><img src="<?php echo base_url('assets/images/media/user.png');?>" class="img-responsive center-block" style="width: 100px; height: 100px;"></center></div> 
    <div class="col-md-9">
    <h2 class="titulo-equipo">Sumudu Hansani</h2>
    <p class="texto-equipo">
      rhfghdfhg
    </p>  
    </div>
    </div></a>
  </li>
  <li><a href="<?php echo base_url()?>/donors/donor_profile"> 
    <div class="row equipo-item">
    <div class="col-md-2 separador-vertical"><center><img src="<?php echo base_url('assets/images/media/user.png');?>" class="img-responsive center-block" style="width: 100px; height: 100px;"></center></div> 
    <div class="col-md-9">
    <h2 class="titulo-equipo">Wathsala Chathurani</h2>
    <p class="texto-equipo">
      gfhgbjhbjhb
    </p>  
    </div>
    </div></a>
  </li>
</ul>



  
  

</div>
<style type="text/css">
  *{
    margin: 0px;
    padding: 0px;
  }

  .container{
    color: white;
  }
  .container ul li{
    border: 1px solid white ;
    padding: 5px;
    border-radius:10px;
    margin-bottom:25px;
  }
  .container ul li:hover{
    border: 1px solid red ;
    padding: 8px;
    border-radius:10px;
    margin-bottom:25px;
    background-color: green;
    transition: linear all 0.40s;
  }
  .separador-vertical{
  border-right:2px solid #bfbdbd;
  width: 10px;
  height: 100px;
  }
  
  .titulo-equipo{
  margin-top:0px;
  color: black;
      
  }
  .texto-equipo{
    color: black;
  }
    
  /*.equipo-item{
    border: 1px solid red ;
    padding: 10px;
    border-radius:10px;
    margin-bottom:25px;
      }*/

</style>


</html>