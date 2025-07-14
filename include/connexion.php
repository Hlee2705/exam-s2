<?php
function bddConnect()
{
    static $connect = null ;

    if($connect === null)
    {
        $connect = mysqli_connect("localhost","root","","exam_final");
        // $connect = mysqli_connect("localhost","ETU3916","IIDyOBvn","db_s2_ETU003916");
        if(!$connect)
        {
            die("echec de la connexion au base de donné : " . mysqli_connect_error());
        }
    }

    return $connect;
}

?>
