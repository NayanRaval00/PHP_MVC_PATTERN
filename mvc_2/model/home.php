<?php
    class homeModel  
    {
        function __construct()
        {
            
        }
        function home()
        {
            $arr = array('title'=>'Home','data'=>'Home Data');
            return $arr;    
        }
        
        function about()
        {
            $arr = array('title'=>'about','data'=>'about Data');
            return $arr;
        }
        
        function contact()
        {
            $arr = array('title'=>'contact','data'=>'contact Data');
            return $arr;
        }
    }
    
?>