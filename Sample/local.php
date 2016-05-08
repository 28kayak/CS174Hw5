    <?php

    $lang = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
    echo "lang<br>";
    echo $lang;

    $temp = explode(";", $lang);
    echo "<br>";
    /*for ($i=0; $i < count($temp); $i++) { 
      echo "temp<br>";
      echo $temp[$i];
      echo "<br>";
    }*/

    $lang = explode(",", $temp[0]);
    echo "<br>lang[0] = ".$lang[0]."<br>";
    echo "<br>lang[1] = ".$lang[1]."<br>";
    //echo "<br>lang[2] = ".$lang[2]."<br>";
   // echo $lang[2]."<br>";
    if ($lang[0]=="en-US")
    {
      echo "Hey: en-US<br>";
      include("../index.html");
    }else if($lang[0] == "ja")
    {
      echo "こんにちわ<br>";
      include("../index-jp.html");
    }

    $tl = ["en-US" => ["hello" => "hello<br>"],
           "ja" => [ "hello" => "こんにちわ"] ];
    echo $tl[$lang[0]]["hello"];
    echo $tl[$lang[1]]["hello"];

    ?>