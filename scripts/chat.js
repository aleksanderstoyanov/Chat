function submitMessage(){
    var topic = $(".chat-container-header-title").text();
    var message = $("#sendInput").val();
    console.log(message);

    $.ajax({
        url: "./database/services/chatService.php",
        type: "POST",
        data: {message: message, topic: topic},
        success: function(){
            var content = `<div class='message-container sender'><p class='text-message'>${message}</p> <span style="font-size:7px;color:black;float: right;">now</span></div>`;
            
            $(".chat-container-body").append(content);
            $("#sendInput").val(" ");
        }
    })

}