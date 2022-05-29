<center>
    <div class="content-wrapper">

        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>กำลังบันทึกข้อมูลการรับวัคซีน ....</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <?php if (isset($_POST['btgetvac'])) {






                        $getvac_mem = $_POST['getvac_mem'];
                        $getvac_date = $_POST['getvac_date'];
                        $getvac_seq = $_POST['getvac_seq'];
                        $getvac_vacid = $_POST['getvac_vacid'];
                        $getvac_hosid = $_POST['getvac_hosid'];
                        $getvac_officerid = $_POST['getvac_officerid'];
                        $sql = "INSERT INTO getvaccine (getvac_mem, getvac_date, getvac_seq, getvac_vacid, getvac_hosid, getvac_officerid) VALUES ('$getvac_mem', '$getvac_date', '$getvac_seq', '$getvac_vacid', '$getvac_hosid', '$getvac_officerid')";
                        $res = mysqli_query($con, $sql);
                        echo 'กำลังบันทึกข้อมูลการรับวัคซีน .... ';
                        echo '<meta http-equiv="refresh"content="2;url=index.php?Node=managegetvac">';
                    }

                    ?>

                </div>

            </div>
        </div>
    </div>
</center>
<!-- /.login-box -->