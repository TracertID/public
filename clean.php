<?php 
    // creating a directory named gfg 
    $dirname = "uploads"; 
    $kode = $_GET['kode'];
    rmdir($dirname);
    
    // removing directory using rmdir() 
    if(rmdir($dirname)) { 
       header('Location: ../public');
    } 
    else { 
       echo ("\r\n" . $dirname . " couldn't be removed"); 
    } 
?> 
