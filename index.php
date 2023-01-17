<?php include("./database/seeding.php") ?>
<?php
    Seeder::seedForumData();
    session_start();

    if (isset($_SESSION["auth"])) {
        echo "Logged In";
    }
    else{
        echo "Not Logged In";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="styles/message.css">
    <link rel="stylesheet" href="styles/common.css">
    <link rel="stylesheet" href="styles/chat.css">
    <link rel="stylesheet" href="styles/input.css">
    <link rel="stylesheet" href="styles/navigation.css">
    <link rel="stylesheet" href="styles/forum.css">
    <link rel="stylesheet" href="styles/user.css">
    <script src="https://kit.fontawesome.com/1e00da35a2.js" crossorigin="anonymous"></script>    
</head>
<body>
    <?php include("./components/header.php")?>
    <main>
        <?php include("./components/forum.php")?>
        <?php include("./components/chat.php")?>
        <div class="forum-chat-content">
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="./scripts/forum.js"></script>
    <script src="./scripts/user.js"></script>
</body>
</html>