<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ลงทะเบียนรับวัคซีน</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
            <li class="breadcrumb-item active">ลงทะเบียนรับวัคซีน</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  
    <section class="content">
    <form action="index.php?Node=add_reg" method="post">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">กรุณากรอกข้อมูลให้ครบถ้วน</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">เลขประจำตัวประชาชน</label>
                <input type="text" id="inputName" class="form-control" placeholder="เลขประจำตัว13หลัก" name="mem_id" required>
              </div>
              <div class="form-group">
                <label for="inputName">ชื่อ</label>
                <input type="text" id="inputName" class="form-control" placeholder="ชื่อจริง" required name="mem_fname">
              </div>
              <div class="form-group">
                <label for="inputName">นามสกุล</label>
                <input type="text" id="inputName" class="form-control" placeholder="นามสกุล" required name="mem_lname">
              </div>
              <div class="form-group">
                <label for="inputName">วันเดือนปีเกิด</label>
                <input type="date" id="inputName" class="form-control" placeholder="วันเดือนปีเกิด" required name="mem_bd">
              </div>



              <!--    <div class="form-group">
              <label for="inputDescription">Project Description</label>
              <textarea id="inputDescription" class="form-control" rows="4"></textarea>
            </div> -->
              <div class="form-group">
                <label for="inputStatus">เพศ</label>
                <select id="inputStatus" class="form-control custom-select" required name="mem_sex">
                  <option value="">กรุณาเลือก</option>
                  <option value="f">F (หญิง)</option>
                  <option value="m">M (ชาย)</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">เบอร์ติดต่อ</label>
                <input type="text" id="inputName" class="form-control" placeholder="เบอร์ติดต่อ" required name="mem_phone">
              </div>
              <div class="form-group">
                <label for="inputName">รหัสผ่าน</label>
                <input type="text" id="inputName" class="form-control" placeholder="รหัสผ่าน" required name="mem_pass">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <a href="index.php?Node=frmreg" class="btn btn-secondary">ยกเลิก</a>
        <input type="submit" value="ลงทะเบียน" class="btn btn-success float-right" name="btreg">
      </div>
      </form>
    </section>
  

</div>
</div>



<br>
<!-- /.content -->