<?php 
    require_once "C:/xampp/htdocs/Treino_PHP/desafio/config.php"; 
    require_once $base."/file.php";
    require_once $base."/dog.php";

    class DogFile{


        static function getTable( $opcoes = true ,$element = null, $value = null, $class = null, $name = null, $type = null){
            $dogs = json_decode( File::getAllLine() );
            
            printf('<div class="container">');
            printf('<table class="table table-striped">');
            printf('<thead>');
            printf('<tr>');
            
            if(!empty( $element ))
                printf('<th></th>');

            printf('<th scope="row">ID</th>');
            printf('<th>Nome</th>');
            printf('<th>Raça</th>');

            if($opcoes)
                printf('<th>Operações</th>');
            
                printf('</tr>');
            printf('</thead>');
            print('<tbody>');
                    
            foreach ($dogs as $dog) {
                
                $dog = (array) json_decode( $dog );

                printf('<tr>');
        
                if(!empty( $element ))
                    printf('<td> <%1$s type="%4$s" class="%3$s" value="%2$s" name="%5$s" > </td>', $element, $dog[$value], $class, $type, $name);
                    
                printf('<th scope="row">%s</th>', $dog["id"]);
                
                printf( "<td>%s</td>",  $dog["nome"]);
                
                printf( "<td>%s</td>",  $dog["raca"]);
                if( $opcoes ){
                printf( 
                    '<td>
                        <a class="btn btn-primary mr-2" href="./edit/edit.view.php?id=%1$s">Editar</a>
                       
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm%1$s">Deletar</button>

                        <div class="modal fade" id="confirm%1$s" role="dialog">
                        <div class="modal-dialog modal-md">

                            <div class="modal-content">
                                <div class="modal-body">
                                    <p> Deseja excluir essa linha</p>
                                    <table class="table table-striped"> 
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>nome</th>
                                                <th>raca</th>
                                            </tr>
                                        <thead>
                                        <tbody>
                                            <tr>
                                                <td>%1$s</td>
                                                <td>%2$s</td>
                                                <td>%3$s</td>
                                            </tr>
                                        </tbody>
                                        
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <a href="./delete/delete.crud.php?id=%1$s" type="button" class="btn btn-danger" id="delete">Apagar Registo</a>
                                        <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                                </div>
                            </div>

                        </div>
                        </div>
                    </td>',  $dog["id"], $dog["nome"], $dog["raca"]);
                }
                printf('</tr>');
            }
        
            print('</tbody>');
            printf('</table>');
            printf('</div>');
        }

        static function put(DogBase $dog, $index){

            $dogs = json_decode( File::getAllLine(), true );
            $dogs[$index] = $dog->getJson();

            $arquivo = File::openToOverwrite();
            
            fwrite($arquivo, json_encode($dogs) );

            File::close($arquivo);
            header("Location: ../index.php");            

        }

        static function delete($id){
            $dog = self::findForID($id);
            
            $linhas = json_decode(File::getAllLine(), true);

            
            unset($linhas[ $dog["key"] ]);

            $arquivo = File::openToOverwrite();
            
            fwrite($arquivo, json_encode($linhas) );

            File::close($arquivo);


        }
        static function requestEmpty(...$v){
            if( empty($request["raca"]) && empty($request["nome"] )){
                echo "Maior erro da sua vida";
                File::close($arquivo);
                return true;
            }

            return false;
        }

        static function findForID(int $id){
            $dogs = json_decode( File::getAllLine(), true );

            foreach($dogs as $key => $dog){
                
                $dog = json_decode($dog);
                if( $id == $dog->id ) return array( 'key' => $key, 'dog' => $dog);

            }
            return -1;

        }


        static function getLastId($arquivo){
            fseek($arquivo, PHP_INT_MAX);
            echo $arquivo->key() + 1;
        }


        static function push(DogBase $newDog){
            $dogs = json_decode( File::getAllLine(), true );
            array_push($dogs, $newDog->getJson());

            $arquivo = File::openToOverwrite();
            
            fwrite($arquivo, json_encode($dogs) );

            File::close($arquivo);

            // header("Location: ../index.php");
        }
    }

?>