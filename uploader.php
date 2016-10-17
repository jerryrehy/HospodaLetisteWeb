<?php
  $bool = false;
  if(isset($_FILES['file'])) {
    $count=count((array)$_FILES['file']['tmp_name']);
    for($i=0; $i<$count; $i++) {    
      if(@move_uploaded_file($_FILES['file']['tmp_name'][$i], './obr/'.$_FILES['file']['name'][$i]))
      {
        $bool = true; 
      }else
      {
        $bool = false;
        break;
      }
    }
    if(bool == true){
      header('Location: index.php?page=upload&navi=22&u=1');
    }else{
      header('Location: index.php?page=upload&navi=22&u=0');
    }
  }
?>