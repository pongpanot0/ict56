<center>
    <div class="content-wrapper">

        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>กำลังแก้ไขข้อมูลของคุณ ....</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <?php if (isset($_POST['bt_edit_reg'])) {
                        $mem_id = $_POST['mem_id'];
                        $mem_fname = $_POST['mem_fname'];
                        $mem_lname = $_POST['mem_lname'];
                        $mem_phone = $_POST['mem_phone'];
                        $mem_pass = $_POST['mem_pass'];
                        $sql = "UPDATE member SET mem_fname='$mem_fname', mem_lname='$mem_lname', mem_phone='$mem_phone', mem_pass='$mem_pass' WHERE mem_id='$mem_id' ";
                        $res = mysqli_query($con, $sql);
                        echo 'กำลังแก้ไขข้อมูลของคุณ .... ';
                        echo '<meta http-equiv="refresh"content="2;url=index.php?Node=managemem">';
                    }

                    ?>

                </div>

            </div>
        </div>
    </div>
</center>
<!-- /.login-box -->