<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
    $z=$x->item($i)->getElementsByTagName('url');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<a href='" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          "' target='_blank'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        } else {
          $hint=$hint . "<br /><a href='" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          "' target='_blank'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>

<!-- Mã nguồn trong "livesearch.php" tìm kiếm tệp XML cho các tiêu đề khớp với chuỗi tìm kiếm và trả về kết quả -->

<!-- Nếu có bất kỳ văn bản nào được gửi từ JavaScript (strlen($q) > 0), điều sau đây sẽ xảy ra:

Tải tệp XML vào đối tượng DOM XML mới
Lặp qua tất cả các yếu tố <title> để tìm khớp từ văn bản được gửi từ JavaScript
Đặt url và tiêu đề chính xác trong biến "$response". Nếu nhiều hơn một trận đấu được tìm thấy, tất cả các trận đấu được thêm vào biến
Nếu không tìm thấy khớp, biến $response được đặt thành "không có gợi ý" -->