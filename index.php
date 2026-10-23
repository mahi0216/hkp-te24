<?php
require_once("router.php");
require_once("response.php");

App::get("/",function(){

    res::debug("home");

});