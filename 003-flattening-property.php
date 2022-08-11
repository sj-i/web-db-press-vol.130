<?php

trait T1 {
    private int $t1_property = __TRAIT__;
    private function t1_method(): void {
        // T2のprivateプロパティ
        echo $this->t2_property, PHP_EOL;
    }
}

trait T2 {
    private string $t2_property = __TRAIT__;
    private function t2_method(): void {
        // T1のprivateプロパティ
        echo $this->t1_property, PHP_EOL;
    }
}

class C {
    use T1;
    use T2;

    public function method(): void {
        // privateでもアクセスできる
        $this->t1_method();
        $this->t2_method();
    }
}

(new C)->method(); // 可能
(new C)->t1_method(); // エラー
(new C)->t2_method(); // エラー
