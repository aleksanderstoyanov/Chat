<?php
    define("FORUMS", ["Fun","Sport","Books"]);
    class Seeder{
        public static function seedForumData(){
            $query = "SELECT * FROM forum";
            $result = mysqli_query(DATABASE_CONNECTION, $query);
            $countOfRows = mysqli_num_rows($result);
            
            if ($countOfRows == 0) {
                for($i = 0;$i < count(FORUMS);$i++)
                {
                    $forumValue = FORUMS[$i];
                    $query = "INSERT INTO forum (Name) VALUES('$forumValue')";
                    $result = mysqli_query(DATABASE_CONNECTION, $query);
                }
            }
        }
    }
?>