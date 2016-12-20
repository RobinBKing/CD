<?php 
    class LeetGenerator
    {
         function makeLeetSpeak($input_sentence)
        {
            $input_array_of_words = explode(" ", $input_sentence);
            $output_leetwords = array();
            foreach ($input_array_of_words as $word) {
                $input_array_of_letters = str_split($word);
                $output_leetletters = array();
                $isFirst = true;
                foreach ($input_array_of_letters as $letter) {

                    switch ($letter) {
                       case "e":
                            array_push($output_leetletters, "3");
                            break;
                        case "E":
                            array_push($output_leetletters, "3");
                            break;
                        case "o":
                            array_push($output_leetletters, "0");
                            break;
                        case "O":
                            array_push($output_leetletters, "0");
                            break;
                        case "I":
                            array_push($output_leetletters, "1");
                            break;
                        case "s":
                            if ($isFirst) {
                                array_push($output_leetletters, $letter);
                                $isFirst = false;
                            } else {
                                array_push($output_leetletters, "z");
                            }
                            break;
                         case "S":
                            if ($isFirst) {
                                array_push($output_leetletters, $letter);
                                $isFirst = false;
                            } else {
                                array_push($output_leetletters, "Z");
                            }
                            break;
                       default:
                            array_push($output_leetletters, $letter);
                    }
                }
                array_push($output_leetwords, implode($output_leetletters));
           }      
            return implode(" ", $output_leetwords);
        }
    }
?>