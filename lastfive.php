<?php
if(!isset($_COOKIE['last5list'])){
    print("<div style='margin:50px 80px'><h2>Not visited any products</h2></div>");

}else{
    print("<div style='margin:50px 80px'><h2>LAST FIVE VISITED SERVICES:</h2><p>");
    $last5list=unserialize($_COOKIE['last5list']);
    for($i=0;$i<5;$i++){
      if($last5list[$i]!=''){
        print(($i+1).') '.$last5list[$i]);
        print("<br/>");
       
      }
    }
    print("</p></div>");
}
