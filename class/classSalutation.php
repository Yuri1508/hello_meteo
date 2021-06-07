<?php
    include 'classMeteo.php';

    class trois extends deux {

        public function salutation($reponse){

            //recupère les donées et classe (hello, prenon, meteo, salutation)
            $prenom = $reponse;
            $hello = $this->hello();
            $meteo = $this->meteo();

            $phrase = $hello.' '.$prenom.' '.$meteo.' :) ';
            
            //affiche la phrese entière (hello, prenom, meteo, salutation)
            return json_encode($phrase);

        }

    }