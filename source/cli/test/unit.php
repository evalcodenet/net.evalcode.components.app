<?php


namespace Components;


  // INCLUDES
  require_once dirname(dirname(__DIR__)).'/cli.php';


  /**
   * App_Cli_Test_Unit
   *
   * @package net.evalcode.components.app
   * @subpackage cli.test
   *
   * @author evalcode.net
   */
  class App_Cli_Test_Unit extends App_Cli
  {
    // STATIC ACCESSORS
    public static function run()
    {
      $cli=Test_Cli::get();
      $cli->attach(Io::stdin(), Io::stdout(), Io::stderr());
      $cli->run();
    }
    //--------------------------------------------------------------------------
  }
?>
