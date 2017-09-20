<?php
class Html {
  public function css($url){
    return "<link rel='stylesheet' type='text/css' href='$url'>";
  }
  public function meta($name,$content){
    return "<meta name='$name' content='$content'> ";
  }
  public function img($url, $alt, $width, $height){
    return "<img src='$url' alt='$alt' style='width:$width; height:$height;' />";
  }
  public function a($url, $content){
    return "<a href='$url'>$content</a>";
  }
  public function link_js($url){
    return "<script type='text/javascript' src='$url'></script>";
  }
  public function script_js($content){
    return "<script type='text/javascript'>$content</script>";
  }
}

$meta = new Html();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php
      echo $meta->css('style.css');
      echo $meta->meta('language', 'fr');
      echo $meta->meta('category', 'Webmastering, Gestion de sites' );
      echo $meta->meta('Copyright', 'becode.org');
      echo $meta->meta('Description', 'Ce site permet de faire quelques exercices');
     ?>
     <script type="text/javascript">

     </script>
    <title></title>
  </head>
  <body>
    <?php
      echo $meta->img('wallpaper_fairytail.jpg', 'wallpaper', '100%', '100%');
      echo $meta->a('http://www.becode.org/', 'becode');  ?>
  </body>
</html>
