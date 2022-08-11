<?php

class P {
    public function method(): string {
        return __CLASS__;
    }
}

trait T {
    public function method(): string {
        return __TRAIT__;
    }
}

class C1 extends P {
    use T;
}

class C2 extends P {
    use T;
    public function method(): string {
        return __CLASS__;
    }
}
assert((new C1)->method() === 'T');
assert((new C2)->method() === 'C2');