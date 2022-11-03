<?php 
    class File{
        const FILE = 'C:/xampp/htdocs/Treino_PHP/desafio/dog.json';

        static function openToWrite(){
            $file = fopen( File::FILE, 'a+' );
            return $file;
        }

        static function openToOverwrite(){
            $file = fopen( File::FILE, 'w' );
            return $file;
        }

        static function getAllLine(){
            $linhas = file(File::FILE);

            return implode("", $linhas);
        }

        static function close(&$file){
            fclose($file);
        }

        static function lastLine(){
            $linhas = json_decode(self::getAllLine(), true);
            $lastLine = $linhas[count($linhas) - 1];
            var_dump($lastLine);
            
            return $lastLine;
        }
    }

?>