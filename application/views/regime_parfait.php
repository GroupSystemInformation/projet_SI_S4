<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>regime_parfait</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet')?>">


    <!-- Additional CSS Files -->
    <?php echo base_url('assets/css/bootstrap.min.css')?>"
    <link rel="stylesheet" href=" <?php echo base_url('assets/css/fontawesome.css')?>">
    <link rel="stylesheet" href=" <?php echo base_url('assets/css/templatemo-edu-meeting.css')?>">
    <link rel="stylesheet" href=" <?php echo base_url('assets/css/owl.css')?>">
    <link rel="stylesheet" href=" <?php echo base_url('assets/css/lightbox.css')?>">
  </head>

<body>


 

  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                
                <img src="<?php echo base_url('assets/images/aliment2.jpg')?>" alt="" style="width: 550px; height: 500px; margin-top: -20px; border-radius: 20px;">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                
                <img src="<?php echo base_url('assets/images/aliment3.jpg')?>" alt="" style="width: 550px; height: 500px; margin-top: -20px; border-radius: 20px;">
                
              </div>
            </div>
          </div>
        </div>
        <?php foreach ($regime as $regime) : ?>
            <div class="col-lg-6">
              <div class="accordions is-first-expanded">
                <article class="accordion">
                    <div class="nomregime" style="display: inline-flex;">
                      <div class="accordion-head">
                        <span>Nom du régime: <?php echo $regime->nom_regime?></span>
                    </div>
                    <div class="main-button-yellow" style="margin-left: 30px;">
                      <div class="scroll-to-section"><a  style="margin-left: 40px;" href="#contact">Exporter pdf</a></div>
                    </div>
                    </div>
                </article>
                <article class="accordion">
                    <div class="accordion-head">
                        <span>Notice</span>
                    </div>
                    <div class="content">
                      <p>Toutes les aliments offerts ne doivent pas suivre le jour dessigné pour etre consommés,mais les aliments qui ont été mangés une fois ne peuvent pas etre mangés à nouveau pendant une semaine.
                        Toutes les aliments offerts ne doivent pas suivre le jour dessigné pour etre consommés,mais les aliments qui ont été mangés une fois ne peuvent pas etre mangés à nouveau pendant une semaine.
                      </p>
                      <h6> Durée du régime: <?php echo $regime->duree_jour?>jours</h6>
                    </div>
                    
                </article>
                <article class="accordion">
                    <div class="accordion-head">
                        <span>Répas Proposé</span>
                        
                    </div>
                    
                        <div class="content">
                        <div class="jour">
                          <div class="prem" style="display: inline-flex;">
                            <h5 style="margin-left: 20px;">Jour</h5>
                          <h5 style="padding-left: 100px;">Répas</h5>
                          </div>
                          
                          <hr>
                          <?php foreach ($repas as $repa) :?>
                          
                            <?php foreach ($repa as $item) :?>
                          <div class="jour">
                              <div class="deux" style="display: inline-flex;">
                                <h6>Jour <?php echo $item->jour; ?></h6>
                                  <ul>
                                    <?php if ($item->id_regime === $regime->id_regime) : ?>
                                        <li>matin: <?php echo $item->matin; ?></li>
                                        <li>midi: <?php echo $item->apres_midi; ?></li>
                                        <li>soir: <?php echo $item->soir; ?></li>
                                    <?php endif; ?>
                                    </ul>
                                      
                              </div>
                              <?php endforeach; ?>
                              <?php endforeach; ?>
                            <hr>
                            
                </article>
                <article class="accordion last-accordion">
                    <div class="accordion-head">
                        <span>Sport proposé</span>
                    </div>
                    <div class="content">

                    <?php foreach ($sport as $sp) : ?>
                        <?php foreach ($sp as $item) : ?>
                            <?php if ($item->id_regime === $regime->id_regime) : ?>
                              <p><?php echo $item->nom_sport; ?>: <?php echo $item->duree_heure_jour; ?>h/jours </p>
                            <?php endif; ?>
                        <?php endforeach; ?>  
                    <?php endforeach; ?>

                    </div>
                </article>

                <article class="accordion last-accordion">
                  <div class="accordion-head">
                      <span>prix</span>
                      
                  </div>
                  
                      <div class="content">
                          <p>Nous pouvons vous livrer ce régime à un prix de <?php echo $regime->prix?>Ar</p>

                      </div>
                  
              </article>
              <div class="commander" style="display: inline-flex;margin-top: 40px;margin-left: 100px;">
                    <div class="main-button-red">
                      <div class="scroll-to-section"><a href="#contact">Commander</a></div>
                    </div>
                    <div class="main-button-yellow" style="margin-left: 30px;">
                      <div class="scroll-to-section"><a href="#contact">Non!Merci</a></div>
                    </div>
              </div>
            </div> 
        <?php endforeach; ?>
        
        </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
   
</body>

</body>
</html>

    



    


    