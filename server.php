<?php 
require_once "functions.php"; 

if(empty($_POST))
    return;

if(empty($_POST['action']))
    return;

switch($_POST['action']){
    case 'setStatus':
        if( !empty($_POST['email']) && 
            !empty($_POST['first_name']) && 
            !empty($_POST['last_name']) && 
            !empty($_POST['phone'])
        ){
            setStatuse($_POST['email'], $_POST['first_name'], $_POST['last_name'], $_GET['phone']);
        }else{
            return;
        }
        
        break;
    default:
        return;
}
