<?php
namespace View;

function view(string $file_name,array $data=null){
    echo "../"."views/".$file_name.".php";
    return readfile("../"."views/".$file_name.".php");
}