vimeo-php-lib
=============

Added namespace support to Official vimeo-php-lib.

Usage
=====

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


 TODO
 ====
 Add composer support
