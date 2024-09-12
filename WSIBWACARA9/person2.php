<?php
    class person{
        private $name;
        function set_name($new_name){
            $this->name = $new_name;
        }
        function get_name(){
            return $this->name;
        }
    }
?>

<?php
$person1 = new Person();
// properti bisa di akses secara langsung
echo "Hai ".$person1->name="Kia";
echo "\n";
// method bisa di akses secara langsung
echo $person1->get_name();
?>