<?php
    $link = mysqli_connect("localhost", "admin", "admin", "employees");
    $filtered = array(
        'first_name' => mysqli_real_escape_string($link, $_POST['first_name']),
        'last_name' => mysqli_real_escape_string($link, $_POST['last_name'])
    );

    $query = "
        SELECT *
        FROM employees
        WHERE first_name = '{$filtered['first_name']}'
        AND last_name = '{$filtered['last_name']}'
    ";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    //print_r($row);
?>

<!DOCTIYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title> 직원 관리 시스템 </title>
    </head>

    <body>
        <h2><a href="index.php">직원 관리 시스템</a> | 직원 정보 검색</h2>
        <form action="index.php" method="POST">
            <label>직원번호: </label>
            <input type="text" name="emp_no" value="<?=$row['emp_no']?>" placeholder="emp_no" readonly><br>
            <label>생년월일: </label>
            <input type="text" name="birth_date" value="<?=$row['birth_date']?>" placeholder="birth_date" readonly><br>
            <label>성: </label>
            <input type="text" name="first_name" value="<?=$row['first_name']?>" placeholder="first_name" readonly><br>
            <label>이름: </label>
            <input type="text" name="last_name" value="<?=$row['last_name']?>" placeholder="last_name" readonly><br>
            <label>성별: </label>
            <input type="text" name="gender" value="<?=$row['gender']?>" placeholder="gender" readonly><br>
            <label>고용일자: </label>
            <input type="text" name="hire_date" value="<?=$row['hire_date']?>" placeholder="hire_date" readonly><br>
            <input type="submit" value="Home">
        </form>
    </body>

    </html>