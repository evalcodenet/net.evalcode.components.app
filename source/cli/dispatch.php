<?php


namespace Components;


  // INCLUDES
  require_once dirname(__DIR__).'/cli.php';


  /**
   * App_Cli_Dispatch
   *
   * @package net.evalcode.components.app
   * @subpackage cli
   *
   * @author evalcode.net
   */
  class App_Cli_Dispatch extends App_Cli
  {
    // STATIC ACCESSORS
    public static function run()
    {
      $cli=Http_Cli::get();
      $cli->attach(Io::stdin(), Io::stdout(), Io::stderr());
      $cli->run();
    }
    //--------------------------------------------------------------------------
  }
?>
