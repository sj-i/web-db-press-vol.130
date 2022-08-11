<?php

// 機械生成コードをクラス側に置く構成も可
trait MachineGeneratedCodes {
    // 中略（機械生成されたコード）
}

// 別ファイルで定義
// 手書きコードをトレイト側に置く構成も可
class HandWrittenCodes {
    use MachineGeneratedCodes;
    // 中略（手書きのコード）
}
