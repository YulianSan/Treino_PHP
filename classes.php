<?php 
    namespace foo;
    class Cat {

        const raca = "gatinho";
        private $nome;

        public static function says() {
            echo 'meoow'
        ;}  
        
        function __construct($nome){
            $this->nome = $nome;
            echo $this->nome."<br />";
        }

        function __invoke(){//é executado quando é chamado igual uma função
            return "Sou uma classe não uma função";    
        }
        public function __toString(){//é executado quando é chamado igual uma variável
            return $this->nome;
         }
    } 
    $gatos = new Cat("Singed");
    echo Cat::says()."<br />";
    echo Cat::raca  ."<br />";
    echo $gatos()   ."<br />";
    echo $gatos     ."<br />";


    $test =  ""  &  "oi" ;      //se utiliza um | ou um & inves de dois
    echo $test."<br />";
?>  