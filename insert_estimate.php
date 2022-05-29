<center>
    <div class="content-wrapper">

        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>กำลังบันทึกข้อมูลการรับวัคซีน222 ....</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <?php if (isset($_POST['btestimate'])) {
                        $es_topic1 = $_POST['es_topic1'];
                        $es_topic2 = $_POST['es_topic2'];
                        $es_topic3 = $_POST['es_topic3'];
                        $es_topic4 = $_POST['es_topic4'];
                        $es_topic5 = $_POST['es_topic5'];
                        $es_getvacid = $_POST['es_getvacid'];
                        $es_memid = $_POST['es_memid'];
                        $sql = "INSERT INTO estimate (es_topic1,es_topic2,es_topic3,es_topic4,es_topic5,es_getvacid,es_memid) VALUES ('$es_topic1','$es_topic2','$es_topic3','$es_topic4','$es_topic5','$es_getvacid','$es_memid')";
                        $res = mysqli_query($con, $sql);
                        echo 'กำลังบันทึกข้อมูลการรับวัคซีน .... ';
                        echo '<meta http-equiv="refresh"content="2;url=index.php?Node=managefrm_estimate">';
                    }
                    ?>

                </div>

            </div>
        </div>
    </div>
</center>
<!-- /.login-box -->