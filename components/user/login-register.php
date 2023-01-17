<div class="credentials-form">
    <form action="/Chat/database/services/userService.php" method="POST">
        <i class="fa fa-solid fa-user"></i>
        <input type="hidden" name="type" value=<?php echo $_GET["type"]?>>
        <input type="text" value="" name="username" placeholder="Username">
        <input type="text" value="" name="password" placeholder="Password">
        <button type="submit" id="register-button"><?php echo $_GET["type"] ?></button>
    </form>
</div>