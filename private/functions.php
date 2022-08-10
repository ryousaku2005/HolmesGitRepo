<?php
  function u($string=''){
    return urlencode($string);
  }

  function h($string=''){
    return htmlspecialchars($string);
  }

  function url_for($script_path=''){
    // echo $_SERVER['SCRIPT_NAME'];
    // extract '/Holmesglen/public' from '/Holmesglen/public/staff/new.php'
    // hint: use strpos, strlen, substr
    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + strlen('/public');
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    // echo $doc_root;
    define('WWW_ROOT', $doc_root);

    if(strlen($script_path) != 0 && $script_path[0] != '/'){
      $script_path = '/'.$script_path;
    }
    return WWW_ROOT.$script_path;
  }

  function error_404(){
    header($_SERVER['SERVER_PROTOCOL']. ' 404 not found');
    exit();
  }

  function error_500(){
    header($_SERVER['SERVER_PROTOCOL']. ' 500 internal server error');
    exit();
  }

  function redirect_to($location){
    header('Location: '. url_for($location));
  }

?>