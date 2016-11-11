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
    private $idMember;
    private $password;

    /*
     * Private
     */
    public $email;
    public $firstName;
    public $lastName;
    public $phoneNumber;
    public $address;
    public $LineLD;
    public $facebook;
    /*
     * Member Status
     */
    public $status;
    /*
     * Member Rate
     */
    public $rate;
    public $rateSum;
    public $totalVote;

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
        $result = mysqli_query($this->db_link, "SELECT `email` FROM `CYOS_Member` WHERE `email` = '$email' ");
        if(mysqli_num_rows($result) == 1) return true;
        return false;
    }

    public function edit($firstName, $lastName, $phoneNumber, $address, $LineID, $faceBook)
    {
        $firstName = mysqli_real_escape_string($this->db_link, $firstName);
        $lastName = mysqli_real_escape_string($this->db_link, $lastName);
        $phoneNumber = mysqli_real_escape_string($this->db_link, $phoneNumber);
        $address = mysqli_real_escape_string($this->db_link, $address);
        $LineID = mysqli_real_escape_string($this->db_link, $LineID);
        $faceBook = mysqli_real_escape_string($this->db_link, $faceBook);

        $sql = "UPDATE `it57160033`.`CYOS_Member`
        SET 
        `firstName` = '$firstName',
        `lastName` = '$lastName',
        `phoneNumber` = '$phoneNumber',
        `address` = '$address',
        `lineID` = '$LineID',
        `facebook` = '$faceBook'
        WHERE `CYOS_Member`.`idMember` = '$this->idMember';";
        mysqli_query($this->db_link, $sql);
        return true;
    }

    public function editPassword($oldPassword, $newPassword)
    {
        $oldPassword = mysqli_real_escape_string($this->db_link, $oldPassword);
        $newPassword = mysqli_real_escape_string($this->db_link, $newPassword);

        mysqli_query($this->db_link, "SET NAMES UTF8");
        $result = mysqli_query($this->db_link, "SELECT `password` FROM `CYOS_Member` WHERE `idMember` = '$this->idMember' ");
        $userFound = mysqli_num_rows($result);
        $password_hash_from_db = mysqli_fetch_object($result)->password;

        if ($userFound == 1 AND password_verify($oldPassword, $password_hash_from_db)){
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

