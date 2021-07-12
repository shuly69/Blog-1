<?php 
 
 return [
     [
         'reg'          => '/^$/',
         'controller'   => 'news',
         'action'       => 'home'
     ],
     [
         'reg'          => '/^blog\/?$/',
         'controller'   => 'news',
         'action'       => 'blog'
     ],
     [
         'reg'          => '/^add\/?$/',
         'controller'   => 'news',
         'action'       => 'add'
     ],
     [
         'reg'          => '/^login\/?$/',
         'controller'   => 'users',
         'action'       => 'login'
     ],
     [
         'reg'          => '/^registration\/?$/',
         'controller'   => 'users',
         'action'       => 'registr'
     ],
     [
         'reg'          => '/^gallery\/?$/',
         'controller'   => 'users',
         'action'       => 'gallery'
     ],
     [
         'reg'          => '/^contacts\/?$/',
         'controller'   => 'users',
         'action'       => 'contacts'
     ],
     [
         'reg'          => '/^logout\/?$/',
         'controller'   => 'users',
         'action'       => 'logout'
     ],
     [
         'reg'          => '/^post\/([1-9]+)\/?$/',
         'controller'   => 'news',
         'action'       => 'one',
         'param'        => ['id' => 1]
     ],
     [
         'reg'          => '/^delete\/([1-9]+)\/?$/',
         'controller'   => 'news',
         'action'       => 'delete',
         'param'        => ['id' => 1]
     ],
     [
         'reg'          => '/^edit\/([1-9]+)\/?$/',
         'controller'   => 'news',
         'action'       => 'edit',
         'param'        => ['id' => 1]
     ],
    ];