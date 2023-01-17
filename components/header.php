<?php
    $showRegister;
    $showLogin;
    $showLogout;

    if(isset($_SESSION["auth"])){
        $showRegister = "none";
        $showLogout = "inline";
        $showLogin = "none";
    }
    else{
        $showRegister = "inline";
        $showLogout = "none";
        $showLogin = "inline";
    }
?>
<nav class="forum-navigation">
        <ul class="forum-navigation-items right">
            <li class="forum-navigation-item">
                <a href="#">Forum Chat</a>
            </li>
            <li class="forum-navigation-item right">
                <a id="register-link" onclick="openCredentialsForm(this)" href="#" style="display: <?php echo $showRegister ?>">
                    Register
                </a>
                <a id="login-link" onclick="openCredentialsForm(this)" href="#" style="display: <?php echo $showLogin ?>">
                    Login
                </a>
                <a id="logout-link" href="/Chat/components/user/logout.php" style="display: <?php echo $showLogout ?>">
                    Logout
                </a>
            </li>
            <li class="forum-navigation-item">
                <a href="#" onclick="toggleForum()">
                    <i class="fa fa-regular fa-comment"></i>
                </a>
            </li>
        </ul>
</nav> 