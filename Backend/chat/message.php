<?php

class message {
    private $id, $user_id, $content, $time;

    public function getID () {
        return $this->id;
    }
    public function setID ($new_id) {
        $this->id = $new_id;
    }

    public function getuser_id () {
        return $this->user_id;
    }
    public function setuser_id ($new_user_id) {
        $this->user_id = $new_user_id;
    }

    public function getcontent () {
        return $this->content;
    }
    public function setcontent ($new_content) {
        $this->content = $new_content;
    }

    public function gettime () {
        return $this->time;
    }
    public function settime ($new_time) {
        $this->time = $new_time;
    }

    public function insertMessage () {
        // include the connection
        require_once("../database/db_functions.php");
        $db = connectToDB();
        $qry = "INSERT INTO `messages` (`user_id`, `content`, `time`) VALUES ($this->user_id, '".$this->content."', NOW());";
        $db->exec($qry);
    }

    public function displayMessage () {
        require_once("../database/db_functions.php");
        $db = connectToDB();
        $qry = "SELECT * FROM messages ORDER BY id;";
        $res = $db->query($qry);

        while ($res2 = $res->fetch()) {
            $user_qry = "SELECT * FROM users WHERE id = ".$res2["user_id"].";";
            $thing = $db->query($user_qry);
            $res3 = $thing->fetch();
            ?>
            <!-- <span class="usernameS"><?php echo $res3["username"]; ?></span>
            <br>
            <span class="messageS"><?php echo $res2["content"]; ?></span>
            <br><br> -->

            <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $res3["username"]; ?></h5>
                        <p class="card-text"><?php echo $res2["content"]; ?></p>
                    </div>
                </div>
            <?php
        }
    }
}

?>