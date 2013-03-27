<?php 

function __autoload($class_name) {
    include $class_name . '.php';
}


$vimeo = new \Vimeo\Vimeo('api', 'secret', 'token', 'token_secret');

 $response = $vimeo->call(
            'vimeo.channels.getAll',
            array(
                'format' => 'json',
                'method' => 'vimeo.channels.getAll',
                'page' => '1',
                'per_page' => '50',
                'sort' => 'alphabetical'
            )
        );

 echo $response;