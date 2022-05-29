<html>
<head>
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>

</body>
</html>

<!-- Khi người dùng nhập một ký tự trong trường đầu vào ở trên, hàm "showResult()" được thực thi. Chức năng được kích hoạt bởi sự kiện "onkeyup" 
-->

<!-- Nếu trường đầu vào trống (str.length==0), hàm sẽ xóa nội dung của chỗ dành sẵn và thoát khỏi hàm.

Nếu trường đầu vào không trống, hàm showResult() thực hiện như sau:

Tạo đối tượng XMLHttpRequest
Tạo hàm cần thực thi khi phản hồi máy chủ đã sẵn sàng
Gửi yêu cầu đến tệp trên máy chủ
Lưu ý rằng một tham số (q) được thêm vào URL (với nội dung của trường đầu vào) -->