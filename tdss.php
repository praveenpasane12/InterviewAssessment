<?php
$a="//5432;'-fdgdg/n;fdggd";
$b=preg_replace('/[^0-9]/', '', $a);
$sum=0;
if($b==""){
$sum=0;
}
else{
for($i=0;$i<strlen($b);$i++){
$sum=$sum+$b[$i];
}
}
echo "sum".$sum;
?> 
