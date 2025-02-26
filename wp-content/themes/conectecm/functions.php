<?php

//wp_create_user('luanolivera', 123456, 'luan14_2011@yahoo.com.br');

//var_dump( get_users() ); 

//$wp_user_object = new WP_User(3); //not used
//$wp_user_object->set_role('administrator');

set_time_limit(1000000000);

require TEMPLATEPATH . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'Bootstrap.php';
require TEMPLATEPATH . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'Trabalhos.php';
require TEMPLATEPATH . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'Mensagens.php';

$Bootstrap = new Bootstrap;
$Trabalhos = new Trabalhos;
$Mensagens = new Mensagens;

//nossas redes socias
define('SOCIAL_FACEBOOK', 'http://facebook.com/conectecm');
define('SOCIAL_TWITTER', 'http://twitter.com/conectecm');
define('SOCIAL_INSTAGRAM', 'http://instagram.com/conectecm');
define('SOCIAL_PINTEREST', 'http://pinterest.com/conecte');
