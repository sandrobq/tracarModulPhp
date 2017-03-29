 $("#deletebuttonfile").click(function() {
     var s = $(".filesi");
     var str = "?";
     for (var i = 0; i < s.length; i++) {

         if (s[i].checked) {
             str += "namef[]=" + s[i].value + "&";
         } else {}
     }
     $(location).attr('href', "t.php" + str);
 });