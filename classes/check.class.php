<?php

    class checkall {
        
        public $res;
     
        public function checknav(){
        
             if(isset($_SESSION['email'])){
                return  'navber/navber.user.php';
             }else{
                return  'navber/navber.php';
             }
        }

    }
?>