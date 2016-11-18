<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 10/11/2559
 * Time: 13:32
 */

/*
 * import database connect class
 */
session_start();
require("db.php");


class Member extends db
{
    /*
     * public
     */
    public $email;
    public $firstName;
    public $lastName;
    public $phoneNumber;
    public $address;
    public $LineLD;
    public $facebook;

    /*
     * Private
     */
    private $idMember;
    private $password;

    /*
     * Member Status
     */
    public $status;
    /*
     * Member Rate
     */
    /*
     * rate = rateSum/totalVote
     */
    public $rate;

    public $rateSum;
    public $totalVote; //people

    /*
     * Methods
     */

    function __construct()
    {
        /*
        * Database Connect
        */
        $this->Open();
        $this->idMember = $_SESSION["idMember"];
        $this->firstName = $_SESSION["firstName"];
        $this->lastName = $_SESSION["lastName"];
        $this->status = $_SESSION['status'];
    }

    /*
     * $point can be 0, 1, 2, 3, 4, 5
     * $idMember - the user that you want to rate
     */
    public function increaseRate($idMember, $point, $yourIdMember)
    {
        $idMember = mysqli_real_escape_string($this->db_link, $idMember);
        $result = mysqli_query($this->db_link, "SELECT `idMember` FROM `CYOS_Member` WHERE `CYOS_Member`.`idMember` = $yourIdMember");
        $verifyID = mysqli_num_rows($result);
        $sql = "";
        if ($verifyID == 1) {
            $sql = "UPDATE `it57160033`.`CYOS_Member` SET `rateSum` = `rateSum`+ $point, `totalVote` = `totalVote`+1 WHERE `CYOS_Member`.`idMember` = $idMember";
            mysqli_query($this->db_link, $sql);

            $sql = "SELECT `rateSum`, `totalVote` FROM `CYOS_Member` WHERE `CYOS_Member`.`idMember` = $idMember";
            $result = mysqli_query($this->db_link, $sql);
            $result = mysqli_fetch_object($result);
            $rate = $result->rateSum / $result->totalVote;
            $sql = "UPDATE `it57160033`.`CYOS_Member` SET `rate` = $rate WHERE `CYOS_Member`.`idMember` = $idMember";
            mysqli_query($this->db_link, $sql);
        }

    }

    /*
     * $point can be 0, 1, 2, 3, 4, 5
     * $idMember - the user who rate edited
     */
    //Todo edit rate
    public function editRate($idMember, $point, $yourIdMember)
    {
        /*$idMember = mysqli_real_escape_string($this->db_link, $idMember);
        $result = mysqli_query($this->db_link, "SELECT `idMember` FROM `CYOS_Member` WHERE `CYOS_Member`.`idMember` = $yourIdMember");
        $verifyID = mysqli_num_rows($result);
        $sql = "";
        if ($verifyID == 1) {
            $sql = "UPDATE `it57160033`.`CYOS_Member` SET `rateSum` = `rateSum`+ $point, `totalVote` = `totalVote`+1 WHERE `CYOS_Member`.`idMember` = $idMember";
            mysqli_query($this->db_link, $sql);

            $sql = "SELECT `rateSum`, `totalVote` FROM `CYOS_Member` WHERE `CYOS_Member`.`idMember` = $idMember";
            $result = mysqli_query($this->db_link, $sql);
            $result = mysqli_fetch_object($result);
            $rate = $result->rateSum / $result->totalVote;
            $sql = "UPDATE `it57160033`.`CYOS_Member` SET `rate` = $rate WHERE `CYOS_Member`.`idMember` = $idMember";
            mysqli_query($this->db_link, $sql);
        }*/
    }

    public function getRate($idMemebr)
    {
        $idMemebr = mysqli_real_escape_string($this->db_link, $idMemebr);
        $sql = "SELECT `rate` FROM `CYOS_Member` WHERE `idMember` = $idMemebr";
        $result = mysqli_query($this->db_link, $sql);
        $this->idMemebr = mysqli_fetch_object($result)->rate;
        return $this->idMember;
    }

    public function register($email, $password, $firstName, $lastname)
    {
        $email = mysqli_real_escape_string($this->db_link, $email);

        $password = mysqli_real_escape_string($this->db_link, $password);
        $password = password_hash($password, PASSWORD_BCRYPT);

        $firstName = mysqli_real_escape_string($this->db_link, $firstName);
        $lastname = mysqli_real_escape_string($this->db_link, $lastname);

        $sql = "INSERT INTO `CYOS_Member`
            (`email`, `password`, `firstName`, `lastName`, `status`, `rateSum`, `totalVote`) 
            VALUES ('$email','$password','$firstName','$lastname', 1,0,0)";
        mysqli_query($this->db_link, "SET NAMES UTF8");
        mysqli_query($this->db_link, $sql);
    }

    public function isFoundEmail($email)
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $email = mysqli_real_escape_string($this->db_link, $email);
        $sql = "SELECT `email` FROM `CYOS_Member` WHERE `email` = '$email' ";
        $result = mysqli_query($this->db_link, $sql);
        if (mysqli_num_rows($result) == 1) return true;
        return false;
    }

    public function getUserDetail()
    {
        mysqli_query($this->db_link, "SET NAMES UTF8");
        $idMember = mysqli_real_escape_string($this->db_link, $this->idMember);
        $sql = "SELECT `email`, `firstName`, `lastName`, `phoneNumber`, `address`, `lineID`, `facebook` FROM `CYOS_Member` WHERE `idMember` = '$idMember' ";
        $result = mysqli_query($this->db_link, $sql);
        return mysqli_fetch_object($result);
    }

    public function edit($firstName, $lastName, $phoneNumber, $address, $LineID, $faceBook)
    {
        $sql = "";
        mysqli_query($this->db_link, "SET NAMES UTF8");
        if (isset($firstName)) {
            $firstName = mysqli_real_escape_string($this->db_link, $firstName);
            $sql = "UPDATE `it57160033`.`CYOS_Member` SET `firstName` = '$firstName' WHERE `CYOS_Member`.`idMember` = '$this->idMember';";
            mysqli_query($this->db_link, $sql);
        }
        if (isset($lastName)) {
            $lastName = mysqli_real_escape_string($this->db_link, $lastName);
            $sql = "UPDATE `it57160033`.`CYOS_Member` SET `lastName` = '$lastName' WHERE `CYOS_Member`.`idMember` = '$this->idMember';";
            mysqli_query($this->db_link, $sql);
        }
        if (isset($phoneNumber)) {
            $phoneNumber = mysqli_real_escape_string($this->db_link, $phoneNumber);
            $sql = "UPDATE `it57160033`.`CYOS_Member` SET `phoneNumber` = '$phoneNumber' WHERE `CYOS_Member`.`idMember` = '$this->idMember';";
            mysqli_query($this->db_link, $sql);
        }
        if (isset($address)) {
            $address = mysqli_real_escape_string($this->db_link, $address);
            $sql = "UPDATE `it57160033`.`CYOS_Member` SET `address` = '$address' WHERE `CYOS_Member`.`idMember` = '$this->idMember';";
            mysqli_query($this->db_link, $sql);
        }
        if (isset($LineID)) {
            $LineID = mysqli_real_escape_string($this->db_link, $LineID);
            $sql = "UPDATE `it57160033`.`CYOS_Member` SET `lineID` = '$LineID' WHERE `CYOS_Member`.`idMember` = '$this->idMember';";
            mysqli_query($this->db_link, $sql);
        }
        if (isset($faceBook)) {
            $faceBook = mysqli_real_escape_string($this->db_link, $faceBook);
            $sql = "UPDATE `it57160033`.`CYOS_Member` SET `facebook` = '$faceBook' WHERE `CYOS_Member`.`idMember` = '$this->idMember';";
            mysqli_query($this->db_link, $sql);
        }
    }

    public function editPassword($oldPassword, $newPassword)
    {
        $oldPassword = mysqli_real_escape_string($this->db_link, $oldPassword);
        $newPassword = mysqli_real_escape_string($this->db_link, $newPassword);

        mysqli_query($this->db_link, "SET NAMES UTF8");
        $result = mysqli_query($this->db_link, "SELECT `password` FROM `CYOS_Member` WHERE `idMember` = '$this->idMember' ");
        $userFound = mysqli_num_rows($result);
        $password_hash_from_db = mysqli_fetch_object($result)->password;

        if ($userFound == 1 AND password_verify($oldPassword, $password_hash_from_db)) {
            $newPassword = password_hash($newPassword, PASSWORD_BCRYPT);
            $sql = "UPDATE `it57160033`.`CYOS_Member`
        SET 
        `password` = '$newPassword'
        WHERE `CYOS_Member`.`idMember` = '$this->idMember';";
            mysqli_query($this->db_link, $sql);
            return true;
        }
        return false;
    }

    public function login($email, $password_from_user)
    {
        $email = mysqli_real_escape_string($this->db_link, $email);
        $password_from_user = mysqli_real_escape_string($this->db_link, $password_from_user);

        mysqli_query($this->db_link, "SET NAMES UTF8");
        $result = mysqli_query($this->db_link, "SELECT `email`, `password`, `idMember`,`firstName`, `lastName`, `status` FROM `CYOS_Member` WHERE `email` = '$email' ");
        $result = mysqli_fetch_object($result);
        $password_hash_from_db = $result->password;

        if ($this->isFoundEmail($result->email) AND password_verify($password_from_user, $password_hash_from_db)) {
            $_SESSION["idMember"] = $result->idMember;
            $_SESSION["firstName"] = $result->firstName;
            $_SESSION["lastName"] = $result->lastName;
            $_SESSION['status'] = $result->status;
            echo "
                {
                    \"boolean\" : true,
                    \"detail\" : \"right username and password\"
                }";

            return true;
        }
        echo "
        
            {
                \"boolean\" : false,
                \"detail\" : \"wrong username or password\"
            }";

        return false;
    }

    public function logout()
    {
        session_destroy();
    }

}

