<?php

trait T {
    abstract private  function getState(): int;
    public function method(): void {
        echo $this->getState(), PHP_EOL;
    }
}

class C {
    use T;
    public function __construct(
        private $state = 42,
    ) {
    }

    private  function getState(): int {
        return $this->state;
    }
}
