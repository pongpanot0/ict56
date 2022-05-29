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
        if (isset($_GET['IDMEM'])) {
        $IDMEM = $_GET['IDMEM'];
        $sql = "SELECT * FROM member WHERE mem_id='$IDMEM' ";
        $res = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($res);
        $mem_id = $row['mem_id'];
        $mem_fname = $row['mem_fname'];
        $mem_lname = $row['mem_lname'];
        $mem_phone = $row['mem_phone'];
        $mem_pass = $row['mem_pass'];
    }

    ?>
    <form action="index.php?Node=editreg" method="post">
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">กรุณากรอกข้อมูลให้ครบถ้วน</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">เลขประจำตัวประชาชน</label>
                                <input type="text" readonly='' value="<?=$mem_id;?>" id="inputName" class="form-control" placeholder="เลขประจำตัว13หลัก" name="mem_id" require>
                            </div>
                            <div class="form-group">
                                <label for="inputName">ชื่อ</label>
                                <input type="text" value="<?=$mem_fname;?>" id="inputName" class="form-control" placeholder="ชื่อจริง" require name="mem_fname">
                            </div>
                            <div class="form-group">
                                <label for="inputName">นามสกุล</label>
                                <input type="text" value="<?=$mem_lname;?>" id="inputName" class="form-control" placeholder="นามสกุล" require name="mem_lname">
                            </div>
                            <div class="form-group">
                                <label for="inputName">เบอร์ติดต่อ</label>
                                <input type="text" value="<?=$mem_phone;?>" id="inputName" class="form-control" placeholder="เบอร์ติดต่อ" require name="mem_phone">
                            </div>
                            <div class="form-group">
                                <label for="inputName">รหัสผ่าน</label>
                                <input type="text" value="<?=$mem_pass;?>" id="inputName" class="form-control" placeholder="รหัสผ่าน" require name="mem_pass">
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
                <a href="index.php?Node=managemem" class="btn btn-secondary">ยกเลิก</a>
                <input type="submit" value="ลงทะเบียน" class="btn btn-success float-right" name="bt_edit_reg">
            </div>
        </section>
    </form>

</div>
</div>



<br>
<!-- /.content -->