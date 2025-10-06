<?php 
$capital = [];
function processString($str)
{
  $len = mb_strlen($str);
  $reversed = '';
  for ($i = 0; $i < $len; $i++) {
    $char = mb_substr($str, $i, 1);
    if (preg_match('/\p{Lu}/u', $char)) {
      $index = $len - $i - 1;
      $capital[$index] = [''];
    }
  }
  for ($i = $len - 1; $i >= 0; $i--) {
    $char = mb_substr($str, $i, 1);
    if (isset($capital[$i])) {
      $reversed .= mb_strtoupper($char);
    } else {
      $reversed .= mb_strtolower($char);
    }
  }
  return $reversed;
}
$words_and_letter_arr = ['Cat', 'Мышь', 'houSe', 'esuOh', 'кимОД', 'third-part , fourth-part', 'can`t'];
$test_arr = [];
foreach ($words_and_letter_arr as $normal_word) {
  $reversed_word = processString($normal_word);
  $check_normal_word =  processString($reversed_word);
  if($check_normal_word == $normal_word) {
    echo '<pre>';
    echo 'Слово - '. $normal_word . ' правильно поменяло порядок букв - '. $reversed_word;
    echo '</pre>';
  }else {
    echo '<pre>';
    echo 'Слово - '. $normal_word . ' не правильно поменяло порядок букв - '. $reversed_word;
    echo '</pre>';
  }
}

?>