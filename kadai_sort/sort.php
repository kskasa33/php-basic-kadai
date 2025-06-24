<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題sort</title>
</head>

<body>
    <p>
        <?php
        function sort_2way(array &$array, bool $order): void {
            if ($order) {
                sort($array); // 昇順
                echo '昇順にソートします。<br>';
            } else {
                rsort($array); // 降順
                echo '降順にソートします。<br>';
            }

            foreach ($array as $val) {
                echo $val . '<br>';
            }
        }

        $array = [15, 4, 18, 23, 10];

        // 昇順表示
        sort_2way($array, true);

        // 降順表示
        sort_2way($array, false);
        ?>
    </p>
</body>
</html>
