<?php
    include 'connection.php';
    $sql = 'select * from Artist';
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo '<br>'.$row['artID'].'<br>'.
            $row['artname'].'<br>'.
            $row['artNatioality'].'<br><br>';
        }
    }
    else{
        echo 'something went to wrong';
    }
?>