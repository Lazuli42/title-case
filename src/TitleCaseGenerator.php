<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();
            $articles = ["for", "and", "nor", "but", "or", "yet", "so", "at", "but", "by", "of", "to"];
            foreach ($input_array_of_words as $word) {
                $word = strtolower($word);
                foreach ($articles as $article) {
                    if ($word !== $article) {
                        $cased_word = ucfirst($word);
                    }
                    elseif ($word == $article) {
                        $cased_word = $word;
                    }
                }
                array_push($output_titlecased, $cased_word);
            }
            return implode(" ", $output_titlecased);
        }
    }

?>
