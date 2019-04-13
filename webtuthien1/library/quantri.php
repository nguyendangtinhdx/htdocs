<?php 
    // quan li The Loai
    function TinXemThem_BonTin($idLT){
        $qr = "
        SELECT * FROM tin WHERE idLT = $idLT 
        ORDER BY idTin DESC LIMIT 1,4;
    ";
        return mysql_query($qr);
    }
    // Quan li The Loai
    function DanhSachTheLoai(){
        $qr = "
            SELECT * FROM theloai ORDER BY idTL DESC
        ";
        return mysql_query($qr);
    }
    function ChiTietTheLoai($idTL){
        $qr = "
            SELECT * FROM theloai WHERE idTL = '$idTL'
        ";
        $theloai = mysql_query($qr);
        return mysql_fetch_array($theloai);
    }
    // quan li Loai Tin
    function DanhSachLoaiTin(){
        $qr = "
            SELECT *,loaitin.ThuTu,loaitin.AnHien FROM loaitin, theloai 
            WHERE  loaitin.idTL = theloai.idTL 
            ORDER BY idLT DESC
        ";
        return mysql_query($qr);
    }
    function ChiTietLoaiTin($idLT){
        $qr = "
            SELECT * FROM loaitin WHERE idLT = '$idLT'
        ";
        $loaitin = mysql_query($qr);
        return mysql_fetch_array($loaitin);
    }
    // quan li Tin
    function DanhSachTin($start,$limit){
        $qr = "
            SELECT tin.*, TenTL, Ten FROM tin, theloai, loaitin  
            WHERE tin.idTL = theloai.idTL AND tin.idLT = loaitin.idLT
            ORDER BY idTin DESC LIMIT $start,$limit
        ";
        return mysql_query($qr);
    }
    function DemTin(){
        $qr = "
            SELECT * FROM tin 
        ";
        return mysql_query($qr);
    }
    function ChiTietTin($idTin){
        $qr = "
            SELECT * FROM tin WHERE idTin = '$idTin'
        ";
        $tin = mysql_query($qr);
        return mysql_fetch_array($tin);
    }
    // quan li video
    function DanhSachVideo(){
        $qr = "
            SELECT * FROM video ORDER BY idVideo DESC
        ";
        return mysql_query($qr);
    }
    function ChiTietVideo($idVideo){
        $qr = "
            SELECT * FROM video WHERE idVideo = '$idVideo'
        ";
        $video = mysql_query($qr);
        return mysql_fetch_array($video);
    }
    // quan li quangcao
    function DanhSachQuangCao(){
        $qr = "
            SELECT * FROM quangcao ORDER BY idQuangCao DESC
        ";
        return mysql_query($qr);
    }
    function ChiTietQuangCao($idQuangCao){
        $qr = "
            SELECT * FROM quangcao WHERE idQuangCao = '$idQuangCao'
        ";
        $quangcao = mysql_query($qr);
        return mysql_fetch_array($quangcao);
    }
    // quan li user
    function DanhSachUser(){
        $qr = "
            SELECT * FROM users ORDER BY idUser DESC
        ";
        return mysql_query($qr);
    }
    function ChiTietUser($idUser){
        $qr = "
            SELECT * FROM users WHERE idUser = '$idUser'
        ";
        $user = mysql_query($qr);
        return mysql_fetch_array($user);
    }
?>

<?php 

function stripUnicode($str){ 
  if(!$str) return false; 
   $unicode = array( 
     'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ', 
     'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ', 
     'd'=>'đ', 
     'D'=>'Đ', 
      'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ', 
      'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ', 
      'i'=>'í|ì|ỉ|ĩ|ị',       
      'I'=>'Í|Ì|Ỉ|Ĩ|Ị', 
     'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ', 
      'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ', 
     'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự', 
      'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự', 
     'y'=>'ý|ỳ|ỷ|ỹ|ỵ', 
     'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ' 
   ); 
foreach($unicode as $khongdau=>$codau) { 
    $arr=explode("|",$codau); 
    $str = str_replace($arr,$khongdau,$str); 
} 
return $str; 
} 
function changeTitle($str){ 
    $str=trim($str); 
    if ($str=="") return ""; 
    $str =str_replace('"','',$str); 
    $str =str_replace("'",'',$str); 
    $str = stripUnicode($str); 
    $str = mb_convert_case($str,MB_CASE_TITLE,'utf-8'); 
     
    // MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER 
    $str = str_replace(' ','-',$str); 
    $str = str_replace('/','-',$str); 
    return $str; 
} 

?>