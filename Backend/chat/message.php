<?php


class message {
    // class attributes
    private $id, $user_id, $content, $time;
    
    // some colors to differentiate users
    public $colors = array("red", "blue", "green", "orange", "purple", "hotpink", "yellow");

    // set and get methods 
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

    // inesrts a new message into the database
    public function insertMessage () {
        // include the connection
        require_once("../database/db_functions.php");
        $db = connectToDB();
        $qry = "INSERT INTO `messages` (`user_id`, `content`, `time`) VALUES ($this->user_id, '".$this->content."', NOW());";
        $db->exec($qry);
    }

    // loads the messages onto the screen
    public function displayMessage () {
        // connect to the database
        require_once("../database/db_functions.php");
        $db = connectToDB();

        // select all messages ordered by their id
        $qry = "SELECT * FROM messages ORDER BY id;";
        $res = $db->query($qry);

        // for each message
        while ($res2 = $res->fetch()) {

            // get the user corresponding to the message
            $user_qry = "SELECT * FROM users WHERE id = ".$res2["user_id"].";";
            $thing = $db->query($user_qry);
            $res3 = $thing->fetch();

            // color the user
            $color_i = $res2["user_id"] % 7;
            ?>

            <!-- display a card for the message with the appropriate information -->
            <div class="card <?php
                                if ($res3["username"] == $_SESSION["username"]) echo "my-message"; 
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

// jalal
?>