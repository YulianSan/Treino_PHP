<style>
    *{
        font-family:Arial;
    }
</style>
<?php 
    enum Tipos:int{//os enum são tipos input, tem o valor e o nome, nome é o que aparece para o usuário e o value é o que parece para o programa
        case administrador=1;
        case cliente=2;
        case funcionario=3;

        public function getValue(): string{
            return $this->value;
        }
    }

    echo str_pad(Tipos::administrador->name,13,"_") . ": " . Tipos::administrador->value."<br>";
    echo str_pad(Tipos::cliente->name,13,"_") . ": " . Tipos::cliente->value."<br>";
    echo str_pad(Tipos::funcionario->name,13,"_") . ": " . Tipos::funcionario->value;
    
    // :: os dois pontos funcionam para acessar a métodos ou propriedades estáticas e constantes EX:
    class User{
        public static $n_index = Tipos::cliente;
        const valor = "oi";//declarar constantes
        public static function pegar(Tipos $tipo) :void{
            echo $tipo->getValue();
        }
    }
    echo "<br>".User::$n_index->value."<br>";
    echo User::valor."<br>";
    echo "<br>".User::pegar(Tipos::administrador);