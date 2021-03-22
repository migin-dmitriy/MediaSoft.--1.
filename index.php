<?php

$str = 'Для вас, души моей царицы,
    Красавицы, для вас одних
    Времен минувших небылицы,
    В часы досугов золотых,
    Под шепот старины болтливой,
    Рукою верной я писал;
    Примите ж вы мой труд игривый!
    Ничьих не требуя похвал,
    Счастлив уж я надеждой сладкой,
    На песни грешные мои.';


$words = str_word_count($str, 1, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
$words = array_unique($words);

$count = count($words);

$words_count = [];

foreach ($words as $word) {

    preg_match_all('~\b' . $word . '\b~iu', $str, $words_count[$word]);
}


foreach ($words_count as $word => $word_count) {
    $entry_count = count($word_count[0]);
    echo "[{$word}]:=> {$entry_count}" . PHP_EOL;
}

echo "[Всего слов]: {$count}";
