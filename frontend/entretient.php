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
  <style>
      
    .green-color {
            background-color: green;
            color: transparent;
        }
        
        .red-color {
            background-color: red;
            color: transparent;
        }

        .circle {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    transition: background-color 0.5s ease-in-out;

}



        .cercle {
        
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
            vertical-align: middle; /* Alignement vertical au milieu */ 
            margin-left: 50px; /* Espace entre le cercle et le texte */
            margin-right: 10px;
        
           
          
        }

        .cercle-red {
            background-color: red;
        }

        .cercle-green {
            background-color: green;
        }

        .cercle-brown {
            background-color: brown;
        }
        .cercle-yellow {
            background-color: yellow;
        }
        
      
    
  </style>

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
                  <li><a href="categorie.php" class=""><i class="fa fa-desktop"></i> Categories </a>
                   
                  </li>
                  <li><a  href="materiels.php"><i class="fa fa-briefcase"></i> Materiels </a>
                    
                  </li>
                  <li ><a href="affectation.php"><i class="fa fa-expand"></i> Affectations </a>
                  </li>
                  <li class="current-page"><a href="#"><i class="fa fa-wrench"></i> Entretient </a>
                  </li>
                  <li id="btndec"><a><i class="fa fa-power-off"></i>Deconnexion</a>
                   
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
                         
                      </div>
  
                    <!-- test -->
                   
       
            <span class="cercle cercle-red"></span> 
            <span class="text">jour de l'entretien ou jour entretien depassée</span>
        
            <span class="cercle cercle-green"></span> 
            <span class="text">30 à 16 jours avant l'entretien</span>
        
            <span class="cercle cercle-brown"></span>
            <span class="text">3 à 1 jours avant entretien</span>

            <span class="cercle cercle-yellow"></span>
            <span class="text">15 à 4 jours avant entretien</span>
       
      
  
                    <div class="col-md-12 col-sm-12" >
                      <div class="x_panel ">
                        <div class="x_title">
                          <h2>Gestion du stock materil<small>Entretiens</small></h2>
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
                          <input type="text" id="nbrMod" hidden>
                          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                              <th>N°Entretient</th>
                              <th>Nom Entretenir</th>
                              <th>date</th>
                              <th>Nom materiel</th>
                              <th>delais</th>
                              <th>observation</th>
                              <th>Actions</th>
                              
                             
                              
                            </tr>
                          </thead>
                          <tbody>
                         
                          <?php
                              include '../backend/db.php';
                              include '../backend/affEntretient.php';
                              if ($result->num_rows > 0) {
                               while ($row = $result->fetch_assoc()) {
                                $entretien_date = strtotime($row['date']);
                                $jours_restants = ceil(($entretien_date - time()) / (60 * 60 * 24));   
                                $customId = 'cuf/Entr-';
                                  
                           
                                   
                                   $customId .= sprintf("%02d", $row["idEtr"]); // Ajoutez l'ID incrémenté
                           
                                   echo "<tr idEtr='$customId'>";
                                   echo "<td>" . $customId . "</td>"; // Affichez l'ID personnalisé
                                   echo "<td>" . $row["nomEntretenir"] . "</td>";
                                   echo "<td>" . $row["date"] . "</td>";
                                   echo "<td>" . $row["nomMateriel"] . "</td>";
                                  
                                   if ($jours_restants <= 0) {
                                    echo "<td><div class='circle' style='background-color: red'></div></td>";
                                } elseif ($jours_restants <= 3) {
                                  echo "<td><div class='circle' style='background-color: brown'></div></td>";
                                } elseif ($jours_restants <= 15) {
                                  echo "<td><div class='circle' style='background-color: yellow'></div></td>";
                                } else {
                                  echo "<td><div class='circle' style='background-color: green'></div></td>";
                                }
                                echo "<td>" . $row["observation"] . "</td>";
                                   echo '<td>';
                                   echo '<a id="btn-check"  class="btn btn-success" href="#" data-idEtr='.$row["idEtr"].' ><i class="fa fa-check"></i></a>';
                                  
                                   echo "</tr>";
                               }
                           }
                           
                           
                           
                              ?>

                          
                          </tbody>
                          
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
    $(document).ready(function() {
      $(document).on("click", "#btn-check", function(){
      var idEtr = $(this).attr('data-idEtr');
      

swal("Entrer l'observation de l'entretien:", {
			  content: "input", 
        buttons: true,
			  dangerMode: false,
                          
			}).then((observation) => {
        if(observation==""){
					swal("Action annuler")	
				}else{
        
        
        dt(idEtr);
        observe(idEtr, observation);
        var observation = observation;
      }

      });


 



function dt (idEtr){
  



$.ajax({
          type : "post",
			url : "../backend/updateDate.php",
			data : {
        idEtr: idEtr
      },
							success : function(data) {
                      swal("Success","Entretient avec succées","success");                                     
                                                   
                                                            
                                                            
							},complete: function() {
              
              },
							error : function(data) {
								var notif = data.msg;
								swal("Erreur", notif, "error");
                                                                
							}
						});
          }


          function observe(idEtr, observation) {
            
         
           
            

                if (idEtr !== "" && observation!== "") {
                    $.ajax({
                        type: "POST",
                        url: "../backend/addObservation.php",
                        data: { idEtr: idEtr, observation: observation },
                        success : function(data) {
                      swal("Success","Entretient avec succées","success");    
                                                      
                                               
                                                            
                                                            
							},complete: function() {
              	window.location.assign("entretient.php");
              },
							error : function(data) {
								var notif = data.msg;
								swal("Erreur", notif, "error");
                                                                
							}
                    });
                } else {
                    $("#message").html("Veuillez remplir tous les champs.");
                }
          
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





  </script>


 

  
   <!-- Modal ajout -->
<!-- Button trigger modal -->

 
<div class="modal" tabindex="-1" role="dialog" id="modal1">
   <div class="modal-dialog" role="document">
    <form action="POST" method="post" id="client-form" enctype="multipart/form-data">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title">Affectation matériels</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <label>Nom matériel</label>
         <select  id="materiel" name="materiel" class="form-control" placeholder="Sélectionnez un matériel..."  >
             
          <?php

          include "../backend/db.php";
          include "../backend/afficmat.php";
          if ($result->num_rows > 0) {

       while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["idmat"] . '">' . $row["nomMateriel"] . '</option>';
        }
      }else{
        echo 'erreur';
      }
      ?>
  
        </select><br>
         <label>Nom service</label>
         <select  id="service" name="service" class="form-control" placeholder="Sélectionnez un matériel..."  >
             
          <?php

          include "../backend/db.php";
          include "../backend/afficService.php";
          if ($result->num_rows > 0) {
       while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["idServ"] . '">' . $row["nomServ"] . '</option>';
        }
      }else{
        echo 'erreur';
      }
      ?>
  
        </select><br>
        <input type="text" id="quantite" >
         <label>Quantité matériels affectés</label>
         <input type="text" name="qte" id="qte" class="form-control" placeholder="Entrer le quntité du matériel affecté..."/><br>
        <input type="text" name="date" id="date" >
        </div>
      <div id="nbr" >

      </div>
       <div class="modal-footer">
       <button type="button" class="btn btn-primary" id="btna">Save</button>
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
         <h5 class="modal-title">Affectation matériels</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
        <input type="text" id="idAffect1" hidden>
        <input type="text" id="idMatmod" hidden>
         <label>Nom matériel</label>
         <select name="materiel1" id="materiel1" class="form-control" >

         </select><br>
         <label>Nom service</label>
         <select name="service1" id="service1" class="form-control" >

         </select><br>
        <input type="text" id="quantite1" >
        <input type="text" id="quantite2" >
         <label>Quantité matériels affectés</label>
         <input type="text" name="qte1" id="qte1" class="form-control" placeholder="Entrer le quntité du matériel affecté..."/><br>
        </div>
      <div id="nbr1" >

      </div>
       <div class="modal-footer">
       <input type="hidden" name="nom_id" id="nom_id" />
       <input type="hidden" name="operation" id="operation" />
       <button type="button" class="btn btn-primary" id="btnm">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> 
     </div>
    </form>
   </div>
 </div>

 
	
  </body>
</html>
