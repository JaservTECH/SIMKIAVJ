<!DOCTYPE html><html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	
	


    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>resource/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>resource/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>resource/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>resource/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   

	    <title>SIM-KIA</title>
	
</head>

<body>

    <div id="wrapper">
		

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0;background-color:rgb(0,27,42);">
		  <div class="container-fluid">           
		    <div class="navbar-header" style="background-color:rgb(0,27,42);">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >
					<img class="img-responsive2" src="<?php echo base_url();?>image/logo.png">
				</a>
			</div>
		  
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-left">
				<li> 
					 <a class="navbar-brand">SIM-KIA</a>
				</li>
              </ul>
			  
			  <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
					<a href="#"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a>
				</li>
              </ul>
		    </div>
		  </div>
		
		<!--tampilan menu -->
        <?php echo $this->load->view("tampilan_menu");?>    
			<!-- /.navbar-static-side -->	
		</nav>
	</div>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" palceholders>
							<h1 class="page-header">
							<?php echo $judul; ?>
								<small>
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <?php echo $sub_judul; ?>
								</small>
							</h1>
						</div>
					</div>
				
				<!--php manggil tampilan content-->
				<?php echo $this->load->view($content); ?>
				
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>resource/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>resource/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>resource/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>resource/dist/js/sb-admin-2.js"></script>

</body>

</html>
