class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        
        $total=0;
        $chars=str_split($s);
        for($i=0; $i<=count($chars);$i++){
            switch($chars[$i]){
                      case 'M':
                    if($chars[$i-1]=="C"){
                       $total+=800; 
                        
                    }else{
                    $total+=1000;
                    }
                    
                    
                break;
               
                     case 'D':
                    if($chars[$i-1]=="C"){
                       $total+=300; 
                        
                    }else{
                    $total+=500;
                    }
                    
                    
                break;
               
                     case 'C':
                    if($chars[$i-1]=="X"){
                       $total+=80; 
                        
                    }else{
                    $total+=100;
                    }
                    
                break;
                          
                case 'L':
                    if($chars[$i-1]=="X"){
                       $total+=30; 
                        
                    }else{
                    $total+=50;
                    }
                    
                break; 
                    
                case 'X':
                    if($chars[$i-1]=="I"){
                       $total+=8; 
                        
                    }else{
                    $total+=10;
                    }
                break;
              
               
                    
                case 'V':
                    if($chars[$i-1]=="I"){
                        $total+=3;
                        
                    }else{
                    $total+=5;
                    }
                break;
                 case 'I':
                    $total+=1;
                break;
                    
              
                default:
                    break;
                     
                    
            }
            
        }
         return $total;
    }
}
