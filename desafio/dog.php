<?php 

class DogBase{
    
    function __construct( string $nome, string $raca, int $id = -1){

        if( $id == -1 ) $id = $this->newId();
        
        $this->id = $id;
        $this->nome = $nome;
        $this->raca = $raca;
    }

    private function newId( ){
        return json_decode(File::lastLine())->id + 1;
    }

    public function getJson( ){
        return json_encode($this);
    }
}


?>