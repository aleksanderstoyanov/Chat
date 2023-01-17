<?php 
    $chatTitle;
    $records = [];
    if (!isset($_GET["type"])) {
        $chatTitle = "Chat";
    }
    else{
        $chatTitle = $_GET["type"];
        $query = "SELECT * FROM chat WHERE topic = '$chatTitle'";
        
        $query = "SELECT * FROM chat WHERE topic = '$chatTitle'";

        $connection = new mysqli("localhost","alex","123", "forum_chat");

        $result = mysqli_query($connection, $query);
        $records = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>

<div class="chat-container">
    <div class="chat-container-header">
        <h2 class="chat-container-header-title"><?php echo $chatTitle ?></h2>
        <div class="chat-container-body">
            <?php foreach ($records as $record) :?>
                <div class="message-container receiver">
                    <p class="text-message">
                        <?php echo $record["reply"]?>
                    </p>
                    <span style="font-size:8`px;color:black;float: right;"><?php echo $record["createdOn"]?></span>
                </div>   
            <?php endforeach ?>    
        </div>
    </div>    
    <?php include("../components/input.php")?>    
</div>