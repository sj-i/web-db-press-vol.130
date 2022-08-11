<?php

// これより
class C1 {
    use FunctionalityTrait1;
    use FunctionalityTrait2;
}

// クラスのDIにするほうが楽
class C2 {
    public function __construct(
        private FunctionalityClass1 $functionality1,
        private FunctionalityClass2 $functionality2,
    ) {
    }
}
