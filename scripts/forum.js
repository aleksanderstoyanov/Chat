function toggleForum(){
    $(".forum-container").slideToggle("slow");
}

function toggleForumChat(target){
    if($(".chat-container").is(":visible")){
        $(".chat-container").hide();
    }
    if ($(".credentials-form").is(":visible")) {
        console.log("here");
        $(".credentials-form").hide();
    }
    
    $(".chat-container").slideToggle("slow");
    var forumText = $(target).text().trim();

    $.ajax({
        type: "GET",
        url: "./components/chat.php",
        data : { selectedForum: forumText, type: forumText},
        success: function(html){
            console.log(html);
            $(".chat-container").replaceWith(html);
            $(".chat-container").slideToggle("slow");
        }
    });

}