<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題</title>
</head>
<body>
    <p>
        <?php
        /* ============= クラス ============= */
        class Food {
            // プロパティ
           private $name;
           private $price;

           // コンストラクタ
           public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
           }

            // メソッド
            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        class Animal {
            // プロパティ
            private $name;
            private $height;
            private $weight;

            // コンストラクタ
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            } 

            // メソッド
            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        /* ============= 処理 ============= */
        // インスタンス化
        $potato = new Food('potato', 250);
        $dog = new Animal('dog', 60, 5000);

        // インスタンスを出力
        print_r($potato);
        echo '<br>';
        print_r($dog);
        echo '<br>';

        // メソッドにアクセス
        $potato->show_price();
        $dog->show_height();


        ?>
    </p>
</body>
</html>