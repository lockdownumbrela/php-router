<?php

class Router{

    public static $urled = array();

   //set method
    public static function set($url, $stat){

        self::$urled[] = $url;
        if($_REQUEST['url'] == $url){
            $array = explode(":", $stat);
            $class = $array[0];
            $method = $array[1];
            if(class_exists($class)){

                // using controlls.

                /*$reflection = new ReflectionMethod($class,$method);
                $reflection->invoke(new $class);*/
                $method_list = get_class_methods($class);
                $count = 0;
                foreach($method_list as $one_list){
                    if($one_list == $method){
                        call_user_func($array);
                    }
                }
                
            }
        }

    }


    // show routes in json for testing only
    public static function showRoutes(){
        echo json_encode(self::$urled);
    }

    // valid routes method -> return a error if the route not defined in index.php
    public static function validRoutes(){
        $routes = self::$urled;
        $urlroute = $_GET['url'];
        $response1 = 0;


        foreach ($routes as $route) {
            if($urlroute == $route){
                $response1 += 1;
            }
        }
        if($response1 == 0){
            $response = ['error'=>'404 - not valid url'];
            echo json_encode($response);

        }
    }


}


?>
