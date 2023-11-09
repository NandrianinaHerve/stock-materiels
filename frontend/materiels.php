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
                  <li ><a href="categorie.php" class=""><i class="fa fa-desktop"></i> Categories </a>
                   
                  </li>
                  <li class="current-page"><a href="materiels.php"><i class="fa fa-briefcase"></i> Materiels </a>
                    
                  </li>
                  <li><a href="affectation.php"><i class="fa fa-expand"></i> Affectations </a>
                  </li>
                  <li ><a href="entretient.php"><i class="fa fa-wrench"></i> Entretient </a>
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
                          <h2>Gestion du stock materil<small>Materiels</small></h2>
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
                                <th>N°materiel</th>
                                <th>Nom materiel</th>
                                <th>categorie</th>
                                <th>quantité </th>
                                <th>date d'entreé </th>
                                <th>Actions</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                       include '../backend/db.php';
                      include '../backend/afficmat.php';
                       
                     
                       
                       if ($result->num_rows > 0) {
                           while ($row = $result->fetch_assoc()) {
                               $customId = ''; // Vous pouvez garder cette partie pour générer un identifiant personnalisé si nécessaire
                               $productName = strtolower($row["nomMateriel"]);
                               $catName = strtolower($row["nomcat"]);

                            

                            if (strpos($productName, 'chaise') !== false) {
                                $customId = 'cuf/chs-';
                            } elseif (strpos($productName, 'table') !== false) {
                                $customId = 'cuf/tab-';
                            } elseif (strpos($productName, 'moto') !== false || strpos($productName, 'voiture') !== false) {
                                $customId = 'cuf/auto-';
                            } elseif (strpos($productName, 'ordinateur portable') !== false || strpos($productName, 'ordinateur de bureau') !== false || strpos($productName, 'imprimente') !== false) {
                                $customId = 'cuf/info-';
                            } else {
                                $customId = 'cuf/autre-';
                            }
                            

        
                   $customId .= sprintf("%04d", $row["idmat"]); // Ajoutez l'ID incrémenté
                   echo "<input type='hidden' name='idcat' value='" . $row["idcat"] . "' />" ;
                    echo "<tr idmat='$customId'>";
                    echo "<td>" . $customId . "</td>"; 
                    echo "<td>" . $row["nomMateriel"] . "</td>";
                   echo "<td>" . $row["nomcat"] . "</td>"; 
                   
                 echo "<td>" . $row["quantite"] . "</td>";
                  echo "<td>" . $row["dateE"] . "</td>";
                  
                
                 
                  echo '<td>';
                  if(strpos($catName, 'informatique') !== false || strpos($catName, 'mobilier') !== false){
                    echo '<button type="button" class="btn btn-primary" id="btn-mod" href="#" data-idmat="'.$row['idmat'].'" data-dateE="'.$row['dateE'].'" data-nomMateriel="'.$row['nomMateriel'].'"data-quantite="'.$row['quantite'].'" data-nomcat="'.$row['nomcat'].'" data-idcat=" '. $row['idcat'] .' "><i class="fa fa-pencil-square-o"></i></button>';
                  
                    echo ' <button class="btn btn-danger" id="btn-sup" href="#" data-idmat="'.$row['idmat'].'"><i class="fa fa-trash"></i>  </button>';
                    echo ' <button class="btn btn-success" href="#" id="btn-etr" data-idmat="'.$row['idmat'].'"><i class="fa fa-cogs"></i>  </button>';
                  }else{
                    echo '<button type="button" class="btn btn-primary" id="btn-mod" href="#" data-idmat="'.$row['idmat'].'" data-dateE="'.$row['dateE'].'" data-nomMateriel="'.$row['nomMateriel'].'"data-quantite="'.$row['quantite'].'" data-nomcat="'.$row['nomcat'].'" data-idcat="'.$row['idcat'].'"><i class="fa fa-pencil-square-o"></i></button>';
                  
                    echo ' <button class="btn btn-danger" id="btn-sup" href="#" data-idmat="'.$row['idmat'].'"><i class="fa fa-trash"></i>  </button>';
                  }
                  
                 
                  
              
                '</td>';

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
          <!-- /top tiles -->

         
          </div>

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
  
 
    
    $(document).on('click', '#btn-etr', function() {
    $('#etrmodal').modal('show');
    var idmat = $(this).attr('data-idmat');

    $("#mat").val(idmat);
    
  });

  $(document).ready(function() {    
  $(document).on("click", "#btnE", function () {
    var idmat = $("#mat").val();
        var nomEntretenir = $("#nomEntretenir").val();
        var date = $("#dt").val(); // Correction : utilisez nomcat1 ici
       
        notif = "Veuillez remplir le(s) champ(s) vide(s)";
        var notif1 = "";
        notif1 = "Enregistrement avec success";
        if (nomEntretenir == "") {
            swal("Erreur", notif, "error");
        } else if (date == "") {
            swal("Erreur", notif, "error");
      
        } else {
          swal("Success", notif1, "success");
         //--------------------------------
       
         var idmat = $("#mat").val();
// Vérifier si l'ID du matériel existe déjà
$.ajax({
    type: "POST",
    url: "../backend/checkIdmat.php",
    data: { idmat: idmat },
    success: function(response) {
        if (response === 'existing') {
            // Afficher une alerte avec SweetAlert2
            swal({
                         title: "déja existe?",
                        text: "Cette Materiels est existe déja dans le table entretien!",
                         icon: "warning",
                         buttons: true,
                           dangerMode: false,
                           })
                           $("#nomEntretenir").val("");
                          $("#dt").val(""); 
                          
            
        } else {
            // Continuer avec l'insertion des données
            var idmat = $("#mat").val();
        var nomEntretenir = $("#nomEntretenir").val();
        var date = $("#dt").val();

            if (idmat !== "" && nomEntretenir !== "" && date !== "") {
                $.ajax({
                    type: "POST",
                    url: "../backend/ajoutEntretient.php",
                    data: { idmat: idmat, nomEntretenir: nomEntretenir, date: date },
                    success: function(response) {
                        // Afficher une alerte de succès
                        swal({
                         title: "Engresistrement",
                        text: "entretien bien enregistre!",
                         icon: "success",
                         buttons: true,
                           dangerMode: false,
                           })
                           window.location.href = "entretient.php";
                    }
                });
            } 
        }
    }
});



          //--------------------------------
        }
     
    });
  });



 
</script>
    <script>
       

        //ajax

        $(document).on("click", "#add_button", function(){
       $('#modal1').modal('show');
       $('#modal1').find('.modal-title').text(" Ajout materiels");
      });

     
   
        $(document).on("click", "#btn-mod", function() {
    $('#modmodal').modal('show');
    var idmat = $(this).attr('data-idmat');
    
    var nomMateriel = $(this).attr('data-nomMateriel');
    var dateE = $(this).attr('data-dateE');
    var quantite = $(this).attr('data-quantite');
    var nomcat = $(this).attr('data-nomcat');
    var idcat = $(this).attr('data-idcat');
    var html = '<option value='+nomcat+'>'+nomcat+'</option>';
        $("#idcat1").val(idcat);
        $("#nomcat1").html(html);
        $("#idmat1").val(idmat);
        $("#nomMateriel1").val(nomMateriel);
        $("#dateE11").val(dateE);
        $("#quantite1").val(quantite);
    

        
});







    





       
   
   
       
        
        //function ajt
        function ajt(){
        var idcat = $("#idcat").val();
        var nomMateriel = $("#nomMateriel").val();
        var nomcat = $("#nomcat").val();
        var quantite = $("#quantite").val();
        var dateE = $("#dateE").val();
        $.ajax({
          type : "post",
			url : "../backend/ajoutmat.php", 
      dataType: "json",
      data: {
        idcat:idcat,
        nomMateriel:nomMateriel,
        nomcat:nomcat,
        quantite:quantite,
        dateE:dateE
      },
			success : function(data) {
        $('#nomMateriel').val("");
        $('#nomcat').val("");
        $('#quantite').val("");
        $('#dateE').val("");
        swal("Success", "Enregistrement avec success", "success");
			},
			complete : function(){
        window.location.href = "materiels.php";
			},
			error : function(data) {
				var notif = data.msg;
			}
        });
      }

       //function modifier
       function modifier() {
  
      var idmat1=$("#idmat1").val();

      var idcat1 = $("#idcat1").val();
       var nomMateriel1= $("#nomMateriel1").val();
       var dateE11= $("#dateE11").val();
       var quantite1= $("#quantite1").val();
        $.ajax({
			type : "post",
			url : "../backend/modifiermat.php", 
      dataType: "json",
      data: {
        idcat1:idcat1,
        nomMateriel1:nomMateriel1,
        quantite1:quantite1,
        dateE11:dateE11,
        idmat1:idmat1
      },
			success : function(data) {
       
			},
			complete : function(){
        window.location.assign("materiels.php"); 
			},
			error : function(data) {
				var notif = data.msg;
			}
		});
    }

        //funtion supprimer

      function supprimer(idmat) {
  
  $.ajax({
    type : "post",
    url : "../backend/supprimermat.php", 
    dataType: "json",
    data: {
      idmat:idmat
    },
    success : function(data) {
      
    },
    complete : function(){
      window.location.href = "materiels.php";
    },
    error : function(data) {
      var notif = data.msg;
    }
  });
  
    }




      $(document).ready(function(){
        
           
        
    $(document).on("click", "#btna", function () {
        var nomMateriel = $("#nomMateriel").val();
        var nomcat = $("#nomcat").val(); // Correction : utilisez nomcat1 ici
        var quantite = $("#quantite").val();
        var dateE = $("#dateE").val();
        var notif = "";
        notif = "Veuillez remplir le(s) champ(s) vide(s)";
        var notif1 = "";
        notif1 = "Enregistrement avec success";
        if (nomMateriel == "") {
            swal("Erreur", notif, "error");
        } else if (nomcat == "") {
            swal("Erreur", notif, "error");
        } else if (quantite == "") {
            swal("Erreur", notif, "error");
        } else if (dateE == "") {
            swal("Erreur", notif, "error");
        } else {
          swal("Success", notif1, "success");
           ajt();
        }
    });


 
    $(document).on("click", "#btnm", function(){
      var nomcat1= $("#nomcat1").val();
      var idmat1=$("#idmat1").val();
       var nomMateriel1= $("#nomMateriel1").val();
       var dateE11= $("#dateE11").val();
       var quantite1= $("#quantite1").val();
    var notif = "";
        notif ="Veuillez remplir le(s) champ(s) vide(s)";
        if(nomcat1 == ""){
            swal("Erreur", notif, "error");
        }else if(nomMateriel1 == "") {
            swal("Erreur", notif, "error");
        }
        else if(dateE11 == "") {
            swal("Erreur", notif, "error");
        }
        else if(quantite1 == "") {
            swal("Erreur", notif, "error");
        }else{
          swal("Modification avec success","","success");
          modifier();
            
        }

	});
  $(document).on("click", "#btn-sup", function(){
	    	var idmat = $(this).attr("data-idmat");
         var notif="";
                notif="Suppresion avec success"
                swal({
			  title: "Etes-vous sur?",
			  text: "de vouloir supprimer cet materiels,l'action est irreversible!",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
            .then((result) => {
                    if (result) {
                        swal("Success", notif, "success");
			    supprimer(idmat);
      
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
  
       




        //test
      
//recuperation de l'idcat

     function displayId() {
        var select = document.getElementById("nomcat");
        var selectedOption = select.options[select.selectedIndex];
        var idcatInput = document.getElementById("idcat");

        // Remplir l'input avec l'ID de la catégorie sélectionnée
        idcatInput.value = selectedOption.value;
    }
//recuperation de l'idcatmod

function displayIdmod() {
        var select = document.getElementById("nomcat1");
        var selectedOption = select.options[select.selectedIndex];
        var idcatInput = document.getElementById("idcat1");

        // Remplir l'input avec l'ID de la catégorie sélectionnée
        idcatInput.value = selectedOption.value;
    }

  
    </script>


    <!-- modal ajt -->

<div class="modal" tabindex="-1" role="dialog" id="modal1">
    <div class="modal-dialog" role="document">
     <form>
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ajout de categorie</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label>Nom materiel</label>
          <input type="text"  id="nomMateriel" name="nomMateriel" class="form-control" placeholder="Entrer le materiel categorie..."/><br>
          
          <label>categorie</label>
          
          
          <select  id="nomcat" name="nomcat" class="form-control" placeholder="Sélectionnez une catégorie..." onchange="displayId()">
             
          <option value="0">Sélectionnez une catégorie</option>
          <?php

          include "../backend/db.php";
          include "../backend/afficCategorie.php";
          if ($result->num_rows > 0) {
       while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["idcat"] . '">' . $row["nomcat"] . '</option>';
        }
      }else{
        echo 'erreur';
      }
      ?>
  
        </select><br>
       
       <input type="text" id="idcat" name="idcat" readonly hidden>
       
        <label>quantité</label>
          <input type="text" name="quantite" id="quantite" class="form-control" placeholder="Entrer le quantité du materiel..."/><br>
          <label>date d'entré</label>
          <input type="date" name="dateE" id="dateE" class="form-control"/><br>
         
        </div>
       
        <div class="modal-footer">
        <input type="hidden" name="nom_id" id="nom_id" />
        <input type="hidden" name="operation" id="operation" />
        <button type="button" class="btn btn-primary" id="btna">Save</button>
         <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div> 
      </div>
     </form>
    </div>
  </div>


    <!-- Modal mod -->

 

  <div class="modal" tabindex="-1" role="dialog" id="modmodal">
    <div class="modal-dialog" role="document">
     <form action="POST" method="post" id="client-form" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ajout de materiel</h5>
          <input type="text" id="idmat1" name="idmat1" hidden><br><br>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label>Nom materiel</label>
          <input type="text" readonly  id="nomMateriel1" name="nomMateriel1" class="form-control" placeholder="Entrer le materiel categorie..."/><br>
          
          <label>categorie</label>
          
          
          <select  id="nomcat1" name="nomcat1" class="form-control" placeholder="Sélectionnez une catégorie..."  onchange= "displayIdmod()" >
             
         

  
        </select><br>
       
       <input type="text" id="idcat1" name="idcat1" readonly hidden >
       
        <label>quantité</label>
          <input type="text" name="quantite1" id="quantite1" class="form-control" placeholder="Entrer le quantité du materiel..."/><br>
          <label>date d'entré</label>
          <input type="date" name="dateE11" id="dateE11" class="form-control"/><br>
          <label>date d'entré</label>
         
        </div>
       
        <div class="modal-footer">
        <input type="hidden" name="nom_id" id="nom_id" />
        <input type="hidden" name="operation" id="operation" />
        <button type="button" class="btn btn-primary"   id="btnm">Save</button>
         <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>

       </div> 
      </div>
     </form>
    </div>
  </div>

  <!-- Modal etr -->

 

  <div class="modal" tabindex="-1" role="dialog" id="etrmodal">
    <div class="modal-dialog" role="document">
     <form >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Entretenir cette materiel</h5>
         
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" id="mat" hidden>
          <label>Nom Entretenir</label>
          <input type="text"  id="nomEntretenir" name="nomEntretenir" class="form-control" placeholder="Entrer le nom de l' Entretenir..."/><br>
        <label>Date Entretient</label>
          <input type="date" name="dt" id="dt" class="form-control" placeholder="Entrer la date de l'entretient..."/><br>
          
         
        </div>
       
        <div class="modal-footer">
        
        <button type="button" class="btn btn-primary"   id="btnE">Save</button>
         <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>

       </div> 
      </div>
     </form>
    </div>
  </div>

  </body>
</html>
 
