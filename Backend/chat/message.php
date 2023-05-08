<?php


class message {
    private $id, $user_id, $content, $time;
    public $colors = array("red", "blue", "green", "orange", "purple", "hotpink", "yellow");

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
            $color_i = $res2["user_id"] % 7;
            ?>
            <!-- TODO: change this to session username -->
            <div class="card <?php
                                if ($res3["username"] == "jalal-elzein") echo "my-message"; 
                                else echo "other-message"; 
                            ?> "
            >
                <div class="card-body">
                    <h5 class="card-title" style="color: <?php echo $this->colors[$color_i]; ?>"><?php echo $res3["username"]; ?></h5>
                    <p class="card-text"><?php echo $res2["content"]; ?></p>
                    <h6 class="card-subtitle mb-2" style="color: <?php echo $this->colors[$color_i]; ?>; opacity: 0.5; float: right;"><?php echo $res2["time"]; ?></h6>
                </div>
            </div>
            <?php
        }
    }
}

?>