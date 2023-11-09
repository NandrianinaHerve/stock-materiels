<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/logo_blason_fianarantsoa.gif" type="image/ico" />

    <title>Gestion du stock materiels!</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

     <!-- Datatables -->
    
     <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
     <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
     <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
     <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
     <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
     <script src="js/sweetalert.min.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a class="text-center " href="index.html" ><i ></i> <span>COMMUNE UBRAIANE FIANARANTSOA!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/logo_blason_fianarantsoa.gif" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>CUF</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                <li ><a href="index.php" ><i class="fa fa-bar-chart"></i> Tableau de bord </a>
                    
                  </li>
                  <li  ><a href="services.php" class=""><i class="fa fa-users"></i> services </a>
                    
                  </li>
                  <li class="current-page"><a href="#" class=""><i class="fa fa-desktop"></i> Categories </a>
                   
                  </li>
                  <li><a  href="materiels.php"><i class="fa fa-briefcase"></i> Materiels </a>
                    
                  </li>
                  <li><a href="affectation.php"><i class="fa fa-expand"></i> Affectations </a>
                  </li>
                  <li ><a href="entretient.php"><i class="fa fa-wrench"></i> Entretient </a>
                  </li>
                  <li id="btndec"><a><i class="fa fa-power-off"></i>Deconnexion</a>
                  </li>
              </div>
             

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
             
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
    
            
              <!-- ato ny tableau -->
                
          <div class="right_col" role="main" >
            <!-- top tiles -->
             <div class="row" style="display: inline-block;" >
                 <div class="tile_count" style="width: 1080px;">
                       <section class="content">
                      <div class="row">
                          <div class="col-12">
                            <button id="add_button" style="background: #2c3b64; color: #ccc; font-size: 20px; margin-left: 20px;" class="btn btn" data-bs-toggle="modal" data-bs-target="#modal1"><img src="images/ajout.png" alt=""></button><br><br>
                              
                            
                          
                            <!--  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                  Launch static backdrop modal
                                </button>-->
                          </div>
                      </div>
  
                    <!-- test -->
  
                    <div class="col-md-12 col-sm-12" >
                      <div class="x_panel ">
                        <div class="x_title">
                          <h2>Gestion du stock materil<small>Categories</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                  <div class="card-box table-responsive">
                          <p class="text-muted font-13 m-b-30">
                            Vous-pouvez assurer votre servive ici en cas de suppression modification insertion recherche .
                          </p>
                          
                          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>N°categorie</th>
                                <th>Nom categorie</th>
                                <th>Design</th>
                                <th>Actions</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              
                               <?php
                              include '../backend/db.php';
                              include '../backend/afficCategorie.php';
                              if ($result->num_rows > 0) {
                               while ($row = $result->fetch_assoc()) {
                                   $customId = 'cuf/Cat-';
                                  
                           
                                   
                                   $customId .= sprintf("%02d", $row["idcat"]); // Ajoutez l'ID incrémenté
                           
                                   echo "<tr idcat='$customId'>";
                                   echo "<td>" . $customId . "</td>"; // Affichez l'ID personnalisé
                                   echo "<td>" . $row["nomcat"] . "</td>";
                                   echo "<td>" . $row["design"] . "</td>";
                                   echo '<td>';
                                   echo '<a id="btn-mod"  class="btn btn-primary" href="#" data-idcat="'.$row['idcat'].'" data-nomcat="'.$row['nomcat'].'" data-design="'.$row['design'].'"><i class="fa fa-pencil-square-o"></i></a>';
                                   echo '<a id="btns"  class="btn btn-danger" href="#" data-idcat="'.$row['idcat'].'" ><i class="fa fa-trash"></i></a>';
                                   echo '</td>';
                                   echo "</tr>";
                               }
                           }
                           
                           
                           
                              ?>
                          </table>
                          
                          
                        </div>
                      </div>
                    </div>
                  </div>
                      </div>
                    </div>
                    
                      
                
                     <!-- test -->
  
                      
  
  
  
               
          </div>
      </div>
            </div>
          </div>
            
            
            
            
              </div>
        </div>
    </div>
          <!-- eto ny farany tableau -->

         
          

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           copyright2023 by ChrBem
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>


    <script>
        $(document).on("click", "#add_button", function(){
       $('#modal1').modal('show');
       $('#modal1').find('.modal-title').text(" Ajout categorie");

   });

   $(document).on("click", "#btn-mod", function(){
   $('#modmodal').modal('show');
   var nomcat = $(this).attr('data-nomcat');
   var design = $(this).attr('data-design');
   var idcat = $(this).attr('data-idcat');

    $("#idcat1").val(idcat);
    $("#nomcat1").val(nomcat);
    $("#design1").val(design);
   });




  //function ajout
  
  function ajt(){
        var nomcat = $("#nomcat").val();
        var design = $("#design").val();
        $.ajax({
          type : "post",
			url : "../backend/ajoutcat.php", 
      dataType: "json",
      data: {
        nomcat:nomcat,
        design:design
      },
			success : function(data) {
        $('#nomcat').val("");
        $('#design').val("");
			},
			complete : function(){
        window.location.href = "categorie.php";
			},
			error : function(data) {
				var notif = data.msg;
			}
        });
      }


          //function modifier
          function modifier() {
       var idcat1 = $("#idcat1").val();
       var nomcat1 = $("#nomcat1").val();
       var design1 = $("#design1").val();
        $.ajax({
			type : "post",
			url : "../backend/modifiercat.php", 
      dataType: "json",
      data: {
        idcat1:idcat1,
        nomcat1:nomcat1,
        design1:design1
      },
			success : function(data) {
       
			},
			complete : function(){
        window.location.assign("categorie.php"); 
			},
			error : function(data) {
				var notif = data.msg;
			}
		});
    }


    
      //funtion supprimer

      function supprimer(idcat) {
  
  $.ajax({
    type : "post",
    url : "../backend/suprimercat.php", 
    dataType: "json",
    data: {
      idcat:idcat
    },
    success : function(data) {
      
    },
    complete : function(){
      window.location.href = "categorie.php";
    },
    error : function(data) {
      var notif = data.msg;
    }
  });
  
    }


      $(document).ready(function() {
   $(document).on("click", "#btnm", function(){
    var nomcat =  $("#nomcat1").val();
    var design =  $("#design1").val();
    var notif = "";
        notif ="Veuillez remplir le(s) champ(s) vide(s)";
        if(nomcat == ""){
            swal("Erreur", notif, "error");
        }else if(design == "") {
            swal("Erreur", notif, "error");
        }else{
          swal("Modification avec success","","success");
          modifier();
            
        }

	});

    
    $(document).on("click", "#btna", function(){
    var nomcat = $("#nomcat").val();
    var design = $("#design").val();
    var notif = "";
        notif ="Veuillez remplir le(s) champ(s) vide(s)";
        if(nomcat == ""){
            swal("Erreur", notif, "error");
        }else if(design == "") {
            swal("Erreur", notif, "error");
        }else{
          swal("Enregistrement avec success","","success");
            ajt();
        }

	});
  


  $(document).on("click", "#btns", function(){
	    	var idcat = $(this).attr("data-idcat");
         var notif="";
                notif="Suppresion avec success"
                swal({
			  title: "Etes-vous sur?",
			  text: "de vouloir supprimer cet service,l'action est irreversible!",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
            .then((result) => {
                    if (result) {
                        swal("Success", notif, "success");
			    supprimer(idcat);
      
			  }
			  

	});

	});

  $(document).on("click", "#btndec", function(){
	    
      
                swal({
			  title: "Etes-vous sur?",
			  text: "de vouloir deconnecter cet application,l'action est irreversible!",
			  icon: "warning",
			  buttons: true,
			  dangerMode: false,
			})
            .then((result) => {
                    if (result) {
                      window.location.href = "../backend/deconnexion.php";
      
			  }
			  

	});

	});


  
 


});

  
   </script>



  
   <!-- Modal ajout -->
<!-- Button trigger modal -->

 
<div class="modal" tabindex="-1" role="dialog" id="modal1">
   <div class="modal-dialog" role="document">
    <form >
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title">Ajout de categorie</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <label>Nom categorie</label>
         <input type="text" name="nomcat" id="nomcat" class="form-control" placeholder="Entrer le nom categorie..."/><br>
         <label>Design</label>
         <input type="text" name="design" id="design" class="form-control" placeholder="Entrer le design categorie..."/><br>
       </div>
      
       <div class="modal-footer">
       <input type="hidden" name="nom_id" id="nom_id" />
       <input type="hidden" name="operation" id="operation" />
       <button type="button" class="btn btn-primary"  id="btna">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> 
     </div>
    </form>
   </div>
 </div>
      
     <!-- Modal mod -->


 
<div class="modal" tabindex="-1" role="dialog" id="modmodal">
   <div class="modal-dialog" role="document">
    <form action="POST" method="post" id="client-form" enctype="multipart/form-data">
    <input type="text" id="idcat1" hidden>
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title">Modifier</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <label>nom categorie</label>
         <input type="text" name="nomcat1" id="nomcat1" class="form-control" /><br>
         <label>Design </label>
         <input type="text" name="design1" id="design1" class="form-control"/><br>
       </div>
       <div class="modal-footer">
       <input type="hidden" name="nom_id" id="nom_id" />
       <input type="hidden" name="operation" id="operation" />
       <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnm">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> 
     </div>
    </form>
   </div>
 </div>
	
  </body>
</html>
