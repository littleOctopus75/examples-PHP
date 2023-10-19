<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
<<<<<<< HEAD
        'name' => 'Hola Mundo 🌐',
        'site_url' => 'http://localhost/Practicas%20PHP/Examples-PHP/code/site/',
=======
        'name' => 'Simple PHP Website',
        'site_url' => 'http://localhost:32769/examples-PHP/code/site/',
>>>>>>> 406fa26df75d9cc3d6eee013f935cdca32299dd4
        'pretty_uri' => false,
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'products' => 'Products',
            'contact' => 'Contact',
            'student' => 'Student',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.1',
    ];
    $configSubMenu=[
        'name2' => 'Esto es una prueba de un Menu de una pagina',
        'nav_menu2' => [
            'alert' => 'Alert',
        ]
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
/*[
                'name'=> 'Name',
                'group' => 'Group',
                'degree' => 'Degree',
                'school' => 'School'
            ],*/