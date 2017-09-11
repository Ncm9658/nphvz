<?php
  $account_complete = $GLOBALS['User']->AccountComplete();
?>

<div id="header_spacer">
<div id="header_container">
  <div class="content_column">  
  
    <a class="logo" href="http://<?php echo DOMAIN;?>">
      <img class="logo" src="http://<?php echo DOMAIN; ?>/img/header-logo.png">
    </a>
    
    <div id="body_header_nav_container">

      <?php if ($_SESSION && $_SESSION['admin']): ?>
      <span class="body_header_nav_option">
        <a class="body_header_navigation" href="http://<?php echo DOMAIN; ?>/admin">Admin</a>
      </span>
      <?php endif ?>

      <?php if ($_SESSION && !$GLOBALS['User']->IsPlayingCurrentGame($_SESSION['uid']) && $account_complete): ?>
      <span class="body_header_nav_option">
        <a class="body_header_navigation" href="http://<?php echo DOMAIN; ?>/joingame">Join a Game</a>
      </span>
      <?php endif ?>

      <?php if ($GLOBALS['state'] && !$GLOBALS['state']['active'] && (!$GLOBALS['state']['archive'])): ?>
      <span class="body_header_nav_option">
        <a class="body_header_navigation" href="http://<?php echo DOMAIN; ?>/orientations">GI Meetings</a>
      </span>
      <?php endif ?>
      
      <?php 
        //if (
        //$GLOBALS['state'] && $GLOBALS['state']['active'] && $_SESSION && $GLOBALS['User']->IsPlayingCurrentGame($_SESSION['uid']) && $account_complete): 
        
        //Temp Fix. 3.25.2015

        $user_game = $GLOBALS['User']->GetUserFromGame($_SESSION['uid'], $GLOBALS['state']['gid']);
        if ($user_game['status'] == 'zombie' || $user_game['oz']):


      ?>
      <span class="body_header_nav_option">
        <a class="body_header_navigation" href="http://<?php echo DOMAIN; ?>/report">Report a Kill</a>
      </span>
      <?php endif ?>
      
      <?php if ($GLOBALS['state']): ?>
      <span class="body_header_nav_option">
        <a class="body_header_navigation" href="http://<?php echo DOMAIN; ?>/playerlist">Player List</a>
      </span>
      <?php endif ?>
      
      <?php if (!$_SESSION): ?>
      <span class="body_header_nav_option">
        <a class="body_header_navigation" href="http://<?php echo DOMAIN; ?>/signup">Sign Up</a>
      </span>
      <?php endif ?>
      
      <?php if (!$_SESSION): ?>
      <span class="body_header_nav_option">
        <a class="body_header_navigation" href="http://<?php echo DOMAIN; ?>/login">Login</a>
      </span>
      <?php endif ?>
      
      <?php if ($_SESSION): ?>
      <span class="body_header_nav_option">
        <a class="body_header_navigation" href="http://<?php echo DOMAIN; ?>/logout">Logout</a>
      </span>
      <?php endif ?>

      <?php if ($_SESSION && $_SESSION['name'] != ''):
        $header_user = $_SESSION;
        if ($header_user['using_fb']){
          $acct_header_img_src = '//graph.facebook.com/'.$header_user['fb_id'].'/picture?type=large';
        }
        else{
          $acct_header_img_src = '//'.DOMAIN.'/img/user/u'.$header_user['uid'].'.jpg';
        }
      ?>
      <span class="body_header_nav_option">
        <img class="header_acct_icon" src="<?php echo $acct_header_img_src ?>" />
        <a class="body_header_navigation" href="http://<?php echo DOMAIN; ?>/account"><?php echo $_SESSION['name']; ?></a>
      </span>
      <?php endif ?>
      
    </div>

    <div id="page_title">
      <?php
        echo $page_title;
      ?>
    </div>

    <div style="clear:right;"></div>
      <div id="header_navigation_container" class="header_content">
        
        <!-- Icons -->
        <span class="header_nav_option">
          <a class="header_social" href="http://www.facebook.com/NPHVZ" target="blank"><img src="/img/social/icon-facebook.png" alt="New Paltz HvZ Facebook Page"/></a>
        </span>
        <span class="header_nav_option">
          <a class="header_social" href="http://www.twitter.com/newpaltzhvz" target="blank"><img src="/img/social/icon-twitter.png" alt="NPHvZ Twitter"/></a>
        </span>
        <span class="header_nav_option">
          <a class="header_social" href="http://sunynewpaltzhvz.tumblr.com/" target="blank"><img src="/img/social/icon-tumblr.png" alt="NPHvZ Tumblr"/></a>
        </span>
        <!-- Icon for future email link/contact page? <img src="/img/social/icon-mail.png"/> -->
        <span class="header_nav_option">
          <a class="header_social" href="https://github.com/juan0tron/nphvz" target="blank"><img src="/img/social/icon-github.png" alt="NPHvZ Tracker on GitHub"/></a>
        </span>
        <!-- End Icons-->
        <span class="header_nav_option">
          <a class="header_navigation" href="http://<?php echo DOMAIN; ?>/rules.php">Game Rules</a>
        </span>
        <span class="header_nav_option">
          <a class="header_navigation" href="https://www.facebook.com/groups/129725487074349/">Forums</a> <!-- href="http://<?php echo DOMAIN; ?>/forum.php" once forums work -->
        </span>
  	    <!--<span class="header_nav_option">
          <a class="header_navigation" href="https://www.facebook.com/groups/129725487074349/" target="blank">Facebook Group</a>
        </span>-->
        <span class="header_nav_option">
          <a class="header_navigation" href="http://<?php echo DOMAIN; ?>/about.php">About Us</a>
        </span>          
      </div> <!-- header_navigation & header_content2-->  
  
  </div><!-- content_column -->
      
  
<div class="clearfix"></div>
</div><!-- header_container -->
</div><!-- header_spacer -->
<?php
    // If the user is logged in and impersonating a session, show the title bar
    if (isset($_SESSION) && isset($_SESSION['impersonate']) && $_SESSION['impersonate']):  
  ?>
  <a href="http://<?php echo DOMAIN; ?>/session/unimpersonate">
    <div class="impersonation_bar">
      You are logged in as <?php echo $_SESSION['true_identity']['name']; ?> and impersonating <?php echo $_SESSION['name']; ?>. To stop impersonation, click here.
    </div>
  </a>
  <?php endif; ?>
