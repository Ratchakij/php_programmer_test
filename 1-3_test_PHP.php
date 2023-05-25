<!-- PHP 1 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        #P1 {
            border: 1px solid black;
            display: block;
            margin-left: 5px;
            padding-left: 5px;
            width: 500px;
        }
        pre{
            font-size: large;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div id="P1">

        <?php
        echo "PHP 1" . "<br><br>";
        echo "1.1" . "<br>";
        $i = 1;
        while ($i <= 5) {
            $x = 1;
            while ($x <= 5 - $i) {
                echo str_repeat('&nbsp;', 3);
                $x++;
            }
            $x = 1;
            while ($x < $i + 1) {
                echo "O";
                $x++;
            }
            echo "<br>";
            $i++;
        }
        echo "<br>";
        echo "1.2" . "<br>";
        $n = 5;
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $n * 2; $j++) {
                if ($j <= $i + $n - 1 && $j >= $n - $i + 1) {
                    echo "O";
                } else {
                    echo str_repeat('&nbsp;', 3);
                }
            }
            echo "<br>";
        }

        echo "<br><br>";
        echo "PHP 2" . "<br>";
        echo "&nbsp;&nbsp;" . "2.1 Answer 10,200 เข้า condition elseif (salary < 11000)" . "<br>";
        echo "&nbsp;&nbsp;" . "2.2.1 Answer 200 เขียนแบบ Ternary Operators" . "<br>";
        echo "&nbsp;&nbsp;" . "2.2.2 Answer Average" . "<br>";
        ?>
        <pre>
PHP 3
3.1 Answer 15000, 20000, 30000
3.2 Answer echo \$marks[\"mohammad\"][\"physics\"]
3.3 $data = array_values($marks);
    for ($i = 0; $i < count($data); $i++){
        foreach ($data[$i] as $subject=> $score){
            echo $score . " ";
        }
    }
        </pre>
    </div>
</body>

</html>