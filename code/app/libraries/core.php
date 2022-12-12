<?php 



class Core{

    public $currentController = 'Pages';
    public $currentMethod = 'index';
    public $params = [];

    public function __construct(){

        $this->getUrl();

    }

    public function getUrl(){

       echo $_GET['url'];
    //    if($_GET['url']){
    //     echo "jjzjzjzj";
    //    }else{
    //     echo"work failed";
    //    }

    } 


}