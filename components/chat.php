<div class="chat-container">
    <div class="chat-container-header">
        <h2 class="chat-container-header-title">Chat</h2>
        <div class="chat-container-body">
            <?php
                if(!empty($_GET["selectedForum"])){
                    switch ($_GET["selectedForum"]) {
                        case 'Fun':
                            include("../components/messages/receiver.php");
                            break;
                        case 'Sport':
                            include("../components/messages/receiver.php");
                            include("../components/messages/sender.php");
                            include("../components/messages/receiver.php");
                            include("../components/messages/sender.php");
                            break;
                        case 'Books':
                            include("../components/messages/receiver.php");
                            include("../components/messages/sender.php");
                            break;    
                        default:
                            break;
                    }
                }
            ?>
        </div>
    </div>    
    <?php include("../components/input.php")?>    
</div>