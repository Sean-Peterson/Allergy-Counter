<?php
    class Allergy
    {
        function AllergyCounter($something)
        {
            $allergies = array();

            if($something>255 || $something<=0){
              array_push($allergies, "Enter a Correct Number");
            }else{

              if($something>=128){
                array_push($allergies,"Cats");
                $something-=128;
              }

              if($something>=64){
                array_push($allergies,"Pollen");
                $something-=64;
              }

              if($something>=32){
                array_push($allergies,"Chocolate");
                $something-=32;
              }

              if($something>=16){
                array_push($allergies,"Tomatoes");
                $something-=16;
              }

              if($something>=8){
                array_push($allergies,"Strawberries");
                $something-=8;
              }

              if($something>=4){
                array_push($allergies,"Shellfish");
                $something-=4;
              }

              if($something>=2){
                array_push($allergies,"Peanuts");
                $something-=2;
              }

              if($something>=1){
                array_push($allergies,"Eggs");
                $something-=1;
              }
            }



            return $allergies;
        }
    }

?>
