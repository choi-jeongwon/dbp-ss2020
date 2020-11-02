<?php
    $link = mysqli_connect('localhost', 'admin', 'admin', 'world');
    
    if(mysqli_connect_errno()){
        echo "MariaDB 접속에 실패했습니다. 관리자에게 문의하세요.";
        echo "<br>";
        echo mysqli_connect_error();
        exit();
    }

    $query = "
    SELECT district, count(*) 
    FROM city 
    WHERE countrycode='KOR' 
    GROUP BY district;
    ";

    $result = mysqli_query($link, $query);

    $article = '';
    while($row = mysqli_fetch_array($result)){
        $article .= '<tr><td>';
        $article .= $row['district'];
        $article .= '</td><td>';
        $article .= $row['count(*)'];
        $article .= '</td><td>';
    }

    mysqli_free_result($result);
    mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 행정구역별 등록된 도시의 수 </title>
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
        <h2><a href="index.php">대한민국 도시 정보</a> | 행정구역별 등록된 도시의 수</h2>
        <table>
            <tr>
                <th>district</th>
                <th>count(*)</th>
            </tr>
            <?= $article ?>
        </table>
</body>
</html>