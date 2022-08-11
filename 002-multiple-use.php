<?php
trait T1 {
    public function method1(): string {
        return __TRAIT__;
    }
}

trait T2 {
    public function method2(): string {
        return __TRAIT__;
    }
}

class C {
    // 同時に利用可能
    use T1;
    use T2;
}

assert((new C)->method1() === 'T1');
assert((new C)->method2() === 'T2');
