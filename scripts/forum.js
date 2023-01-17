function toggleForum(){
    $(".forum-container").slideToggle("slow");
}

function toggleForumChat(target){
    if($(".chat-container").is(":visible")){
        $(".chat-container").hide();
    }
    $(".chat-container").slideToggle("slow");
    var forumText = $(target).text().trim();

    $.ajax({
        type: "GET",
        url: "./components/chat.php",
        data : { selectedForum : forumText},
        beforeSend: function(){
        }
        , complete: function(){
        }
        , success: function(html){
            console.log(html);
            //this will add the new comment to the `comment' div
            $(".chat-container").replaceWith(html);
            $(".chat-container").slideToggle("slow");
            ///$("main").append(html);
        }
    });

}