<?php
echo "普及率が高いのはどちらか 0=windows,1＝mac";
$input = fgets(STDIN);
echo $input;
if($input == 0){
  echo "正解です";
}else{
  echo "不正解です";
};
echo "普及率が高いのはどちらか 0=windows8.1 1=windows10";
$input = fgets(STDIN);
echo $input;
if($input == 1){
  echo "正解です";
}else{
  echo "不正解です";
};
