 $("#deletebuttonfile").click(function() {
     var s = $(".filesi");
     var str = "?";
     for (var i = 0; i < s.length; i++) {

         if (s[i].checked) {
             str += "namef[]=" + s[i].value + "&";
         } else {}
     }
     $(location).attr('href', "delfile.php" + str);
 });

 $("#openbuttonfile").click(function() {
     var s = $(".filesi");
     var str = "?fileViw=" + s[0].value;
     $(location).attr('href', 'track.php' + str);
 });

$("#addbuttonfile").click(function(){
   var s=$(".filesi");
   var str="?fileadd="+s[0].value;
    $(location).attr('href','addfromfile.php'+str);
});