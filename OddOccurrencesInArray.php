
function solution($A) {

    $arrayCounter = array();
    
    foreach($A as $item){
        
        if(!isset($arrayCounter[$item])){
            $arrayCounter[$item] = 0;
        }
        
        $arrayCounter[$item]++;
        
        if($arrayCounter[$item]==2){
            
            unset($arrayCounter[$item]);
        }
        
  
        
    }   
       
