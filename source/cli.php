<?php


namespace Components;


  // INCLUDES
  require_once dirname(dirname(__DIR__)).'/runtime/source/runtime.php';


  /**
   * App_Cli
   *
   * @package net.evalcode.components.app
   *
   * @author evalcode.net
   */
  class App_Cli
  {
    // STATIC ACCESSORS
    public static function initialize()
    {
      runtime_bootstrap();

      static::run();
    }
    //--------------------------------------------------------------------------
  }
?>
