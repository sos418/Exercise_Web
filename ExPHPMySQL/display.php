<?php
    
    $conn=mysql_pconnect("127.0.0.1","root","");        
    mysql_select_db("cccmyDB");
    mysql_query("SET NAMES'utf8'");
                    
    $sql=sprintf("select * from persons where id=$_POST[test]");
            
    $result=mysql_query($sql);     

    if($row=mysql_fetch_assoc($result)){    


        header("Content-type: image/jpeg");
        $im=imagecreatefromstring($row['image']);

        $text_color=imagecolorallocate($im,233,14,91);

        imagestring($im,5,5,5,"NAME:".$row['name'],$text_color);
        imagestring($im,5,5,50,"STUDENTID:".$row['studentId'],$text_color);
        imagefilter($im, IMG_FILTER_GRAYSCALE);
        imagejpeg($im);
        imagedestroy($im);

    }
    
    mysql_close($conn);
?>

