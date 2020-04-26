<?php
    include "../config/koneksi.php";
   
    $sel_prog="select * from sub_program where id_program='".$_POST["id_program"]."'";
    $q=mysql_query($sel_prog);
    while($data_prog=mysql_fetch_array($q)){
   
    ?>
        <option value="<?php echo $data_prog["id_sub_program"] ?>"><?php echo $data_prog["nama_sub_program"] ?></option><br>
   
<?php
    }
?>