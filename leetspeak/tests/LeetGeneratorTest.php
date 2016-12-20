<?php 

    require_once "src/LeetGenerator.php";

    class LeetGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeLeetSpeak_oneLetter()
        {
            //Arrange
            $test_LeetGenerator = new LeetGenerator;
            $input = "Stressload";

            //Act
            $result = $test_LeetGenerator->makeLeetSpeak(substr($input,3,1));

            //Assert
            $this->assertEquals("3", $result);
        }

        function test_makeLeetSpeak_oneWord()
        {
            //Arrange
            $test_LeetGenerator = new LeetGenerator;
            $input = "Stressload";

            //Act
            $result = $test_LeetGenerator->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("Str3zzl0ad", $result);
        }

        function test_makeLeetSpeak_oneSentence()
        {
            //Arrange
            $test_LeetGenerator = new LeetGenerator;
            $input = "Internal Stressload";

            //Act
            $result = $test_LeetGenerator->makeLeetSpeak($input);

            //Assert
            $this->assertEquals("1nt3rnal Str3zzl0ad", $result);
        }
    }

?>