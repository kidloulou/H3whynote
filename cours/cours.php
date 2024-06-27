/*
//cookie

$CookieName ="Ramirez";
$CookieValue = "Fornite Game Character";
setcookie($CookieName;$CookieValue, time() + (86400 * 30));

if(!isset($_COOKIE[$CookieName])){

  echo "Cookie value:" .$_COOKIE[$cookievalue];

}
*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

<?php
class HeadGenerator implements GenerateTags {
  public $HeadTitle;
  public $HeadFavicon;

  public function __construct($HeadTitle, $HeadFavicon) {
      $this->HeadTitle = $HeadTitle;
      $this->HeadFavicon = $HeadFavicon;
  }
  
/*
  public function GenrateHTMLTags (){
    echo "<title>{$this->headTitle}</title>";
    echo "<link rel='icon' href='{$this->headFavicon}' type='image/x-icon'>";
  };
*/
  };
  
  /*
  $generator = new HeadGenerator("Le cours !!!", "voiture-ico.png");
  $generator->generateHTMLTags();


  interface GenrateTags{
    public function GenrateHTMLTags ();
  };




?>
    
</body>
</html> 