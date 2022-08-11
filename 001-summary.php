<?php

trait T { // トレイトの定義
    public string $property = self::class;
    public function method(): void {
        echo $this->property, PHP_EOL;
    }
}

class C1 {
    use T; // トレイトの利用
}

class C2 {
    use T; // トレイトの利用
}

(new C1)->method();
(new C2)->method();
