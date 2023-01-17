<?php include("../connection.php")?>
<?php
    session_start();
    $message = $_POST["message"];
    $topic = $_POST["topic"];

    
    echo $message;
    echo $topic;

    class ChatService{
        public static function submitMessage($message, $topic){
            if (isset($_SESSION["auth"])) {
                $username = $_SESSION["username"];
                $query = "INSERT INTO chat (reply, topic, messenger) VALUES ('$message','$topic','$username')";
                mysqli_query(DATABASE_CONNECTION, $query);
            }
        }
    }

    ChatService::submitMessage($message,$topic);
?>