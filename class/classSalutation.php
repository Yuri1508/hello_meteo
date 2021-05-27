<?php
    include 'classMeteo.php';

    class trois extends deux {

        public function salutation($reponse){

            $prenom = $reponse;
            $hello = $this->hello();
            $meteo = $this->meteo();

            $phrase = $hello.' '.$prenom.' '.$meteo.' :) ';
            
            return json_encode($phrase);

        }

    }