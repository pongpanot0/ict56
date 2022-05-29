<center>
    <div class="content-wrapper">

        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>กำลังลบข้อมูลการลงทะเบียนรับวัคซีนของคุณ...</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">

                    <?php
                    if (isset($_GET['IDMEM'])) {
                        $IDMEM = $_GET['IDMEM'];

                        $sql = "DELETE FROM member WHERE mem_id='$IDMEM' ";
                        $res = mysqli_query($con, $sql);
                        echo "กรุณารอสักครู่...";
                        echo '<meta http-equiv="refresh" content="4;url=index.php?Node=managemem">';
                    }
                    ?>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div>
</center>
<!-- /.login-box -->