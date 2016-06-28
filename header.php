<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php
	      if ( is_single() ) {
	        bloginfo('name'); echo " | "; single_post_title();
	      }elseif ( is_home() || is_front_page() ) {
	        bloginfo('name'); echo ' | ';
	        bloginfo('description');
	      }elseif ( is_page() ) {
	        single_post_title('');
	      }elseif ( is_search() ) {
	        bloginfo('name');
	        echo ' | Search results for ' . wp_specialchars($s);
	      }elseif ( is_404() ) {
	        bloginfo('name');
	        print ' | Not Found';
	      }else {
	        bloginfo('name');
	        wp_title('|');
	      }
      	?>
    </title>

    <?php wp_head() ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <nav id="menu-topo" class="navbar navbar-webpousada">
        <div class="container">
          <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
            &#9776;
          </button>
          <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <a class="navbar-brand" href="#"></a>
            <ul class="nav navbar-nav pull-xs-right">
              <li class="nav-item active">
                <a class="nav-link" href="#">O que fazemos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nossas Soluções</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Exemplo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
