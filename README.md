vimeo-php-lib
=============

Added namespace support to Official vimeo-php-lib.

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

[test.php](test.php)

 TODO
=====
- Add composer support
