vimeo-php-lib
=============

Added namespace support to Official vimeo-php-lib.

Install
=====
Install with composer 
<pre>
"merturk/vimeo-php-lib": "dev-master"
</pre>

Usage
=====
<pre>
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
</pre>