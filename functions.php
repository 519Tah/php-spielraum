<?php



function dd($data) {
        echo '<pre>' ;
        die(var_dump($data));
        echo '</pre>' ;    
}


function checkage($val) {
    echo 'your age is: ' . $val;
    if($val >= 21){
         echo 'welcome to the club';
    } else {
        echo 'Unfortunately you cant get in. You need to be at least 21 to Join the Club!';
    }
}

    
    
    

