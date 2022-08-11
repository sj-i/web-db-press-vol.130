<?php

interface HogeInterface {
    public function method1(): void;
}
trait HogeDefaultImplementation {
    public function method1(): void {
        echo 'hoge';
    }
}

class Hoge implements HogeInterface {
    use HogeDefaultImplementation;
}
