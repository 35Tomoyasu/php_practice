<?php
/*
1. 引数に数値を指定して実行すると、数値を2倍にして返す
   関数を作成してください
*/
function product($number) {
  $result = 0;
  for($i = 1; $i <= $number; $i++) {
    $result = $number*2;
  }

  return $result;
}

echo product();
?>


<?php
/*
2. $a と $b を仮引数に持ち、$a と $b　を足した結果を返す
   関数を作成してください。
*/
function sum($a, $b) {
  $result = 0;
  for($i = 1; $i <= ($a + $b); $i++) {
    $result = ($a + $b);
  }

  return $result;
}

echo sum();
?>


<?php
/*
3. $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
  その要素をすべてかけた結果を返す関数を作成してください。
*/
$arr = array(1,3,5,7,9);
echo array_product($arr);
?>


<?php
/*
4. 【応用】 次のプログラムは、配列の中で1番大きい値を返す max_array という
   関数を実装しようとしています。途中の部分を完成させてください。
*/
function max_array($arr) {
  $max_number = $arr[0];
  foreach($arr as $a) {
    if($max_number < $arr[$i]) {
      $max_number = $arr[$i];
    }
  }
  return $max_number;
}

echo max_array();
?>


<?php
// 5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
/*
・strip_tags
用途=>文字列からHTMLタグ及びPHPタグを取り除く
*/
$text = '<p>Test Paragraph.</p><!-- Comment -->
<a href ="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
?>


<?php
/*
・array_push
用途=>一つ以上の要素を配列の最後に追加する
*/
$stack = array("Tokyo", "Osaka");
array_push($stack, "Yokohama", "Nagoya");
print_r($stack);
?>


<?php
/*
・array_merge
用途=>ひとつまたは複数の配列をマージする
*/
$array1 = array(a,b,c);
$array2 = array(1,2,3);
$result = array_merge($array1, $array2);
print_r($result);
?>


<?php
/*
・time, mktime
用途
=>time:現在の Unix タイムスタンプを返す
=>mktime: 日付を Unix のタイムスタンプとして取得する
*/
date_default_timezone_set('UTC');
$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
?>


<?php
/*
・date
用途=>ローカルの日付/時刻を書式化する
*/
date_default_timezone_set('UTC');
$today = date("F j, Y, g:i a");
echo $today;
?>







