<?php include('../../private/initialize.php') ?>
<?php include(SHARED_PATH. '/staff_header.php') ?>
<b>Holmesglen staff site is comming soon</b>

<?php 
  require_once('inc_exc.php')
?>
<?php
  echo'<br>This is expt'
?>
<?php   
  require('inc_exc.php')
?> 

<div id="content">
  <?php

  $subjects=[ 
    ['id'=>1, 'subject'=>'DataScience', 'department'=>'IT', 'accessible'=>'1'],
    ['id'=>2, 'subject'=>'AI', 'department'=>'IT', 'accessible'=>'1'],
    ['id'=>3, 'subject'=>'Machine&Learining', 'department'=>'IT', 'accessible'=>'1'],
    ['id'=>4, 'subject'=>'CyberSecurity', 'department'=>'IT', 'accessible'=>'1']  
  ];

  /*
  echo '<br>';
  echo '<br>';
  echo '<br>';
  $subjects = ['DataScience', 'AI', 'MachineLearning', 'CyberSecurity'];
  echo "The first data item". $subjects[0];
  echo "<br>The number of items in the array is ".count($subjects);
  echo "<br>The last data item is ". $subjects[count($subjects)-1];
  echo "<br>The last data item is ".end($subjects);

  for($i=0; $i<10; $i++){
    echo '<br>i = '.$i;
  }
  echo '<br>';
  echo '<br>';
  echo '<br>';
  for($i=0; $i<count($subjects); $i++){
    echo '<br>subject is '.$subjects[$i];
  }
  echo '<br>';
  echo '<br>';
  echo '<br>';
  foreach($subjects as $subject){
    echo '<br><b>subject is '.$subject. '</b>';
  }
  */

  ?>
 
  <table class='list'>
  <tr>
    <th>ID</th>
    <th>Subject</th>
    <th>Department</th>
    <th>Accessible</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
  <?php foreach($subjects as $subject){ ?>
  <tr> 
      <td><?php echo h($subject['id']) ?></td>
      <td><?php echo h($subject['subject']) ?></td>
      <td><?php echo h($subject['department']) ?></td>
      <!-- $msg = $subject['accessible']=='1' ? 'This subject is accessible' : 'This subject is not accessible'; -->
      <td><?php echo h($subject['accessible']) ?></td>
      <td><a href='<?php echo 'show.php?id='.u($subject['id']).'&subject='.u($subject['subject']) ?>'>View</a></td>
      <td><a href="#">Edit</a></td>
      <td><a href="#">Delete</a></td>
  </tr>
  <?php } ?>
  </table>
</div>

<?php include(SHARED_PATH. '/staff_footer.php') ?>