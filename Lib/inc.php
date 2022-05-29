<?php

include_once("condb.php");

function ViewContent($Node=""){
    if($Node==""){return "das.php";}
    else if($Node=="das"){return"das.php";}
    else if($Node=="frm_login"){return"frmlogin.php";}
    else if($Node=="chklog"){return"chklogin.php";}
    else if($Node=="lout"){return"logout.php";}
    else if($Node=="frmreg"){return"frmregis.php";}
    else if($Node=="add_reg"){return"insertreg.php";}
    else if($Node=="managemem"){return"managemem.php";}
    else if($Node=="delmem"){return"delete.php";}
    else if($Node=="editmem"){return"formeditregis.php";}
    else if($Node=="editreg"){return"edit_reg.php";}
    else if($Node=="edit_person"){return"frm_edit_person.php";}
    else if($Node=="editperson"){return"edit_person.php";}
    else if($Node=="frmgetvac"){return"frm_getvac.php";}
    else if($Node=="insertgetvac"){return"insertgetvac.php";}
    else if($Node=="managegetvac"){return"managegetvac.php";}
    else if($Node=="hisvac"){return"his_vaccine.php";}
    else if($Node=="docvac"){return"doc_vacine.php";}
    else if($Node=="manageestimate"){return"manageestimate.php";}
    else if($Node=="frm_estimate"){return"frm_estimate.php";}
    else if($Node=="insert_estimate"){return"insert_estimate.php";}
    else if($Node=="managefrm_estimate"){return"managefrm_estimate.php";}
    {return "index.php";}
}

function isOnline(){
    if(isset($_SESSION['usr']) && isset($_SESSION['pwd'])){
        return true;
    }else{ 
        return false;
    }
    
}
function Admin($usr=0,$pwd=0,$con=0){
    $sql="select * from admin where admin_id='$usr' and admin_pass='$pwd' ";
    $res= mysqli_query($con,$sql);
    if(mysqli_num_rows($res) < 1){
        return false;
    }else{
        $info=mysqli_fetch_assoc($res);
        return $info['admin_level']==1 ? true : false;
    }
}
function User($usr=0,$pwd=0,$con=0){
    $sql="select * from member where mem_id='$usr' and mem_pass='$pwd' ";
    $res= mysqli_query($con,$sql);
    if(mysqli_num_rows($res) < 1){
        return false;
    }else{
        $info=mysqli_fetch_assoc($res);
        return $info['mem_level']==2 ? true : false;
    }
}
function Officer($usr=0,$pwd=0,$con=0){
    $sql="select * from officer where officer_id='$usr' and officer_pass='$pwd' ";
    $res= mysqli_query($con,$sql);
    if(mysqli_num_rows($res) < 1){
        return false;
    }else{
        $info=mysqli_fetch_assoc($res);
        return $info['officer_level']==3 ? true : false;
    }
}


?>