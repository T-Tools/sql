<?PHP
$red="\033[0;31m";
$blue="\033[0;34m";
$green="\033[0;32m";
$yellow="\033[0;33m";
$cyan="\033[0;36m";
$purple="\033[0;35m";
system("clear");
system("bash logo");
echo $red."Enter Site(eg.https://www.google.com)::"; 
$target= trim(fgets(STDIN));
  $html = file_get_contents($target);
  $dom = new DOMDocument;
  @$dom->loadHTML($html);
  $links = $dom->getElementsByTagName('a');
  $vlnk = 0;
  foreach ($links as $link){
    $lol= $link->getAttribute('href');
    if( strpos( $lol, '?' ) !== false ){
      $sqlist = explode(',', $sqllist);
      if (strpos($lol, '://')){
        $sqlurl = $lol ."'";
$orin = $lol ;
      }
      else{
        $sqlurl = $target."/".$lol."'";
$orgin = $target."/".$lol ;
      }
  $sqllist = file_get_contents($orgin);
      $sqlsc = file_get_contents($sqlurl);
echo $green."Searching For Sql Error>>>\n".$blue.$sqlurl."\n";
      $sqlvn = $green."Found\n";
      foreach($sqlist as $sqli){
        if ($sqllist == $sqlsc) $sqlvn = $red."Not Found";
      }
      echo $sqlvn;
      echo"\n$cln";
      echo "\n";
      $vlnk++ ;
    }
}
echo $blue."[+] URL(s) With Parameter(s):"."$vlnk";
  echo"\n\n";
?>
