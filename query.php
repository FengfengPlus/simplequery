
<?php              
                     
    //error_reporting(E_ALL^E_NOTICE^E_WARNING^E_DEPRECATED);
    $pre=$_POST['data'];

    $link = mysqli_connect('localhost', 'root', '', '');//链接数据库

    $result = mysqli_query($link,"SELECT fi FROM main WHERE pr='$pre'");//可更改select语句
    
    while($row = mysqli_fetch_array($result))
    {
        echo $row['fi'] ;
    }

?>

