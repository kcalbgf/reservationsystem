<?php
session_start();
require("mysql\connect.php");
if(isset($_POST["username"])!=""){
    $username = $_POST["username"];
    $password = ($_POST["password"]);

    $check_login = "select Student_id,Student_password,Student_fname,Student_lname from student_info where Student_id = '".$username."' and Student_password = '".$password."'";
    $result = $con->query($check_login);
    $row = $result->fetch_assoc();
   	if($row["Student_id"] != ""){
            $_SESSION["USE_Student_id"] = $row["Student_id"];
            $_SESSION["USE_fname"] = $row["Student_fname"];
            $_SESSION["USE_lname"] = $row["Student_lname"];
            $Student_fname = $row["Student_fname"];
            $Student_lname = $row["Student_lname"];
            echo "<script>";
            echo "alert('ยินดีต้อนรับ $Student_fname $Student_lname');";  
            echo "window.location.href = 'index_student.php';";
            echo "</script>"; 
    }else{
      echo "<script>";
      echo "alert('ชื่อผู้ใช้งานหรือรหัสผ่านผิด');"; 
      echo "window.history.back()";
      echo "</script>";  
    }
}else{
    header("Location: index.php");
}


?>
