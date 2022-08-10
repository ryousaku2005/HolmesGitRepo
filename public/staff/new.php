<?php include('../../private/initialize.php') ?>
<?php
  // error_404();
  // error_500();
  // redirect_to('staff/index.php');

  // I will have a query parameter called test
  // $param = isset($_GET['test'])?$_GET['test']:''; // OR YOU COULD USE A SHORT FORM ( both are the same. )
  $param = $_GET['test']?? '';
  // echo $param;

  // if test value is 404, then I should be notified with 404 error
  if($param == '404'){
    error_404();
  }

  // if test value is 500, then I should be notified with 500 error
  elseif($param == '500'){
  error_500();
  }

  // if test value is redirect, then I should be redirect ot hte responding to the certain page
  elseif($param == 'redirect'){
    redirect_to('staff/index.php');
  }

  // else 'No error'
  else{
    echo 'No error';
  }
?>