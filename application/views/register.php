<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KISAAN BHAI</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('css/heroic-features.css');?>" rel="stylesheet">

    
</head> 

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('Kisaan/index');?>">स्वागत हे</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">
                        
						
						<form class="searchForm" method="get" action="">              
						  <input class="searchTerm"  placeholder="Search…" autocomplete="off"/>
						  <input type="submit" class="searchBtn" value="GO"/>
									<ul class="suggestionBox">
                          <li><b>w</b>heat</li>
                                <li><b>r</b>ice</li>
                                <li><b>c</b>orn</li>
                                <li><b>su</b>garcane</li>
                                <li><b>to</b>mato</li>
                             </ul>
						</form>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/login')?>">लॉग इन</a>
                    </li>
                    <li>
                        <a href="http://www.livehindustan.com/weather/8.html">मौसम</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/indexeng');?>">अंग्रेज़ी</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/register');?>">रजिस्टर</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="register">
    <h1 class="reg_header">स्वागत हे रजिस्टर</h1>
    <form method="post" action="<?=site_url('Kisaan/registerdata')?>" class="reg">

        <input type="text" name="username" placeholder="उपयोगकर्ता नाम" required="required" class="reg"/>

        <input type="text" name="first" placeholder="पहला नाम" required="required" class="reg"/>

        <input type="text" name="last" placeholder="अंतिम नाम" required="required" class="reg"/>

        <input type="password" name="password" placeholder="पासवर्ड" required="required" class="reg"/>

        <input type="number" name="mobile" placeholder="फोन-नंबर" required="required" class="reg"/>
        <div  style="margin-left:44%">
        <input type="radio" name="gender" value="male" id="m"  checked class="gen"> नर
        <input type="radio" name="gender" id="f" value="female" class="gen"> महिला
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-large">जमा करें</button>
    </form>
    </div>

     <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; KISAAN BHAI 2017</p>
                </div>
            </div>
        </footer>
    <script src="<?php echo base_url('js/index.js');?>"></script>
    <style type="text/css">
        input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type=number] {
    -moz-appearance:textfield;
}
    </style>
</body>
