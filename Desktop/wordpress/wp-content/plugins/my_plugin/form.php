<?php
echo "form submitted";
 ?>
<script type="text/javascript">
  alert("cookie accessed");
  var allCookies = document.cookie;
  alert(allCookies);
console.log("cookie in array form");
console.log(allCookies.split());
var cookies_array=allCookies.split();
alert(cookies_array);

  const arr = ['a', 'b', 'c'];
arr.forEach(function(element) {
    console.log(element);
});

cookies_array.forEach(function(element) {
    console.log(element);
    console.log("/n");
});

</script>
