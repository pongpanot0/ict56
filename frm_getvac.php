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
    <form action="index.php?Node=insertgetvac" method="post">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">กรุณากรอกข้อมูลให้ครบถ้วน</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">เลขประจำตัวผู้รับวัคซีน</label>
                <input type="text" id="inputName" class="form-control" placeholder="เลขประจำตัว13หลัก" name="getvac_mem" required>
              </div>
              <div class="form-group">
                <label for="inputName">วันที่รับวัคซีน</label>
                <input type="date" id="inputName" class="form-control" placeholder="วันที่รับวัคซีน" required name="getvac_date">
              </div>
              <div class="form-group">
                <label for="inputName">เข็มที่</label>
                <input type="text" id="inputName" class="form-control" placeholder="เข็มที่" required name="getvac_seq">
              </div>
              <div class="form-group">
                <label for="inputName">นัมเบอร์วัคซีน</label>
                <input type="text" id="inputName" class="form-control"  placeholder="นัมเบอร์วัคซีน" required name="getvac_vacid">
              </div>
              <div class="form-group">
                <label for="inputName">เจ้าหน้าที่ผู้บันทึกข้อมูล</label>
                <input type="text" value="<?= $name;?>" id="inputName" readonly class="form-control" placeholder="เจ้าหน้าที่ผู้บันทึกข้อมูล" required>
              </div>
              <div class="form-group">
                <label for="inputName">หน่วยบริการ/โรงพยาบาล</label>
                <input readonly value="<?= $hos_name; ?>" type="text" id="inputName" class="form-control" placeholder="หน่วยบริการ/โรงพยาบาล" required >
              </div>
              <input type="hidden" value="<?= $hos_id; ?>" name="getvac_hosid">
              <input type="hidden" value="<?= $id; ?>"  name="getvac_officerid">
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <a href="index.php?Node=frmgetvac" class="btn btn-secondary">ยกเลิก</a>
        <input type="submit"  value="บันทึกข้อมูล" class="btn btn-success float-right" name="btgetvac">
      </div>
      </form>
    </section>
  

</div>
</div>



<br>
<!-- /.content -->