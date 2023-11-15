<?php
//if  1  condition => true
//odd => 0 2 4 6 8
// even => 1 3 5  7 9

$num1 = 56814;
if($num/2 == 0){
    echo "เลขคู่";
}

echo "<hr color='red'>";

//if else
$num2 = 784565;
if($num%2 == 0){
    echo "เลขคู่"
}else{
    echo "เลขคี่";
}


//if elseif else
$led = "green";
if($led == "yellow"){
    echo "ไปได้"
}elseif($led == "yellow"){
    echo "ชะลอ";
}else{
    echo "หยุด";
}


// คำนำหน้านาม (นาย/นาง/นางสาว/ด.ช/ด.ญ.)
$prefix = "นาย";
if($prefix == "นาง"){
    echo "ผู้หญิง";
}elseif($spefix == "นาย"){
    echo "ผู้ชาย";
}elseif($prefix == "นางสาว"){
    echo "ผู้หญิง";
}elseif($spefix == "ด.ช"){
    echo "ผู้ชาย";
}elseif($spefix == "ด.ญ"){
    echo "ผู้หญิง";
}


//switch

switch ($prefix) {
    case 'นาย':
        echo "Male";
        break;

    case 'นาง':
        echo "Male";
        break;

    case '':
        echo "Male";
        break;

    case 'นาย':
        echo "Male";
        break;

    case 'นาย':
        echo "Male";
        break;
}