<?php


  $root=dirname(dirname(__DIR__));


  \Components\Environment::push(
    \Components\Environment::create()
      ->setPathApplication("$root/app")
      ->setPathComponents($root)
      ->setPathConfig("$root/app/config")
      ->setPathResource("$root/app/resource")
      ->setUriComponents('/')
      ->setUriResource('/resource')
  );
?>
