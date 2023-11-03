<?php
require "db.php";
$p_id=$_GET['id'];
$b_id=$_GET['c'];
$query=mysqli_query($con,"UPDATE booklist
SET pay_aprv=1
WHERE p_id=$p_id AND b_id=$b_id");
$query=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM booklist,persons,userinfo WHERE booklist.p_id=persons.p_id AND booklist.b_id=userinfo.id AND booklist.p_id=$p_id AND booklist.b_id=$b_id"));

$bid=$query["b_id"];
$oid=$query["o_id"];
$b_n=$query["username"];
$b_e=$query["email"];
$b_p=$query["phn"];
$query2=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM userinfo WHERE id=$oid"));
$o_n=$query2["username"];
$o_e=$query2["email"];
$o_p=$query2["phn"];
$addr=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM persons WHERE p_id=$p_id"));
$paddr=$addr["address"];
$s=$query["size"];
$max=$query["max_p"];
$min=$query["min_p"];
$type=$query["p_typ"];
$of_type=$query["of_type"];
$query3=mysqli_query($con,"INSERT INTO history(b_id,b_name,b_email,b_phn,o_id,o_name,o_email,o_phn,p_adr,p_size,p_max,p_min,p_type,p_oftyp)
      VALUES ('$bid','$b_n','$b_e','$b_p','$oid','$o_n','$o_e','$o_p','$paddr','$s','$max','$min','$type','$of_type')");
$query5=mysqli_query($con,"DELETE FROM persons
WHERE p_id=$p_id");
echo "<script>
    alert('Sucessfully payment Done');
    window.location.replace('admin_status.php');
    </script>";
?>