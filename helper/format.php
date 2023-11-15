<?php 
        function textShorten($text,$limet=130){
            $text = substr($text,0,$limet);
            $text=substr($text,0,strrpos($text,' '));
            return $text;
        }

        function formateDate($date){
           return date('F j, Y,g:i a',strtotime($date));
        }

?>