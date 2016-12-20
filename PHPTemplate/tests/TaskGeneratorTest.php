<?php 

    require_once "src/TitleCaseGenerator.php";

    class TaskGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTask_oneWord()
        {
            //Arrange
            $test_TaskGenerator = new TaskGenerator;
            $input = "beowulf";

            //Act
            $result = $test_TaskGenerator->makeTask($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }

        function test_makeTaskGenerator_multipleWords()
        {
            //Arrange
            $test_TaskGenerator = new TaskCaseGenerator;
            $input = "the little mermaid";

            //Act
            $result = $test_TaskGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }
    }

?>