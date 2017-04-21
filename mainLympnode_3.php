<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Index | Lymph Node Inspection</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
function writeHeader(txt) {
    document.getElementById("Header").innerHTML = txt;
}
function writeDesc(txt) {
    document.getElementById("desc").innerHTML = txt;
}
</script>
</head>

<body>

       <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
                    
              
                    
                      <h1 class="logo">
                            <a class="navbar-brand" href="index.php" title="คณะสัตวแพทยศาสตร์ มหาวิทยาลัยเกษตรศาสตร์">
                                </a>
                        </h1>
              
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul id="menu" class="nav navbar-nav navbar-right">
                    <li>
                        <a class="txtmenu " href="index.php">Full Body</a>
                    </li>
                    <li>
                        <a class="txtmenu actived" href="mainLympnode.php">Lymph Node</a>
                    </li>
                    <li>
                        <a class="txtmenu " href="mainDisease.php">รอยโรค</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Page Content -->
    <div class="container">
       <div class="row">
                    <div class="intro-text">
                    <center>
                        <h2>LYMPH NODE</h2>
                        <hr class="line-primary"/>      
                    </center>
                    </div>  
           </div>
             <div class="row">  
                            <!-- <div class="carousel-inner"> -->
                <div >
                                <center>
                                    <h3 id="Header">
                                    </h3>
                                </center>
                                   <!--  <p id="desc">
                                    test
                                    </p> -->
                                    <img 
                                    src="img/lympnode/unknow_thumb.png" alt="LymphNode" usemap="#fullbodymap"/>
                                  
                
                </div>
            </div>
            
            <a href="mainLympnode.php">
            <div class="row">
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail" >
                              <img src="img/lympnode/halfleft_thumb.png" alt="">
                            <div class="caption">
                              
                                <h4>Full Half
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                          
                        </div>
                    </div>
                    </a>

                     <a href="mainLympnode_2.php">
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail"  >
                            <img src="img/lympnode/popliteal_thumb.png" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Hock Node</h4>
                                <h4>Popliteal
                                </h4>
                                <p>The popliteal lymph nodes, small in size and some six or seven in number, are embedded in the fat contained in the popliteal fossa, sometimes referred to as the 'knee pit'</p>
                            </div>
                          
                        </div>
                    </div>
                    </a>
                    
                      <a href="mainLympnode_3.php">
                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <div class="thumbnail" style="border-style: solid;border-color:#ff0000; border-width:5px;">
                               <img src="img/lympnode/unknow_thumb.png" alt="">
                                <div class="caption">
                                   
                                    <h4><a href="#">Unknown</a>
                                    </h4>
                                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                
                            </div>
                        </div>
                    </a>
                     <a href="mainLympnode_4.php">
                        <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                          <img src="img/lympnode/unknow2_thumb.png" alt="">

                            <div class="caption">
                              
                                <h4><a href="#">Unknown</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                          
                        </div>
                        </div>  
                     </a>
            </div>

        </div>

   
   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
