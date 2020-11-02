<?php
    $link = mysqli_connect('localhost', 'admin', 'admin', 'world');
    
    if(mysqli_connect_errno()){
        echo "MariaDB 접속에 실패했습니다. 관리자에게 문의하세요.";
        echo "<br>";
        echo mysqli_connect_error();
        exit();
    }

    $query = "
    select name 
    from city 
    where population > 5000000;
    ";

    $result = mysqli_query($link, $query);

    $article = '';
    while($row = mysqli_fetch_array($result)){
        $article .= '<tr><td>';
        $article .= $row['name'];
        $article .= '</td><td>';
    }

    mysqli_free_result($result);
    mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 전 세계 대도시 </title>
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
        <h2><a href="index.php">전 세계 대도시 정보</a> | 전 세계에서 인구가 500만 이상인 도시</h2>
        <table>
            <tr>
                <th>name</th>
            </tr>
            <?= $article ?>
        </table>
</body>
</html>