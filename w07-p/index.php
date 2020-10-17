<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title> 직원 관리 시스템 </title>
</head>
<body>
 <h1>직원 관리 시스템</h1>
 <form action="emp_employeefilter.php" method="POST">
   (1) 직원 정보 검색 <br>
   <input type="text" name="first_name" placeholder="성">
   <input type="text" name="last_name" placeholder="이름">
   <input type="submit" value="Search">
        </form>
 <a href="emp_select.php">(2) 직원 정보 조회</a><br>
 <a href="emp_insert.php">(3) 신규 직원 등록</a><br>
 <form action="emp_update.php" method="POST">
    (4) 직원 정보 수정 <br>
    <input type="text" name="emp_no" placeholder="emp_no">
    <input type="submit" value="Search">
 </form>
 <form action="emp_delete.php" method="POST">
    (5) 직원 정보 삭제 <br>
    <input type="text" name="emp_no" placeholder="emp_no">
    <input type="submit" value="Delete">
 </form>
 <form action="salary_info.php" method="GET">
      (6) 연봉 정보 
      <input type="text" name="number" placeholder="number">
      <input type="submit" value="Search">
</form>
<a href="dept_info.php">(6) 부서 정보 </a>
 

</body>
</html>