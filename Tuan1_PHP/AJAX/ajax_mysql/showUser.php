<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
<option value="">Select a person:</option>
<option value="1">Peter Griffin</option>
<option value="2">Lois Griffin</option>
<option value="3">Joseph Swanson</option>
<option value="4">Glenn Quagmire</option>
</select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
</html>
<!-- Đầu tiên, hãy kiểm tra xem người đó có được chọn hay không. Nếu không có người nào được chọn (str == ""), xóa nội dung của txtHint và thoát khỏi hàm. Nếu một người được chọn, hãy làm như sau:

Tạo đối tượng XMLHttpRequest
Tạo hàm cần thực thi khi phản hồi máy chủ đã sẵn sàng
Gửi yêu cầu đến tệp trên máy chủ
Lưu ý rằng một tham số (q) được thêm vào URL (với nội dung của danh sách thả xuống) -->