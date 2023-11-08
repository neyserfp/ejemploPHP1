<?php 
class Connection
{
        public static function conn1()
    {
        // Xampp
        // $mysqli = new mysqli('localhost','root','','bd1');
        // Mamp
        // $mysqli = new mysqli('localhost','root','root','bd1');

        $mysqli = new mysqli('localhost','root','soporte','bd1');

        if($mysqli->connect_errno)
        {
            printf("Error en la conexión: %s\n",$mysqli->connect_errno);
            echo "Failed";  
        } 
        else
        {
            $mysqli->set_charset('utf8');
            return $mysqli;
            echo "Connection established";  
        }
    }
}
?>