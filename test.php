 <html>  
   <title></title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    	<?php 
   	include 'ConnexionBD.php' ;
   		$bdd = ConnexionBD::getInstance();

		$req = $bdd->prepare('SELECT * FROM evennement');
		$req->execute();

		$events = $req->fetchAll(PDO::FETCH_NUM);
   	 ?>
   <body id="page-top">



   	<link href="css/agency.min.css" rel="stylesheet">
   	 <section class="bg-light" id="portfolio">
      <div class="container">
      	<div class="row">
        <?php 
        	foreach($events as $event) { 
        		
         ?>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo($event[4]); ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4><?php echo($event[1]); ?></h4>
              <p class="text-muted"> <?php echo($event[2]); ?></p>
            </div>
          </div>
       <?php 
        }
         ?>
     </div>
       </div>
  </section>
</body>



</html>

