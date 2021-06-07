<?php
    include 'classHello.php';
    class deux extends un {

        public function meteo(){
            $phrase_meteo = "il fait beau aujourd'hui";

            //affiche la phrase meteo
            return $phrase_meteo;
        }

    }