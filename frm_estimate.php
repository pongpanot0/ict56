<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>บันทึกข้อมูลการรับวัคซีน</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">บันทึกข้อมูลการรับวัคซีน</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">
        <form action="index.php?Node=insert_estimate" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <?php if (isset($_GET['IDMEM'])) {
                            $IDMEM = $_GET['IDMEM'];
                            $sql = "select * from getvaccine where getvac_id='$IDMEM' ";
                            $res = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($res);
                            $getvac_seq = $row['getvac_seq'];
                            
                        } {
                        ?>
                            <div class="card-header">
                                <h3 class="card-title">แบบประเมินหลังการฉีดวัคซีน เข็มที่ : <?= $getvac_seq; ?></h3>
                            </div>
                            <div class="card-body">
                                <h3>กรุณากรอกข้อมูลให้ครบถ้วน</h3>
                                <br>
                                <div class="form-group">
                                    <label for="inputName">ปวด บวม แดง ร้อน บริเวณที่ฉีด</label>
                                    <select id="inputName" name="es_topic1" class="form-control form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>กรุณาเลือกข้อมูล</option>
                                        <option value="มีอาการ">มีอาการ</option>
                                        <option value="ไม่มีอาการ">ไม่มีอาการ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">ไข้ ปวดศรีษะ เหนื่อย อ่อนเพลีย</label>

                                    <select id="inputName" name="es_topic2" class="form-control form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>กรุณาเลือกข้อมูล</option>
                                        <option value="มีอาการ">มีอาการ</option>
                                        <option value="ไม่มีอาการ">ไม่มีอาการ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">ปวดกล้ามเนื้อ กล้ามเนื้ออ่อนแรง</label>

                                    <select id="inputName" name="es_topic3" class="form-control form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>กรุณาเลือกข้อมูล</option>
                                        <option value="มีอาการ">มีอาการ</option>
                                        <option value="ไม่มีอาการ">ไม่มีอาการ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">คลื่นไส้ อาเจียน ท้องเสีย</label>
                                    <select id="inputName" name="es_topic4" class="form-control form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>กรุณาเลือกข้อมูล</option>
                                        <option value="มีอาการ">มีอาการ</option>
                                        <option value="ไม่มีอาการ">ไม่มีอาการ</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputName">จุดจ้ำเลือด ผื่น</label>
                                    <select id="inputName" name="es_topic5" class="form-control form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>กรุณาเลือกข้อมูล</option>
                                        <option value="มีอาการ">มีอาการ</option>
                                        <option value="ไม่มีอาการ">ไม่มีอาการ</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" value="<?= $IDMEM;?>" type="text" id="inputName" name="es_getvacid">
                                </div>
                            <?php } ?>
                            <div class="form-group">

                                <input class="form-control" value="<?= $id; ?>" type="text" id="inputName" name="es_memid">
                            </div>



                            </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a href="index.php?Node=frmgetvac" class="btn btn-secondary">ยกเลิก</a>
                <input type="submit" value="บันทึกข้อมูล" class="btn btn-success float-right" name="btestimate">
            </div>
        </form>
    </section>


</div>
</div>



<br>
<!-- /.content -->