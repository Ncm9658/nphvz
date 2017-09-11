  <div id="body_header">

    <?php if ($_SESSION && !$account_complete): ?>

      <div id="body_header_message">
      Your account (<?php echo $_SESSION['email']; ?>) signup is not complete.
      <?php if ($page_title != 'Signup'): ?>
        <a href="http://<?php echo DOMAIN; ?>/signup">Finish signing up by clicking here</a>.
      <?php endif ?>
      </div>
    
    <?php elseif($_SESSION && !$GLOBALS['User']->IsPlayingCurrentGame($_SESSION['uid']) && $account_complete): ?>
    
      <div id="body_header_message">
        You have not yet <a href="http://<?php echo DOMAIN; ?>/joingame">joined a game</a>. 
        You must <a href="http://<?php echo DOMAIN; ?>/joingame">join a game</a> to participate! 
        <a class="accent_color" href="http://<?php echo DOMAIN; ?>/joingame">Join a game here</a>.
      </div>
          
    <?php endif ?>
  
  </div>
  

