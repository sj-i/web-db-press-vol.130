<?php

trait T1 {
    public function method(): string {
        return __TRAIT__;
    }
}

trait T2 {
    public function method(): string {
        return __TRAIT__;
    }
}

class C1 {
    use T1, T2; // エラー
}

class C2 {
    use T1, T2 {
        // T1の 定義を採用
        T1::method insteadof T2;
    }
}

class C3 {
    use T1, T2 {
        // T2の 定義を採用
        T2::method insteadof T1;
        // T1の定義を別名で採用
        T1::method as t1_method;
    }
}

assert((new C2)->method() === 'T1');
assert((new C3)->method() === 'T2');
assert((new C3)->t1_method() === 'T1');
