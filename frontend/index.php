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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

 
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
                  <li class="current-page"><a href="#" ><i class="fa fa-bar-chart"></i> Tableau de bord </a>
                    
                  </li>
                  <li ><a href="services.php" class=""><i class="fa fa-users"></i> services </a>
                    
                  </li>
                  <li><a href="categorie.php" class=""><i class="fa fa-desktop"></i> Categories </a>
                   
                  </li>
                  <li><a  href="materiels.php" class=""><i class="fa fa-briefcase"></i> Materiels </a>
                    
                  </li>
                  <li><a href="affectation.php"><i class="fa fa-expand"></i> Affectations </a>
                  </li>
                  <li><a href="entretient.php"><i class="fa fa-wrench"></i> Entretient </a>
                  </li>
                  <li id="btndec"><a ><i class="fa fa-power-off"></i>Deconnexion</a>
                   
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

     <?php include "../backend/db.php" ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Utilisateurs</span>
              <?php
              $total_usere_querry="SELECT * from user";
              $total_usere_querry_run=mysqli_query($conn, $total_usere_querry);

              if($total_usere = mysqli_num_rows($total_usere_querry_run)){
                echo '<div class="count">'.$total_usere.'</div>';

              }else{
                 echo '<div class="count">NO data</div>';

              }
              
              
              
              
              
              
              
              ?>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>

            <!--service -->
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-users"></i> Total Services</span>

              <!--ato ni code php -->

              <?php
              $total_service_querry="SELECT * from service";
              $total_service_querry_run=mysqli_query($conn, $total_service_querry);

              if($total_service = mysqli_num_rows($total_service_querry_run)){
                echo '<div class="count">'.$total_service.'</div>';

              }else{
                 echo '<div class="count">NO data</div>';

              }
              
              
              
              
              
              
              
              ?>
              
              
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>

            <!--Categorie -->
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-desktop"></i> Total Categorie</span>
             <?php
              $total_categorie_querry="SELECT * from categorie";
              $total_categorie_querry_run=mysqli_query($conn, $total_categorie_querry);

              if($total_categorie = mysqli_num_rows($total_categorie_querry_run)){
                echo '<div class="count">'.$total_categorie.'</div>';

              }else{
                 echo '<div class="count">NO data</div>';

              }
              
              
              
              
              
              
              
              ?>
              
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>


              <!-- Materiel-->
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-briefcase"></i> Total Materiels</span>
              <?php
              $total_materiel_querry="SELECT * from materiels";
              $total_materiel_querry_run=mysqli_query($conn, $total_materiel_querry);

              if($total_materiel = mysqli_num_rows($total_materiel_querry_run)){
                echo '<div class="count">'.$total_materiel.'</div>';

              }else{
                 echo '<div class="count">NO data</div>';

              }
              
              
              
              
              
              
              
              ?>

              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>




                   <!-- Affectation-->

            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-expand"></i> Total Affectations</span>
              <?php
              $total_affectation_querry="SELECT * from affectation";
              $total_affectation_querry_run=mysqli_query($conn, $total_affectation_querry);

              if($total_affectation = mysqli_num_rows($total_affectation_querry_run)){
                echo '<div class="count">'.$total_affectation.'</div>';

              }else{
                 echo '<div class="count">NO data</div>';

              }
              
              
              
              
              
              
              
              ?>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>


             <!-- entretien-->
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-wrench"></i> Total Entretiens</span>
              <?php
              $total_entretien_querry="SELECT * from entretien";
              $total_entretien_querry_run=mysqli_query($conn, $total_entretien_querry);

              if($total_entretien = mysqli_num_rows($total_entretien_querry_run)){
                echo '<div class="count">'.$total_entretien.'</div>';

              }else{
                 echo '<div class="count">NO data</div>';

              }
              
              
              
              
              
              
              
              ?>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
        </div>
          <!-- /top tiles -->


          <!-- graphe -->

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Graphe <small>Pour Suivre le nombre de materiels</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 " style="height: 500px;">
                <div id="graph" style="width: 1000px" ></div>
                </div>
               
    
                  
                <?php
// Connexion à la base de données
$mysqli = new mysqli("localhost", "root", "", "stage");

if ($mysqli->connect_error) {
    die("La connexion a échoué : " . $mysqli->connect_error);
}

// Exécutez une requête SQL pour récupérer les données
$result = $mysqli->query("SELECT nomMateriel, quantite FROM materiels");

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Formatage des données en JSON
$json_data = json_encode($data);

// Fermeture de la connexion à la base de données
$mysqli->close();
?>

               
             
          

          </div>
         </div>
          </div>
        </div>


          
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


    
     <script>
        $(document).ready(function() {
    var jsonData = <?php echo $json_data; ?>; // Récupération des données JSON depuis PHP

    // Configuration du graphique en barres
    Morris.Bar({
        element: 'graph',
        data: jsonData,
        xkey: 'nomMateriel', // Utiliser la colonne "nomMateriel" comme axe X
        ykeys: ['quantite'], // L'axe Y avec les noms de matériel
        labels: ['quantite'] // Étiquettes de l'axe Y
    });
});

$(document).ready(function() {

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
<script src="js/sweetalert.min.js"></script>

    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>

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
	
  </body>
</html>
