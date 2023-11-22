<!-- run.php -->
<?php
    session_start();
    require ('../application/core/database.php');

    spl_autoload_register(
        function($class){
            require_once $class.'.php';
        }
    );
    spl_autoload_register(function ($filename) {
      $file = '..' . DIRECTORY_SEPARATOR . $filename . '.php';
      if ( DIRECTORY_SEPARATOR === '/' ):
        $file = str_replace('\\', '/', $file);
      endif;
    
      if ( file_exists($file) ):
        require $file;
      else:
        echo 'Erro ao importar o arquivo!' ;
      endif;
    });
?>
