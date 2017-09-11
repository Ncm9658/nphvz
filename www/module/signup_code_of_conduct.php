<div id="signup_title">
  Sign up <span class="accent_color">agree to our code of conduct</span>
  </div>

  <?php if (isset($_GET['state'])): ?>
  <div id="signup_status">
    <?php
      switch ($_GET['state'])
      {    
        
        // this should be short circuited... but if not show an error
        case 'agree':
          echo 'There was an error saving your agreement. Please try again.';
        break;
                
        case 'slowdown':
          echo 'Please wait a few minutes before requesting another confirmation email. Check your email and try again in about 5 minutes.';
        break;
          
        default:
          echo 'An unknown error occured. Please try again.';
        break;
      }
    ?>
  </div>
  <?php endif ?>
    
  <div class="signup_body_text">
    New Paltz Humans vs. Zombies Code of Coduct
  </div>

  <div class="signup_body_text">
  1 . By signing up for the Humans vs. Zombies game, I agree to act in accordance with all laws (local, state and federal), and to act within the SUNY New Paltz code of conduct.
  </div>

  <div class="signup_body_text">
  2. By signing up for the Humans vs. Zombies game, I agree to take no action which would cause myself or others bodily harm, or result in the loss, damage, or destruction of property.
  </div>

  <div class="signup_body_text">
  3. By signing up for the Humans vs. Zombies game, I acknowledge that ignorance ofthese policies is not
  an excuse for noncompliance, and take responsibility for knowing the code of conduct.
  </div>

  <div class="signup_body_text">
  4. By signing up for the Humans vs. Zombies game, I understand that if I violate any laws (local, state or federal) or the SUNY New Paltz code of conduct as part of my participation in the Humans vs. Zombies game, I will be subject to review for further gameplay, both in any active games and any future games.
  </div>

  <div class="signup_body_text">
  5. By signing up for the Humans vs. Zombies game, I agree that I will not use an automobile for purposes related to Humans vs. Zombies game. I am however allowed to use a watercraft, so long as it is not in water, and a Segway, if I'm the kind of nerd that owns one of those.
  </div>

  <div class="signup_body_text">
  6. By signing up for the Humans vs. Zombies game, I agree to demonstrate respect for all players and non-players alike. I understand that discharging a Nerf-style blaster at a non-player is grounds for removal from the game.
  </div>

  <div class="signup_body_text">
  7. By signing up for the Humans vs. Zombies game, I agree not to display Nerf-style blasters in academic buildings or use Nerf-style blasters which resemble real weapons. I understand that using a Nerf-style blaster in an academic building, or using a Nerf-style blaster which resembles a real weapon is grounds for removal from the game. Interpretation of “resembling real weapons” is left to the discretion of the moderators and the acting safety officer. Complaints about realistic-looking Nerf-style blasters made by a non-player may be grounds for the blaster in question to be banned. Nerf-style blasters must have a visible blaze-orange tip, be brightly colored (Not black or dark-tones), and have a brightly colored trigger.
  </div>

  <div class="signup_body_text">
  8. By signing up for the Humans vs. Zombies game, I agree to leave my building in an evacuation situation such as a fire alarm. I understand that the area I evacuate to is temporarily a safe zone for the duration of the evacuation, and that I cannot be tagged (or tag another player) while going to or returning from the evacuation area.
  </div>

  <div class="signup_body_text">
  9. By signing up for the Humans vs. Zombies game, I take responsibility for any non-students who I bring on to campus to play, and understand that I am responsible for their conduct and liable for any rules which they violate. Any non-student players <span class="accent_color">must be approved</span> by the acting E-Board and moderators.
  </div>

  <div class="signup_body_text">
  10. By signing up for the Humans vs. Zombies game, I agree that I will have fun. I will not be a dick to other players, non-players, or administration. I will not take myself too seriously. I will enjoy life first, gameplay second, and remember to enjoy myself. We all love each other here, and by signing up for this game, I agree that I'm going to help contribute to the awesome community we have here.
  </div>

  <div id="signup_conduct_agree_container">

  <div id="signup_conduct_agree_text">
      To continue you must agree to our Code of Conduct.
  </div>

  <div id="signup_conduct_agree_button_container">
    <span class="signup_box_button">
      <a class="signup_box_button_link" href="http://<?php echo DOMAIN; ?>/signup/3/agree">I Agree</a>
    </span>
  </div>
  
  <div class="clearfix"></div>
</div>