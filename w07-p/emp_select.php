<?php
    $link = mysqli_connect("localhost", "admin", "admin", "employees");
    $query1 = "SELECT emp_no FROM employees";
    $result1 = mysqli_query($link, $query1);
    $num = mysqli_num_rows($result1); // 총 데이터 수

    
    
    $query2 = "SELECT * FROM employees ORDER BY emp_no DESC LIMIT 10";
   
    
    $result2 = mysqli_query($link, $query2);
    // print_r($result2);
    //$row2 = mysqli_fetch_array($result2); //print_r($row2);
    
    $emp_info = '';
    while($row2 = mysqli_fetch_array($result2)) {
        $emp_info .= '<tr>';
        $emp_info .= '<td>'.$row2['emp_no'].'</td>';// $emp_info = $emp_info + 1
        $emp_info .= '<td>'.$row2['birth_date'].'</td>';
        $emp_info .= '<td>'.$row2['first_name'].'</td>';
        $emp_info .= '<td>'.$row2['last_name'].'</td>';
        $emp_info .= '<td>'.$row2['gender'].'</td>';
        $emp_info .= '<td>'.$row2['hire_date'].'</td>';
        $emp_info .= '<td><a href="emp_update.php?emp_no='.$row2['emp_no'].'">update</a></td>';
        $emp_info .= '<td><a href="emp_delete.php?emp_no='.$row2['emp_no'].'">delete</a></td>';
        $emp_info .= '</tr>';
    }
   
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 직원 관리 시스템 </title>
</head>

<body>
    <h2><a href="index.php">직원 관리 시스템</a> | 직원 정보 조회</h2>
    <br><br>
    이 회사의 직원은 총 <?=$num?>명 입니다. <br><br>
    <table border="1">
        <tr>
            <th>emp_no</th>
            <th>birth_date</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>gender</th>
            <th>hire_date</th>
            <th>update</th>
            <th>delete</th>
        </tr>
        <?=$emp_info?>
    </table>

</body>

</html>