<?php
    class homeModel  
    {
        function __construct()
        {
            try {
                $this->con = new PDO("mysql:host=localhost;dbname=mvc_db","root","");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        function page($id)
        {
            $sql = "SELECT title,data FROM page WHERE id = '$id'";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // print_r($data);
            // die();
            $arr =$data[0];
            return $arr;    
        }
        
        // function about()
        // {
        //     $sql = "SELECT title,data FROM page WHERE id = '2'";
        //     $stmt = $this->con->prepare($sql);
        //     $stmt->execute();
        //     $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //     // print_r($data);
        //     // die();
        //     $arr =$data[0];
        //     return $arr;
        // }
        
        // function contact()
        // {
        //     $sql = "SELECT title,data FROM page WHERE id = '3'";
        //     $stmt = $this->con->prepare($sql);
        //     $stmt->execute();
        //     $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //     // print_r($data);
        //     // die();
        //     $arr =$data[0];
        //     return $arr;
        // }
    }
    
?>