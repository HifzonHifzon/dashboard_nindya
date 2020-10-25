<html>
<head>
<title> Dashboard - Nindya Karya </title>
<link rel="icon" href="<?php echo base_url().'asset/image/logo.png' ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo base_url().'asset/bootstrap/css/bootstrap.css' ?>">
<link rel="stylesheet" href="<?php echo base_url().'asset/login/apps.css' ?>">
</head>
<body>

        <div class="container-fluid center"> 
 
            <div class="box_login_wrapper">
                <h4> E-Dashboard Barang </h4>
            <div class="box_login">
            <form action="<?php echo base_url().'dashboard/actionAuth' ?>" method="POST">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <img src="<?php echo base_url().'asset/image/logo2.png'  ?>" alt="Nindya Karya" class="logo center" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="text" class="form-control input_login" placeholder="Username / Email">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="text" class="form-control input_login" placeholder="Password">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button class="btn_login">  Login  </button>
                    </div>
                </div>

                <div class="row icon_sosmed">
                      <a href="https://twitter.com/nindyakarya" target="_blank">  
                          <img src="<?php echo base_url().'asset/image/twit_green.png' ?>"
                         onmouseover="this.src='<?php echo base_url().'asset/image/twit_orange.png' ?>'"
                         onmouseout="this.src='<?php echo base_url().'asset/image/twit_green.png' ?>'"  class="img_sosmed"> 
                       </a>

                       <a href="https://www.youtube.com/channel/channel/UCNH3cvlPeWpY8kYCieZAfew" target="_blank">
                            <img src="<?php echo base_url().'asset/image/youtube_green.png' ?>"
                         onmouseover="this.src='<?php echo base_url().'asset/image/youtube_orange.png' ?>'"
                         onmouseout="this.src='<?php echo base_url().'asset/image/youtube_green.png' ?>'"  class="img_sosmed"> 
                       </a>

                       <a href="https://www.instagram.com/nindyakarya/" target="_blank">
                        <img src="<?php echo base_url().'asset/image/ig_green.png' ?>"
                         onmouseover="this.src='<?php echo base_url().'asset/image/ig_orange.png' ?>'"
                         onmouseout="this.src='<?php echo base_url().'asset/image/ig_green.png' ?>'" class="img_sosmed"> 
                        </a>
                </div>
            </form>
            </div>
        </div>
        </div>
</body>
</html>