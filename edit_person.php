<center>
    <div class="content-wrapper">

        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>กำลังแก้ไขข้อมูลของคุณ ....</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <?php if (isset($_POST['bt_edit_person'])) {
                        $perid = $_POST['perid'];
                        $perfname = $_POST['perfname'];
                        $perlname = $_POST['perlname'];

                        $perlevel = $_POST['perlevel'];
                        $ori_perpic = $_POST['ori_perpic'];
                        $perpic = $_FILES['perpic']['name'];

                        if($perpic<>""){
                            move_uploaded_file($_FILES['perpic']['tmp_name'],"pic/".$_FILES['perpic']['name']);
                            $img="pic/".$_FILES['perpic']['name'];
                        }else{
                            $img="$ori_perpic";
                        }

                        if($perlevel == '1'){
                        $sql = "UPDATE admin SET admin_fname='$perfname', admin_lname='$perlname', admin_img='$img' WHERE admin_id='$perid' ";
                        $res = mysqli_query($con, $sql);
                        }else if($perlevel == '2'){
                            $perphone = $_POST['perphone'];
                            $sql = "UPDATE member SET mem_fname='$perfname', mem_lname='$perlname', mem_phone='$perphone', mem_img='$img' WHERE mem_id='$perid' ";
                            $res = mysqli_query($con, $sql);
                        }else if($perlevel == '3'){
                            $sql = "UPDATE officer SET officer_fname='$perfname', officer_lname='$perlname', officer_img='$img' WHERE officer_id='$perid' ";
                            $res = mysqli_query($con, $sql);
                        }

                        echo 'กำลังแก้ไขข้อมูลของคุณ .... ';
                        echo '<meta http-equiv="refresh"content="2;url=index.php">';
                    }

                    ?>

                </div>

            </div>
        </div>
    </div>
</center>
<!-- /.login-box -->