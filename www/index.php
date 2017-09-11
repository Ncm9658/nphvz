<?php

  $page_title = 'Home';
  $require_login = false;
  require '../knoopvszombies.ini.php';

  require 'module/includes.php';
  
  require 'module/general.php';

  if ($GLOBALS['state'])
    $playerCounts = $GLOBALS['Game']->GetBrokenDownPlayerCount($GLOBALS['state']['gid']);
  else
    $playerCounts = array();
    
  if (isset($_GET['action']))
  {
    if ($_GET['action'] == 'hidepost')
    {
    
      if (isset($_GET['target']) && (isset($_SESSION) && $_SESSION['admin'] && $GLOBALS['Misc']->StringWithin('email', $_SESSION['privileges'])))
      {
        $GLOBALS['Wall']->HidePost($_GET['target']);
        $GLOBALS['Cache']->RemoveFromCache('recent_posts');
        $GLOBALS['Wall']->GenerateWallCache($_GET['action']);
      }
    
    }
  }
    
?>

<!DOCTYPE html>


<html>

<head>
  <?php
    require 'module/html_head.php';
  ?>
  
  <link href="//<?php echo DOMAIN; ?>/css/countdown.css" rel="stylesheet" type="text/css"/>
  <link href="//<?php echo DOMAIN; ?>/css/page/index.css" rel="stylesheet" type="text/css"/>
  
</head>

<body>
  
    <?php
      require 'module/header.php';
    ?>

  <div id="body_container">
  
    <div class="content_column">
      <div id="content">
        
        <div id="content_top_border">

            <?php
              require 'module/body_header.php';
            ?>
    
        </div>

        <div id="body_content">

          <?php 
            if ($GLOBALS['state'] && $GLOBALS['state']['countdown'] && $GLOBALS['state']['start_time'] != 0 && $GLOBALS['state']['start_time'] != '')
            {
              require 'module/countdown.php';
            }
          ?>

          <?php 
            if ($imp_post = $GLOBALS['Cache']->GetFromCache('recent_posts_imp', $Seconds=0, $IsObject=true)) {
              require 'module/index_imp.php';
            }
          ?>
      
          <?php if (!$_SESSION): ?>
          <div id="whatis_container">
            <div id="whatis_titles">
              <div id="whatis_title">
                <p>What is Humans vs Zombies?</p>  
              </div>
              <div id="whatis_subtitle">
                <p align="right">HvZ is a campus-wide game of tag with Nerf&trade; blasters.</p>
              </div>
              <div style="clear: both;"></div>
            </div>
            <div id="whatis_columns">
              <div class="whatis_col">
                <p class="whatis_text">
                  <img src="img/bullet-1.png" class="whatis_bullet">
                  All players start by <a href="/signup.php" class="highlight" target="blank">registering here</a>, where your score and status are tracked.
                </p>
                <div class="clearfix"></div>
                <img src="img/infoC-01.png" class="whatis_graphic">
              </div>
              <div class="whatis_col">
                <p class="whatis_text">
                  <img src="img/bullet-2.png" class="whatis_bullet">
                  All players begin as a Human except </br> for one, who is the <span class="highlight">Original Zombie</span>.
                </p>
                <div class="clearfix"></div>
                <img src="img/infoC-02.png" class="whatis_graphic">
              </div>
              <div class="whatis_col">
                <p class="whatis_text">
                  <img src="img/bullet-3.png" class="whatis_bullet">
                  Zombies can <span class="highlight">tag</span> Humans with their hands, which turns them into a Zombie.
                </p>
                <div class="clearfix"></div> 
                <img src="img/infoC-03.png" class="whatis_graphic"> 
              </div>
              <div class="whatis_col">
                <p class="whatis_text">
                  <img src="img/bullet-4.png" class="whatis_bullet">
                  Humans are able to <span class="highlight">stun</span> the Zombies with Nerf&trade; blasters or balled-up socks.
                </p>
                <div class="clearfix"></div>
                <img src="img/infoC-04.png" class="whatis_graphic">
              </div>
            </div><!--whatis_columns-->
            <div class="clearfix"></div>
          </div><!--whatis_container-->
          <?php endif ?>

          <div id="flickr_container">
            <div style="width:960px;height:640px;text-align:center;margin:auto;" >
              <object width="960" height="640" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"> 
                <param name="flashvars" value="offsite=true&amp;lang=en-us&amp;page_show_url=%2Fphotos%2Fnphvz%2Falbums%2F72157651444909556%2Fshow&amp;page_show_back_url=%2Fphotos%2Fnphvz%2Falbums%2F72157651444909556%2F&amp;user_id=127532559@N02" /> 
                <param name="allowFullScreen" value="true" /> 
                <param name="src" value="https://www.flickr.com/apps/slideshow/show.swf?v=71649" /> 
                <embed width="960" height="640" type="application/x-shockwave-flash" src="https://www.flickr.com/apps/slideshow/show.swf?v=71649" flashvars="offsite=true&amp;lang=en-us&amp;page_show_url=%2Fphotos%2Fnphvz%2Falbums%2F72157651444909556%2Fshow&amp;page_show_back_url=%2Fphotos%2Fnphvz%2Falbums%2F72157651444909556%2F&amp;user_id=127532559@N02" allowFullScreen="true" /> 
              </object>
              <br />
              <small>Created with <a href="http://www.flickrslideshow.com">flickr slideshow</a>.</small>
            </div>
          </div>

          <div id="content_column_container">
            <div id="column_left">
              <div id="whatis_title">
                <p>Join Our Latest Game:</p>  
              </div>
              <a href="/joingame"><img style="max-width:100%; height:500px; margin:50px 8% 0px 75px;" src="/img/posters/poster-s16.png"/></a>
            </div>
            <div id="column_right">
              <div class="page_post_container">
                <?php           
                  require 'module/page_posts.php';
                ?>
              </div>
            </div>
            <div class="clearfix"></div>
          </div><!-- column_container -->
          
          <div class="clearfix"></div>
          
        </div> <!-- bod_content -->     
        

      </div> <!-- content -->
    </div>  <!-- content_column -->
    
    
    <div id="footer_push"></div>
  </div> <!-- body_container -->

  <?php
    require 'module/footer.php';
  ?>


</body>

</html>