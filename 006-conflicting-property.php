<?php

trait T1 {
    public int $i = 42;
}

trait T2 {
    public int $i = 42;
}

trait T3 {
    private int $i = 42;
}

class C1 {
    use T1, T2;
}

class C2 {
    use T1, T3; // エラー
}
