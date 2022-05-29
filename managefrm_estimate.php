<div class="content-wrapper" style="padding-top:25px;padding-left:50px;">
    <?php
    $sql = "select * from getvaccine where getvac_mem='$id' ";
    $res = mysqli_query($con, $sql);
    $chkrow = mysqli_num_rows($res);
    if ($chkrow >= 1) {
    while ($row = mysqli_fetch_assoc($res)) {
        $getvac_seq = $row['getvac_seq'];
        $getvac_id = $row['getvac_id']
    ?>
        <div class="card col-lg-11 border-primary mb-6 col-4">
            <div class="card-header">ประเมินอาการหลังฉีดวัคซีน เข็มที่ : <?= $getvac_seq; ?> </div>
            <div class="card-body">

                <h5 class="card-title">เรียนคุณ : <?= $fname; ?> <?= $lname; ?></h5>
                <br><br>
                <p class="card-text">กรุณากรอกข้อมูลอาการหลังฉีดวัคซีนให้ครบถ้วน</p>
            </div>
            <div class="card-footer bg-transparent border-success"><a href="index.php?Node=frm_estimate&IDMEM=<?=$getvac_seq;?>">กรอกข้อมูล</a></div>
        </div>
    <?php } ?>
    <?php } echo"คุณยังไม่ได้ฉีดวัคซีน" ?>
</div>