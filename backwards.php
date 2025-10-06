<?
$words_and_letter_arr = ['Cat', 'Мышь', 'houSe', 'esuOh', 'кимОД', 'third-part , fourth-part', 'can`t'];
function backwards($arr)
{
    $result = [];
    foreach ($arr as $words) {
        $result[$words] = strrev($words);
    }
    return $result;
}
//тест
$backwards = backwards($words_and_letter_arr);
foreach ($backwards as $test_word => $backward_word) {
    if (strrev($backward_word) == $test_word) {
        echo '<pre>';
        echo 'слово ' . $test_word . ' правильно поменяло порядок букв - ' . $backward_word;
        echo '</pre>';
    } else {
        echo '<pre>';
        echo 'слово ' . $test_word . ' не правильно поменяло порядок букв - ' . $backward_word;
        echo '</pre>';
    }
}
?>