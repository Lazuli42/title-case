<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_array_of_words = explode(" ", $input_title);
            $output_titledcased = array();
            foreach ($input_array_of_words as $word) {
                array_push($output_titledcased, ucfirst($word));

            }
            return implode (" ", $output_titledcased);
        }
    }

?>
