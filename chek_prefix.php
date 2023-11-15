<?php
$prefix = $_POST[ 'tes'];

switch($prefix){
    case 'นาย':
        echo "male"
        break;

    case 'นาง':
        echo "famale"
        break;

    case 'นางสาว':
        echo "famale"
        break;

    case 'เด็กชาย':
        echo "male"
        break;

    default:
        echo "famale"
        break;
}
?>