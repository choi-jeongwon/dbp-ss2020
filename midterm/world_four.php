<?php
    $link = mysqli_connect('localhost', 'admin', 'admin', 'world');
    
    if(mysqli_connect_errno()){
        echo "MariaDB 접속에 실패했습니다. 관리자에게 문의하세요.";
        echo "<br>";
        echo mysqli_connect_error();
        exit();
    }

    $query = "
    SELECT MIN(population), MAX(population), SUM(population), AVG(population) 
    FROM city 
    WHERE countrycode = 'KOR';
    ";

    $result = mysqli_query($link, $query);

    $article = '';
    while($row = mysqli_fetch_array($result)){
        $article .= '<tr><td>';
        $article .= $row['MIN(population)'];
        $article .= '</td><td>';
        $article .= $row['MAX(population)'];
        $article .= '</td><td>';
        $article .= $row['SUM(population)'];
        $article .= '</td><td>';
        $article .= $row['AVG(population)'];
        $article .= '</td><td>';
    }

    mysqli_free_result($result);
    mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 도시 인구의 여러 값 </title>
    <style>
        body{
            font-family: Consolas, monospace;
            font-family: 12px;
        }
        table{
            width: 100%;
        }
        th,td{
            padding: 10px;
            border-bottom: 1px solid #dadada;
        }
    </style>
</head>
<body>
        <h2><a href="index.php">대한민국 도시 정보</a> | 각 도시 인구의 최소,최대,합계,평균값</h2>
        <table>
            <tr>
                <th>MIN(population)</th>
                <th>MAX(population)</th>
                <th>SUM(population)</th>
                <th>AVG(population)</th>
            </tr>
            <?= $article ?>
        </table>
</body>
</html>