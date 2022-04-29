<script type="text/javascript">
   // FileName: deleteCookie.php
   // This script will get every cookie made by this site and delete it by setting its expiry to 1970
       var res = document.cookie;
       var multiple = res.split(";");
       for(var i = 0; i < multiple.length; i++) {
          var key = multiple[i].split("=");
          document.cookie = key[0]+" =; expires = Thu, 01 Jan 1970 00:00:00 UTC";
       }
       // Redirect to learningResources.php
   window.location.replace("learningresources.php");
</script>