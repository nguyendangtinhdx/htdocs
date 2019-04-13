<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tỉnh";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Zallen";
$a[] = "Wenche";
$a[] = "Vicky";
// đặt thông số q từ URL
$q = $_REQUEST["q"];
$hint="";
// tra cứu tất cả $hint từ mảng nếu $q khác rỗng;
    if($q!=="")
    {
        $q = strtolower($q);
        $len = strlen($q);
        foreach ($a as $name) 
        {
            if(stristr($q,substr($name,0,$len)))
            {
                if($hint==="")
                {
                    $hint = $name;
                }
                else
                {
                    $hint .= ", $name";
                }
            }
        }
    }
    // hiển thị ra giá trị tìm được hoặc " no suggestion"
    echo $hint === "" ? " no suggestion": $hint;
?>