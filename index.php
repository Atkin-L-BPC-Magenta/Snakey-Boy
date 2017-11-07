 <!DOCTYPE html> 
 <html> 
 <head> 
 <title>test 01</title> 
 </head> 
 <body> 
 <?php 
 $dice = rand(1,6);
  
  
 if ($dice == "1") { 
 echo "Almost Snake Eyes"; } 
 elseif 
    ($dice == "6") { 
 echo "Winner"; 
 } 

  else
  {echo "roll again";
       }
 
  
  switch($dice)
  {
   case 1:
    echo "you rolled a 1";
    break;
    
    
    case 2:    
    echo "you rolled a 2";    
    break;
    
    case 3:
    echo "you rolled a 3";
    break;
    
    case 4:    
    echo "you rolled a 4";
    break;
    
    case 5:    
    echo "you rolled a 5";
    break;
    
    case 6:
    echo "you rolled a 6";
    break;
  }
 ?>
 </body> 
 </html>
