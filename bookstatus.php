<?php
    $sql="UPDATE books SET bookstatus='$bookstatus' WHERE roomid='$roomid' AND checkin='$checkin' AND bookstatus='1'";
    $result=$conn -> query($sql);

    if($result==1)
    {
        $msg="การอัพเดตสถานะเสร็จสิ้น";
    }
    else
    {
        $msg="การอัพเดตสถานะเกิดข้อผิดพลาด";
    }
    ?>

    <script>
        alert('<?php echo $msg?>')
    </script>