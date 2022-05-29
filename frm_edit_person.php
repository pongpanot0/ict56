<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>แก้ไขข้อมูลผู้ลงทะเบียนรับวัคซีน</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลผู้ลงทะเบียนรับวัคซีน</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php
    if (isset($_GET['IDPER'])) {

        $IDPER = $_GET['IDPER'];
        $user = $_SESSION['usr'];
        $sql1 = "select * from admin where admin_id='$IDPER'";
        $res1 = mysqli_query($con, $sql1);
        $row1 = mysqli_num_rows($res1);
        $sql2 = "select * from member where mem_id='$IDPER'";
        $res2 = mysqli_query($con, $sql2);
        $row2 = mysqli_num_rows($res2);
        $sql3 = "select * from officer where officer_id='$IDPER'";
        $res3 = mysqli_query($con, $sql3);
        $row3 = mysqli_num_rows($res3);
        if ($row1 > 0) {
            $row11 = mysqli_fetch_assoc($res1);
            $id = $row11['admin_id'];
            $fname = $row11['admin_fname'];
            $lname = $row11['admin_lname'];
            $pic = $row11['admin_img'];
            $level = $row11['admin_level'];
        } else if ($row2 > 0) {
            $row22 = mysqli_fetch_assoc($res2);
            $id = $row22['mem_id'];
            $fname = $row22['mem_fname'];
            $lname = $row22['mem_lname'];
            $pic = $row22['mem_img'];
            $phone = $row22['mem_phone'];
            $level = $row22['mem_level'];

        } else if ($row3 > 0) {
            $row33 = mysqli_fetch_assoc($res3);
            $id = $row33['officer_id'];
            $fname = $row33['officer_fname'];
            $lname = $row33['officer_lname'];
            $pic = $row33['officer_img'];
            $level = $row33['officer_level'];
        }
        
    }

    ?>
    <form action="index.php?Node=editperson" method="post" enctype="multipart/form-data">
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">กรุณาปรับปรุงข้อมูลให้ถูกต้อง</h3>
                        </div>
                        <div class="card-body">
                            <img src="<?= $pic; ?>" width="80px" alt="">
                            <div class="form-group">
                                <label for="inputName">เลขประจำตัวประชาชน</label>
                                <input type="text" readonly='' value="<?= $id; ?>" id="inputName" class="form-control" placeholder="เลขประจำตัว13หลัก" name="perid" require>
                            </div>
                            <div class="form-group">
                                <label for="inputName">ชื่อ</label>
                                <input type="text" value="<?= $fname; ?>" id="inputName" class="form-control" placeholder="ชื่อจริง" require name="perfname">
                            </div>
                            <div class="form-group">
                                <label for="inputName">นามสกุล</label>
                                <input type="text" value="<?= $lname; ?>" id="inputName" class="form-control" placeholder="นามสกุล" require name="perlname">
                            </div>
                            <?php 
                            if($row2 >0 )
                            {
                            ?>
                            <div class="form-group">
                                <label for="inputName">เบอร์ติดต่อ</label>
                                <input type="text" value="<?= $phone; ?>" id="inputName" class="form-control" placeholder="เบอร์ติดต่อ"  name="perphone">
                            </div>
                            <?php 
                            }
                            ?>
                            <div class="form-group">
                                <label for="inputName">รูปภาพ</label>
                                <input type="file" value="<?= $pic; ?>" id="inputName" class="form-control" placeholder="รูปภาพ" require name="perpic">

                                <input type="hidden" value="<?= $pic; ?>" id="inputName" class="form-control" placeholder="รูปภาพ" require name="ori_perpic">
                                <input type="hidden" value="<?= $level; ?>" id="inputName" class="form-control" placeholder="รูปภาพ" require name="perlevel">
                            </div>
                        </div>
                    </div>

                    <!--    <div class="form-group">
              <label for="inputName">รูปภาพ</label>
              <input type="text" id="inputName" class="form-control">
            </div> -->
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-12">
                <a href="index.php" class="btn btn-secondary">ยกเลิก</a>
                <input type="submit" value="แก้ไขข้อมูล" class="btn btn-success float-right" name="bt_edit_person">
            </div>
        </section>
    </form>

</div>
</div>



<br>
<!-- /.content -->