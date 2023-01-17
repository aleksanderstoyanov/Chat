function openCredentialsForm(target){
    var targetText = $(target).text().trim();
    
    $.ajax({
        url: "./components/user/login-register.php",
        data: {"type": targetText}
      }).done(function(html) { 
            $('.forum-chat-content').html(html);
            
            $(".credentials-form").slideToggle("slow");

            if($(".chat-container").is(":visible")){
                $(".chat-container").hide();
            }
      });
}