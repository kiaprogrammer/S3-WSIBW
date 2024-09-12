<?php
    class person{
        protected $name;
        function set_name($new_name){
            $this->name = $new_name;
        }
        function get_name(){
            return $this->name;
        }
    }
?>

<?php
$person1 = new person();
// set value dari properti name
$person1->set_name("Azkia Rahman");
// akses value dari properti name
echo $person1->get_name();
// method tidak bisa di akses secara langsung, krn muncul error
echo "Hai ".$person1->name="Azkia Rahman";
echo "\n";
?>