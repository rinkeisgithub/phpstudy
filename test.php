<?php
echo "普及率が高いのはどちらか 0=windows,1＝mac";
$input = fgets(STDIN);
echo $input;
if($input == 0){
  echo "正解です";
}else{
  echo "不正解です";
};
