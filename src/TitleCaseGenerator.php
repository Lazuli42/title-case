<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();
            $articles = ["the", "for", "and", "from", "but", "or", "yet", "so", "at", "but", "by", "to", "of", "nor", "on"];
            $counter = 0;

            foreach ($input_array_of_words as $word) {
                $lowered_word = strtolower($word);
                foreach ($articles as $article) {
                    if ($counter == 0) {
                        $cased_word = ucfirst($lowered_word);
                    }
                    else if ($counter !== 0) {
                        if ($lowered_word === $article) {
                            $cased_word = $lowered_word;
                            break;
                        }
                        else {
                            $cased_word = ucfirst($lowered_word);
                        }
                    }
                }
                array_push($output_titlecased, $cased_word);
                $counter++;
            }
            return implode(" ", $output_titlecased);
        }
    }

?>
