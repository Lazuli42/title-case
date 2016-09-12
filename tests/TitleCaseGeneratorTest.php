<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTitleCase_oneWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }

        function test_makeTitleCase_multipleWords()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }

        function test_ignoreArticles()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf from brighton beach";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf from Brighton Beach", $result);
        }

        function test_capitalize_first_articles()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the lord of the rings: the return of the king";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Lord of the Rings: the Return of the King", $result);
        }

        function test_non_letters()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "20,000 leagues under the sea";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("20,000 Leagues Under the Sea", $result);
        }

        function test_all_uppercase()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "BEOWULF ON THE ROCKS";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf on the Rocks", $result);
        }

        function test_mixed_case()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "BeoWulf aNd mE";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf and Me", $result);
        }
    }



?>
