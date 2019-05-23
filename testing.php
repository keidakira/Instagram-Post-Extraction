<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body style="margin: 0 auto;">
  <div class="result"></div>
<script>
$.ajax({
  url: location.href.split("?")[1],
  method: "GET",
  dataType: "text",
  success: function(r) {
    document.write(r);
    $("span").hide();
    $("body").css("margin", "0 auto");
    if($("meta[property$='og:video']").attr("content")) {
      $("body").append("<center><video style='height: 100vh'><source src="+$("meta[property$='og:video']").attr("content")+" /></video></center>");
    } else {
      $("body").append("<center><img style='height: 100vh' src="+$("meta[property$='og:image']").attr("content")+" /></center>");
    }
  }
})
</script>
</body>
</html>
