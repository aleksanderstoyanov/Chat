<?php
    class ForumService {
        public static function readData(){
            $query = "SELECT * FROM forum";
            $result = mysqli_query(DATABASE_CONNECTION, $query);
            
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
    }

?>