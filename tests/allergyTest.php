 <?php
 require_once "src/allergy.php";

 class AllergyTest extends PHPUnit_Framework_TestCase
    {
        function test_AllergyCounter()
        {
            $newVariable = new Allergy;
            $input1 = "3";
            $result = $newVariable->AllergyCounter($input1);

            $this->assertEquals("Eggs" , $result[1]);
        }
    }
?>
