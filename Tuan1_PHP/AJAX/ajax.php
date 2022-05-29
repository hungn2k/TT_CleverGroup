<!DOCTYPE html>
<html>
<head>
<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "gethint.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>

</body>
</html>

<!-- Đầu tiên, kiểm tra xem trường đầu vào có trống không (str.length == 0). Nếu có, hãy xóa nội dung của chỗ dành sẵn txtHint và thoát khỏi chức năng.

Tuy nhiên, nếu trường đầu vào không trống, hãy làm như sau:

Tạo đối tượng XMLHttpRequest
Tạo hàm cần thực thi khi phản hồi máy chủ đã sẵn sàng
Gửi yêu cầu đến tệp PHP (gethint.php) trên máy chủ
Lưu ý rằng tham số q được thêm vào url (gethint.php?q="+str)
Và biến str giữ nội dung của trường đầu vào -->