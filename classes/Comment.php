<?php

class Comment extends db
{
    /*
     * public
     */


    /*
     * Private
     */


    /*
     * Methods
     */

    function __construct()
    {
        /*
        * Database Connect
        */
        $this->Open();
    }

    /* add new comment */

    /*
     * $idMember : id you want to comment to
     */
    public function addCommentAndRate($idMember, $rate, $txt_comment)
    {
        $idMember = mysqli_real_escape_string($this->db_link, $idMember);
        $txt_comment = mysqli_real_escape_string($this->db_link, $txt_comment);
        $rate = mysqli_real_escape_string($this->db_link, $rate);
        $nameOfCommentator = $_SESSION['firstName'] . " " . $_SESSION['lastName'];
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $sql = "INSERT INTO `it57160033`.`CYOS_Comments` (`idMember`, `nameOfCommentator`, `rate`,`comment`) VALUES ('$idMember', '$nameOfCommentator', '$rate', '$txt_comment')";
        mysqli_query($this->db_link, $sql);
    }

    public function isComment_exit($nameOfCommenter)
    {
        $nameOfCommenter = mysqli_real_escape_string($this->db_link, $nameOfCommenter);
        $sql = "SELECT * FROM `CYOS_Comments` WHERE `nameOfCommentator` = '$nameOfCommenter'";
        $num_row = mysqli_num_rows(mysqli_query($this->db_link, $sql));
        return $num_row > 0;
    }

    public function getMyDetailComment()
    {
        $nameOfCommenter = $_SESSION['firstName'] . " " . $_SESSION['lastName'];
        $sql = "SELECT * FROM `CYOS_Comments` WHERE `nameOfCommentator` = '$nameOfCommenter'";
        return mysqli_fetch_object(mysqli_query($this->db_link, $sql));
    }

    /* edit comment */

    public function editCommentAndRate($idComment, $rate, $txt_comment)
    {
        $idComment = mysqli_real_escape_string($this->db_link, $idComment);
        $txt_comment = mysqli_real_escape_string($this->db_link, $txt_comment);
        $rate = mysqli_real_escape_string($this->db_link, $rate);
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $sql = "UPDATE `it57160033`.`CYOS_Comments` SET `rate` = '$rate', `comment` = '$txt_comment' WHERE `CYOS_Comments`.`idComments` = $idComment";
        mysqli_query($this->db_link, $sql);
    }

    /* show comment */
    //idMember : id of seller profile comment
    public function getAllComment($idMember)
    {
        $idMember = mysqli_real_escape_string($this->db_link, $idMember);
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $sql = "SELECT * FROM `CYOS_Comments` WHERE `idMember` = $idMember";
        $result = mysqli_query($this->db_link, $sql);
        $out = "{\"lists\" : [";
        while ($row = mysqli_fetch_object($result)) {
            if ($out != "{\"lists\" : [") $out .= ",";
            $out .= json_encode($row);
        }
        $out .= "]}";
        return $out;
    }
}