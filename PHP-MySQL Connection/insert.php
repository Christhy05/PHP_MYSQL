<?php
    include 'connection.php';
    $sql1 = "insert into Artist values 
            (1, 'muse', 'british'),
            (2, 'mr.scruff', 'british'),
            (3, 'deadmau5', 'canadian'),
            (4, 'markRonson', 'british'),
            (5, 'markRonson', 'british'),
            (6, 'animal collective', 'american'),
            (7, 'kings of leon', 'american'),
            (8, 'maroon5', 'american')";
    
    $sql2 = "insert into CD values 
    (1,1,'Black Holes and Revelations',9.99,'Rock',78,2006),
    (2,1,'The Resistance',11.99,'Rock',90,2009),
    (3,2,'Ninja Tuna',9.99,'Electronics',55,2008),
    (4,3,'For Lack of a better Name',9.99,'Electro House',38,2009),
    (5,4,'version',11.99,'Rock',77,2007),
    (6,5,'record collection',12.99,'Pop',22,2010),
    (7,6,'merriweather post pavillion',12.99,'Electronics',82,2009),
    (8,7,'only by the night',9.99,'Rock',67,2008),
    (9,7,'come around sundown',12.99,'Rock',31,2010),
    (10,8,'Hands all over',11.99,'Pop',64,2010)";
    
    if($conn->query($sql1)){
        echo '<br>insert successfully to the Artist ';
    }
    else{
        echo '<br>Unsccess insertion to Artist';
    }
    if($conn->query($sql2)){
        echo '<br>insert successfully to the CD';
    }
    else{
        echo '<br>Unsccess insertion to CD';
    }
?>