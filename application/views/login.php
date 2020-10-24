<html>
<head>
<title> Dashboard - Nindya Karya </title>
<link rel="icon" href="<?php echo base_url().'asset/image/logo.png' ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body { 
    background: url("<?php echo base_url().'asset/image/background.jpg' ?>") no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
<link rel="stylesheet" href="<?php echo base_url().'asset/bootstrap/css/bootstrap.css' ?>">
<link rel="stylesheet" href="<?php echo base_url().'asset/login/apps.css' ?>">
</head>
<body>
        <div class="container center-block"> 
            <div class="box_login">
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
                        <button class="login_btn">  Login  </button>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>