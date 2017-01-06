<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
  <div class="page-container">
      <!--[if lt IE 7]>
        <p class="chromeframe">Käytät <strong>vanhentunutta</strong> selainta. Ole hyvä ja <a href="http://browsehappy.com/">päivitä selaimesi</a> tai <a href="http://www.google.com/chromeframe/?redirect=true">käytä Google Chrome Frame</a> parantaaksesi käyttökokemuksiasi.</p>
      <![endif]-->
  <?php
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="container main-container">
      <!-- header-row -->
      <div class="row">
        <div class="span8 logo">
          <!-- <h1>Lanttu:ry</h1> -->
          <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/lanttu.png" alt="Lanttu ry">
        </div>
        <div class="span4 hidden-phone">
          <!--Matias-->
          <div class="matias">
          </div>
        </div>
      </div>
      <!-- /header-row -->
      <!-- content-row -->
      <div class="row content-container">
        <div class="span12 no-margin no-padding">
          <!-- carousel -->
          <div class="row carousel slide hidden-phone">
            <!-- carousel-item -->
            <div class="span12 carousel-content">
              
              <div class="item active">
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/banneri01.jpg" alt=""/>
              </div>
              <div class="item">
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/banneri02.jpg" alt=""/>
              </div>
              <div class="item">
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/banneri03.jpg" alt=""/>
              </div>
            </div>
            
            <div class="span3 carousel-description">
              <div class="d-item active">"Kaikki lähti siitä, kun joskus 2002 Assemblyjen jälkeen haluttiin järjestää itse jotain samanlaista"<br />-Joona-</div>
              <div class="d-item">"Kuha pelaa CS:GO"<br />-Kuha-</div>
              <div class="d-item">"On kiva seurata tapahtuman ja organisaation kehittymistä, siitä saa lisää virtaa tähän hommaan"<br />-Joni-</div>      
            </div>
            <!-- /carousel-item -->
          </div>
          <!-- /carousel -->
          <!-- main-content-row -->
          <div class="row">
            <!-- blog -->
            <div class="span9 blog-container <?php echo roots_main_class(); ?>">
                <?php include roots_template_path(); ?>
              <div class="spacer">
              </div>
            </div>
            <!-- /blog -->
            <!-- orange-placeholder -->
            <div class="span3 orange-span hidden-phone">
            </div>
          </div>
          <!-- /main-content-row -->
        </div>
      </div>
      <!-- /content-row -->
    </div><!-- /container -->
    <?php get_template_part('templates/footer'); ?>
    </div>
</body>
</html>
