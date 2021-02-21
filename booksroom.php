<?php
    $sql="SELECT * FROM books"
    ."LEFT JOIN rooms ON books.roomid = rooms.roomid"
    ."WHERE books.checkin = '$checkin' AND books.booktel = '$booktel' AND books.bookstatus = '1'";

    $result=$conn -> query($sql);
    

