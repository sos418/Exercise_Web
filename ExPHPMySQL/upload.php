<?php

    $filename=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    $filetype=$_FILES['image']['type'];
    $filesize=$_FILES['image']['size'];    
    $file=NULL;
    

    if(isset($_FILES['image']['error'])){    
        if($_FILES['image']['error']==0){                                    
            $instr = fopen($tmpname,"rb" );
            $file = addslashes(fread($instr,filesize($tmpname)));        
        }
    }
    

    $conn=mysql_pconnect("127.0.0.1","root","");        
    mysql_select_db("cccmyDB");
    mysql_query("SET NAMES'utf8'");
                 

	$sql=sprintf("insert into persons(name,studentId,image)values('$_GET[name]','$_GET[studentId]',%s)","'".$file."'");


    mysql_query($sql);    
    mysql_close($conn);

    echo "上傳成功";

    header("refresh:3; url=form.html"); 
    
?>