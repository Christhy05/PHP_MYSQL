<?php
    include 'connection.php';
    $sql = "create table Artist(
            artID int primary key,artname varchar(80),
            artNatioality varchar (30))";
    $sql1 = "create table CD(
            cdID int primary key,artID int,
            cdTitle varchar(50),cdPrice decimal(5,2),cdGenre varchar(30),
            cdRating int,cdYear year,
            foreign key (artID) references Artist(artID))";
    
    if($conn->query($sql)){
        echo '<br>successfully Artist table created';
    }
    else{
        echo '<br>unsuccess creation(Artist)';
    }
    if($conn->query($sql1)){
        echo '<br>successfully CD table created';
    }
    else{
         echo 'unsuccess creation(CD)';
    }
?>