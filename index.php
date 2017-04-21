<!DOCTYPE html>
<html lang="en">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Index | Body Inspection</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">


        <!-- Custom Fonts -->
        <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


    </head>

    <body>

    
    
     <!-- Navigation -->
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
                        <a class="txtmenu actived" href="index.php">Full Body</a>
                    </li>
                    <li>
                        <a class="txtmenu" href="mainLympnode.php">Lymph Node</a>
                    </li>
                    <li>
                        <a class="txtmenu" href="mainDisease.php">รอยโรค</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="container">


        <div class="col-md-12">
            <div class="row primarygroup fixed-top">
                <center>
<!--                    <h2>FULL BODY</h2>
                    <hr class="line-primary"/>    -->  


                    <a href="#" 
                    id="btnright"
                       class="btn btn-primary btn-lg txthuge" 
                       onclick="javascript:showRight();">
                        Right Side</a>
                    <a href="#" 
                     id="btnleft"
                       class="btn btn-default btn-lg txthuge" 
                       onclick="javascript:showLeft();">

                        Left Side</a>


                </center>
            </div>
         



        </div>

    </div>



    </div>

<div id="rightside" class="col-xs-12">
    <div id="toBeZoomedOut">

        <div id="spritespin" class="spritespin-instance" unselectable="on" style="-webkit-user-select: none; position: relative; overflow: hidden;"> 

        </div>
    </div>
</div>


<div  id="leftside" class="col-xs-12" style="display:none;">
    <div id="toBeZoomedOut">
        <div id="spritespin2" class="spritespin-instance" unselectable="on" style="-webkit-user-select: none; position: relative; overflow: hidden;"> 
        </div>   
    </div>   
</div>



</div>
</div>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/spritespin.js"></script>

<script type="text/javascript">
    $('#spritespin').spritespin({
        source: SpriteSpin.sourceArray('img/full_rightside/{frame}.jpg',
                                       { frame: [1, 47], digits: 3 }),
        width: 650,
        height: 400,
        animate: true,
        sense: -1,
        mods: ['drag', 'zoom', '360'],
        behavior: 'drag',
        module: '360'
    });

    // these are the frame numbers that will show a detail bubble
    var details = [0, 8, 20];
    // the current index in the details array
    var detailIndex = 0;

    // initialise spritespin
    var spin = $('#spritespin');
    spin.spritespin({
        source: frames,
        width: 650,
        sense: -10,
        height: 400,
        animate: false
    });



    $('#spritespin2').spritespin({
        source: SpriteSpin.sourceArray('img/full_leftside/{frame}.png',
                                       { frame: [1, 32], digits: 3 }),
        width: 650,
        height: 400,
        animate: false,
        sense: -1,
        mods: ['drag', 'zoom', '360'],
        behavior: 'drag',
        module: '360'
    });

    function showRight() {

        
        $('#leftside').css('display', 'none');
     	$('#rightside').css('display', 'block');       
		$('#btnleft').removeClass('btn btn-primary btn-lg');
		$('#btnleft').addClass('btn btn-default btn-lg');
		$('#btnright').addClass('btn btn-primary btn-lg');

    }

     function showLeft() {
     	$('#leftside').css('display', 'block');
     	$('#rightside').css('display', 'none');
		$('#btnright').removeClass('btn btn-primary btn-lg');
		$('#btnright').addClass('btn btn-default btn-lg');
		$('#btnleft').addClass('btn btn-primary btn-lg');



    }

</script>

</body>

</html>
