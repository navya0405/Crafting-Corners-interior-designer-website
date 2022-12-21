<?php
if(!isset($_COOKIE['uselist'])){
    print("<div style='margin:50px 80px'><h2>Not visited any products</h2></div>");

}else{
    print("<div style='margin:50px 80px'><h2>MOST VISITED SERVICES:</h2><p>");
    $uselist=unserialize($_COOKIE['uselist']);
    $mostvisitedcount=[0,0,0,0,0];
    $mostvisitednames=['','','','',''];
    foreach ($uselist as $key => $value) {
        if($value!=0){
       for($i=0;$i<5;$i++){
           if($value>$mostvisitedcount[$i]){
            for($j=4;$j>$i;$j--){
                $mostvisitedcount[$j]=$mostvisitedcount[$j-1];
                $mostvisitednames[$j]=$mostvisitednames[$j-1];
            }
            $mostvisitedcount[$i]=$value;
            $mostvisitednames[$i]=$key;
            break;
           }
       }
    }
   }
   for($i=0;$i<5;$i++){
      if($mostvisitednames[$i]!=''){
        print(($i+1).') '.$mostvisitednames[$i].':'.$mostvisitedcount[$i]);
        print("<br/>");
       
      }
    }
    print("</p></div>");
}
