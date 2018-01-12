    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/insc.css">
    	

      <?php 
   	include 'classes/ConnexionBD.php' ;
   		$bdd = ConnexionBD::getInstance();

		$req = $bdd->prepare('SELECT * FROM evennement order by date desc');
		$req->execute();

		$events = $req->fetchAll(PDO::FETCH_NUM);
   	 ?>
   <body id="page-top">
   	<link href="../css/agency.min.css" rel="stylesheet">
   	 <section class="bg-light" id="portfolio">
      <div class="container">
      	<div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">événnements</h2>
            <h3 class="section-subheading text-muted">Nos évennements</h3>
          </div>
        </div>
      	<div class="row">
        <?php 
            $i = 0 ;
        	foreach($events as $event) { 
        		
         ?>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?php echo($i) ?>">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/evennements/<?php echo($event[4]); ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4><?php echo($event[1]); ?></h4>
              <p class="text-muted"> <?php echo($event[2]); ?></p>
            </div>
          </div>
       <?php
       $i++; 
        }
          
         ?>
     </div>
   </div>
  </section>


    <?php 
        
          $i = 0 ;
          foreach($events as $event) { 
     ?>



     <div class="portfolio-modal modal fade" id="portfolioModal<?php echo($i) ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"><?php echo($event[1]); ?></h2>
                  <img class="img-fluid d-block mx-auto" src="img/evennements/<?php echo($event[4]); ?>" alt="">
                  <p><?php echo($event[5]); ?></p>
                  <ul class="list-inline">
                    <li>Date: <?php echo($event[2]); ?></li>
                    <li>Duree: <?php echo($event[3]); ?></li>
                    <li>Lieu: <?php echo($event[6]); ?></li>
                  </ul>
                                    
                    <br><br>


                     <div class="row main" style="padding-left: 6cm;">
        <div class="panel-heading">
              </div> 
        <div class="main-login main-center">
          <form class="form-horizontal" method="post" action="#">

             <input name="txt_id" type="hidden" value="<?php echo($event[0]); ?>" >
            <div class="form-group">
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="txt_nom" id="name"  placeholder="Nom"/>
                </div>
              </div>
              </div>


               <div class="form-group">
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="username" id="username"  placeholder="Prenom"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="txt_mail" id="email"  placeholder="email"/>
                </div>
              </div>
            </div>

           
            <div class="form-group ">
              <button type="button" class="btn btn-primary btn-lg btn-block login-button">S'inscrire</button>
            </div>
          </form>
        </div>
      </div>

      <br><br>

        <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Fermer</button>

                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <?php 
      $i++;
        }
     ?>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/agency.min.js"></script>

</body>



</html>