<?php
include("modules/system.php");
class un {
  public function uni() {
    global $system;
    // removing old files
    if ($system=="termux") {
      system("rm -rf /data/data/com.termux/files/usr/share/location-tracer");
      system("rm -rf /data/data/com.termux/files/usr/bin/location-tracer");
      system("rm -rf /data/data/com.termux/files/usr/bin/trace");
    } elseif ($system=="ubuntu") {
      system("sudo rm -rf /usr/bin/location-tracer");
      system("sudo rm -rf /usr/bin/trace");
      system("sudo rm -rf /usr/share/location-tracer");
    } else {
      system("rm -rf /usr/bin/location-tracer");
      system("rm -rf /usr/bin/trace");
      system("rm -rf /usr/share/location-tracer");
    }
  }
  function logo() {
    system("clear");
    echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m
     \033[01;31m(_)\033[01;33m


     __  ____  ________ ______________  _  __   _________  ___  ____________ 
     / / / __ \/ ___/ _ /_  __/  _/ __ \/ |/ /__/_  __/ _ \/ _ |/ ___/ __/ _ \
    / /_/ /_/ / /__/ __ |/ / _/ // /_/ /    /___// / / , _/ __ / /__/ _// , _/
   /____|____/\___/_/ |_/_/ /___/\____/_/|_/    /_/ /_/|_/_/ |_\___/___/_/|_| 
                                                                              
   
   

    \033[01;37m}\033[01;31m--------------------------------------\033[01;37m{
 }\033[01;31m------------- \033[01;32mTrack IPLocation\033[01;31m -------------\033[01;37m{
    }\033[01;31m--------------------------------------\033[01;37m{

\033[00m
EOL;

    if (file_exists("/usr/bin/ip-tracer")) {
      echo "\n\033[01;31m        Sorry Location-Tracer is not removed !!!\033[00m\n";
    } else if(file_exists("/data/data/com.termux/files/usr/bin/location-tracer")) {
      echo "\n\033[01;31m        Sorry Location-Tracer is not removed !!!\033[00m\n";
    } else {
      echo "\n\033[01;32m        Location-Tracer is uninstalled !!!\033[00m\n";
    }
  }
}
$a=new un;
$a->uni();
$a->logo();
?>
