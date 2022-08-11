<?php

interface HogeInterface {
    public function method(): void;
}

/** @psalm-require-implements HogeInterface */
trait HogeDefaultImplementation {
    public function method(): void;
}

class Hoge implements HogeInterface {
    use HogeDefaultImplementation; // OK
}
class WrongHoge {
    use HogeDefaultImplementation; // Psalmエラー
}
