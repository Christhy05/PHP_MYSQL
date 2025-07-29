<?php
    include 'connection.php';
    /*$sql = "select * from CD";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo'<br>'.$row['cdID'].'<br>'.
            $row['artID'].'<br>'.$row['cdTitle'].
            $row['cdPrice'].'<br>'.$row['cdGenre'].
            '<br>'.$row['cdRating'].'<br>'.$row['cdYear'].'<br><br>';
        }
    }
    else{
        echo 'something is wrong';
    }*/

    /*$sql = "select cdRating,cdTitle
            from CD
            order by cdRating asc";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo '<br>'.$row['cdRating'].'<br>'.$row['cdTitle'].'<br><br>';
        }
    }
    else{
        echo 'something wrong';
    }*/

    /*$sql ="select cdGenre,cdTitle,cdRating,cdPrice
            from CD
            group by cdGenre";
    $res = $conn->query($sql);
    if($res->num_rows>0){
        while($r = $res->fetch_assoc()){
            echo '<br>'.$r['cdGenre'].'<br>'.
            $r['cdTitle'].'<br>'.$r['cdRating'].'<br>'.$r['cdPrice'].'<br><br>';
        }
    }
    else{
        echo 'fales';
    }*/
    $sql ="Delete from CD
           where cdId=7 or cdID=8";
    $sel ='select * from CD';
    $res = $conn->query($sel);
    if($conn->query($sql)){
        echo '<br>Deleted Successfully<br>';
        if($res->num_rows>0){
            while($row = $res->fetch_assoc()){
                echo $row['cdID'].'<br>'.$row['artID'].'<br>'
                .$row['cdTitle'].'<br>'.$row['cdPrice'].'<br>'.
                $row['cdGenre'].'<br>'.$row['cdRating'].'<br>'.
                $row['cdYear'].'<br><br>';
            }
        }
        else{
            echo 'Cant view the Data';
        }
    }
    else{
        echo 'Deletion is unsuccess';
    }
    

    /*$sql = "update Artist
            set artname = 'kevin'
            where artID = 8 ";
    $view = "select * from Artist";
    $result = $conn->query($view);
    if($conn->query($sql)){
        echo '<br> update sucessfully';
        if($result->num_rows>0){
            while($data = $result->fetch_assoc()){
                echo $data['artID'].'<br>'.$data['artname'].'<br>'.
                $data['artNatioality'].'<br><br>';
            }
        }
        else{
            echo 'cant view the date';
        }
    }
    else{
        echo 'Unsuccess update';
    }*/
    ?>