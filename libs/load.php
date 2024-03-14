<?php

function load_template($arun)
{
    //include __DIR__ . "/../__templates/$name.php"; //not consisitent
    include$_SERVER['DOCUMENT_ROOT'] . "/app/__templates/$arun.php"; //template name
}
function validate_credenitails($username, $password)
{

    if($username == "arunn@gmail.com" and $password == "444") {
        return true;
    } else {
        return false;
    }
}
