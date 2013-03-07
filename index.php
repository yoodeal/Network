<?php
	//controllo che la lingua sia settata e che esista il file di traduzione, minimo controllo per local inclusion
	$lang = (isset($_GET['lang']) && file_exists('lang/' . $_GET['lang'] . '.php')) ? $_GET['lang'] : 'it';
	$lang = include('lang/' . $lang . '.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title><?=$lang['head']['title']?></title>
  <!-- META -->
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="<?=$lang['head']['description']?>" />
  <meta name="keywords" content="" />
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" /> 
  <!--[if lt IE 8]>
  <script src="js/ie7.js"></script>
  <![endif]-->
  <!--[if lt IE 9]>
  <script src="js/html5.js"></script>
  <![endif]-->
</head>
<body>
  <header>
    <div class="wrap">
      <nav class="language-nav">
        <a href="/" class="it"></a>
        <a href="/en" class="uk"></a>
        <a href="/br" class="br"></a>
      </nav>
    </div> <!-- /wrap -->
  </header>

  <section class="main-content">
    <div class="wrap">
      <div class="landing-page-main-content">
        <img class="logo" src="img/logo-landing.png" alt="yoodeal" />

        <h1><?=$lang['body']['main']?></h1>
        <p><?=$lang['body']['main.description']?></p>

        <!-- i've created links here, but you can safety replace <a> tag to <span> (keeping class attribute) -->
        <div>
          <a href="" class="feature"><img src="img/confronta.jpg" alt="" /><?=$lang['body']['img.compare']?></a>
          <a href="" class="feature"><img src="img/analizza.jpg" alt="" /><?=$lang['body']['img.analyzes']?></a>
          <a href="" class="feature"><img src="img/capisce.jpg" alt="" /><?=$lang['body']['img.understand']?></a>
          <div class="clear"></div>
        </div>
        <p></p>
        <p class="space-before"><?=$lang['body']['semantic']?></p>

        <ul class="categories-list">
          <!-- i've created links here, but you can safety replace <a> tag to <span> (keeping class attribute) -->
          <li class="food"><span><?=$lang['body']['cat']['dining']?></span></li>
          <li class="wellness"><span><?=$lang['body']['cat']['wellness']?></span></li>
          <li class="services"><span><?=$lang['body']['cat']['services']?></span></li>
          <li class="technology"><span><?=$lang['body']['cat']['technology']?></span></li>
          <li class="shopping"><span><?=$lang['body']['cat']['shopping']?></span></li>
          <li class="vacations"><span><?=$lang['body']['cat']['travel']?></span></li>
          <li class="time-off"><span><?=$lang['body']['cat']['activities']?></span></li>
        </ul>
        <h2><?=$lang['body']['discover']?></h2>
      </div>

      <div class="col2">
        <h3><?=$lang['body']['languages']?></h3>
        <ul class="international-list">
          <li class="it"><span class="country">Italia</span> - <a href="http://www.yoodeal.it">www.yoodeal.it</a></li>
          <li class="uk"><span class="country">United Kingdom</span> - <a href="http://www.yoodeal.co.uk">www.yoodeal.co.uk</a></li>
          <li class="us"><span class="country">U.S.A.</span> - <a href="http://www.yoodeal.com">www.yoodeal.com</a></li>
          <li class="es"><span class="country">España</span> - <a href="http://www.yoodeal.es">www.yoodeal.es</a></li>
          <li class="br"><span class="country">Brasil</span> - <a href="http://www.yoodeal.com.br">www.yoodeal.com.br</a></li>
        </ul>
        <h3 class="gray">Seguici:</h3>
        <div class="social-links">
          <a href="<?=$lang['body']['url']['facebook']?>" class="facebook"></a>
          <a href="<?=$lang['body']['url']['twitter']?>" class="twitter"></a>
        </div>
      </div>
      <div class="col2 contact-form">
        <h3><?=$lang['body']['contact.form']['title']?></h3>
        <form method="post" action=".">
          <div class="form-line"><input type="text" name="name" value="" class="required" placeholder="<?=$lang['body']['contact.form']['name']?>" /></div>
          <div class="form-line"><input type="text" name="email" value="" class="required email" placeholder="<?=$lang['body']['contact.form']['email']?>" /></div>
          <div class="form-line"><textarea name="message" class="required" placeholder="<?=$lang['body']['contact.form']['text']?>"></textarea></div>
          <div class="form-line"><input type="checkbox" name="agreement" class="required" value="1" id="contact_agree" />
          <label for="contact_agree"><?=$lang['body']['contact.form']['privacy']?></label></div>
          <div class="form-line"><input type="submit" value="" /></div>
        </form>
      </div>
      <div class="clear"></div>
      
    </div> <!-- /wrap -->
  </section>

  <footer>
    <div class="wrap">
      <p id="copyright">&copy; 2012 Yoodeal Ltd. etc.etc.</p>
    </div>  <!-- wrap -->
  </footer>

  <!-- JAVASCRIPT -->
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script type="text/javascript">window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="js/jquery.customInput.js"></script>
  <script type="text/javascript" src="js/placeholder.jquery.min.js"></script>  
  <script type="text/javascript" src="js/script.js"></script>

</body>
</html>