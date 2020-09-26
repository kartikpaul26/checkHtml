<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
    #bktest{
        /*background-image: url('https://i.stack.imgur.com/p9mUO.jpg');*/
        height: 700px;
    }
    label{
        color: white;
    }
    input[type="text"],
    input[type="date"],
    textarea[type="text"]{
         border:none;
            border-bottom: 1px solid red;
            background: transparent;
            outline-color: red;
            height: 40px;
            color: black;
            font-size: 16px;
    }
</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Startmin</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" id="usearch" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        
                        <a class="active" id="dashboard" type="button"><i class="fa fa-dashboard fa-fw" id></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#" id="add-user"><i class="fa fa-sitemap fa-fw"></i>Add User</a>                       
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12" id="bktest">
                   <!--  <h1 class="page-header">Page Title</h1> -->
                  
                  <div class="container" style="margin-top: 20px;" >
        <form method="POST" style="margin-top: 50px;" id="form-id">
            <div class="text-center">
            <h2 style="color: white;">Add Sub-dealer</h2>
        </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="u_name" id="u_name" class="form-control" placeholder="Enter Name">
            </div>
                <div class="form-group">
                <label >Address:</label>
                <textarea type="text" rows="4" class="form-control" style="resize: vertical;" id="u_address" placeholder="Enter address" name="u_address" id="u_address"></textarea>
            </div>
            <button type="submit" class="btn btn-success" name="sub-btn" id="sub-btn">submit</button>
        </form>
        <div id="show-result"></div>
    </div>
</body>
</html>
                </div>
            </div>

            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

<script type="text/javascript">
   $(document).ready(function(){
    //alert("gg");
          $("#form-id").css("display", "none");
                $("#show-result").css("display","block");
                    $.ajax({
                    type:'GET',
                    url:'view.php',
                    data:{},                    
                    success:function(result){

                        $("#show-result").html(result);
                    }
                });         

                
            function order(id){
                
             alert(id);return false;
            /*$.ajax({
                    type:'POST',
                    url:'edit_user.php',
                    data: {id:id},
                    success:function(result){
                        $("#result-div").show();
                        $("#result-div").html(result);
                        $("#show-result").hide();
                    }   
            });*/
        }


            ("#add-user").click(function(){
                $("#form-id").css("display", "block");
                $("#show-result").css("display","none");
            });
                  
            
             $("#dashboard").click(function(){
                
                $("#form-id").css("display", "none");
                $("#show-result").css("display","block");
                    $.ajax({
                    type:'GET',
                    url:'view.php',
                    data:{},                    
                    success:function(result){
                        $("#show-result").html(result);
                    }
                });         
                
            });
           
        });

</script>

</body>
</html>
