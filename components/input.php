<?php 
   session_start();
   $shouldHideInput;
   
   if (!isset($_SESSION["auth"])) {
      $shouldHideInput = "none";
   }
   else{
      $shouldHideInput = "block";
   }

?>
<div class="chat-container-input" style="display:<?php echo $shouldHideInput?>">
    <input placeholder="Type Message..." id="sendInput" type="text" />
    <a href="#" id="sendBtn" onclick="submitMessage()">
        <i class="fa fa-solid fa-paper-plane"></i>
    </a>
</div>