<?php

include 'classmeteo.php';

class trois extends deux {

    public function salutation($reponse) {
        
        $hello = $this->hello();
        $meteo = $this->meteo();
        $prenom = $reponse;

        $phrase = $hello.' '.$prenom.' '.$meteo;

        return json_encode($phrase);
    }
}