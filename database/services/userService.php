<?php include("../connection.php")?>
<?php 
    $username = $_POST["username"];
    $password = $_POST["password"];
    $type = $_POST["type"];
    session_start();

    $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);

    if ($type == "Register") {
        UserService::register($username, $password);
    }
    else{
        echo "Login";
        UserService::login($username, $password);
    }
    
    header("Location: /Chat/index.php");

    class UserService{
        public static function register($username, $password){
            $query = "SELECT * FROM user WHERE username = '$username'";
    
            $result = mysqli_query(DATABASE_CONNECTION, $query);
    
            if (mysqli_num_rows($result) == 0) {
                $query = "INSERT INTO user (username, pass) VALUES ('$username', '$password')";
                mysqli_query(DATABASE_CONNECTION, $query);
                
                $_SESSION["auth"] = '1';
            }
        }
        public static function login($username, $password){
            $query = "SELECT * FROM user WHERE username = '$username' AND pass = '$password'";
    
            $result = mysqli_query(DATABASE_CONNECTION, $query);
        
            $userResult = mysqli_fetch_array($result);
    
            if($userResult["username"] == $username && $userResult["pass"] == $password){
                $_SESSION["auth"] = '1';
            }
        }
    }
?>