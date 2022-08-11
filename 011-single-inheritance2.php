<?php

class P {
    public function common_function(): void {}

    // A、Bにのみ必要な機能がC、Dにも導入
    public function ab_function(): void {}

    // C、Dにのみ必要な機能がA、Bにも導入
    public function cd_function(): void {}
}

class A extends P {}
class B extends P {}
class C extends P {}
class D extends P {}
