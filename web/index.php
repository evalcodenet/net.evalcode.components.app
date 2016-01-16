<?php


  // INCLUDES
  require_once dirname(dirname(__DIR__)).'/runtime/source/runtime.php';


  // DISPATCH REQUEST
  runtime_bootstrap();

  $context=Components\Http_Scriptlet_Context::push(
    new Components\Http_Scriptlet_Context(Components\Environment::uriComponents())
  );
  $context->dispatch(Components\Uri::currentHttpRequestUri());
  //----------------------------------------------------------------------------
?>
