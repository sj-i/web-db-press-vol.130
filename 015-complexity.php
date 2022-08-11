<?php

class P {
    private int $state = 123;
}

class C1 extends P {
    // オーバーライド可能
    private int $state = 456;
}

trait T {
    private int $state = 789;
}

class C2 extends P {
    use T; // オーバーライド可能
}

class C3 extends P {
    use T; // 互換性エラー
    private int $state = 456;
}
