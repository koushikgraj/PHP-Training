<?php   
    echo "<h3>Example for __TRAIT__</h3>";    
    trait created_trait {    
        function jtp(){    
            //will print name of the trait i.e; created_trait    
            echo "Trait name = ",__TRAIT__;
			echo "<br><br>";
			echo "Class Name = ".__CLASS__;
        }    
    }    
    class Company extends HR {    
        use created_trait;    
        }    
    $a = new Company;    
    $a->jtp();    
?>  