<center>
    <div class="content-wrapper">

        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>กำลังบันทึกข้อมูลของคุณ ....</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <?php if (isset($_POST['btreg'])) {
                        $mem_id = $_POST['mem_id'];
                        $mem_fname = $_POST['mem_fname'];
                        $mem_lname = $_POST['mem_lname'];
                        $mem_bd = $_POST['mem_bd'];
                        $mem_sex = $_POST['mem_sex'];
                        $mem_phone = $_POST['mem_phone'];
                        $mem_pass = $_POST['mem_pass'];
                        $sql = "INSERT INTO member (mem_id, mem_fname, mem_lname, mem_bd, mem_sex, mem_phone, mem_img, mem_pass, mem_level) VALUES ('$mem_id','$mem_fname','$mem_lname','$mem_bd','$mem_sex','$mem_phone','pic/r1.jpg','$mem_pass','2')";
                        $res = mysqli_query($con, $sql);
                        echo 'กำลังบันทึกข้อมูลของคุณ .... ';
                        echo '<meta http-equiv="refresh"content="2;url=index.php?Node=frm_login">';
                    }

                    ?>

                </div>

            </div>
        </div>
    </div>
</center>
<!-- /.login-box -->