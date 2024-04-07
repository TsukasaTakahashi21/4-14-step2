<?php

class WordChecker {
    public static function printWordDescription($word) {
        for ($i = 1; $i <= 6; $i++) {
            if ($word == "hoge") {
                if ($i % 2 == 0) {
                    echo "wordがhoge かつ " . $i . "は2の倍数です" . "\n";
                } else {
                    echo "wordがhoge かつ " . $i . "は2の倍数以外です" . "\n";
                }
            } else {
                if ($i % 2 == 0) {
                    echo "wordがhogeでない かつ " . $i . "は2の倍数です" . "\n";
                } else {
                    echo "wordがhogeでない かつ " . $i . "は2の倍数以外です" . "\n";
                }
            }
        }
    }
}

// 静的メソッドを呼び出して処理を実行
WordChecker::printWordDescription("fuga");

?>
