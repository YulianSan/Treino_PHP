<!-- fopen() – ‘Abre’ o arquivo para que possa ser manipulado.
fgets() – Pega uma linha do arquivo até o máximo de 1024bytes.
feof() – Durante a leitura de um arquivo, avisa se chegou ao final.
file_get_contents() – Pega todo conteúdo do arquivo aberto como uma string.
ftruncate() – Reduz o tamanho do arquivo. Usado para apagar seu conteúdo.
fwrite() – Escreve no arquivo.
unlink() – Apaga o arquivo indicado. 



‘w’	Abre o arquivo para apenas escrita.exclui tudo
‘w+’Abre o arquivo para leitura e escrita;exclui tudo
‘r’	Abre o arquivo somente para leitura;
‘r+’Abre para leitura e escrita; coloca o ponteiro de escrita no começo do arquivo. exclui tudo
‘a’	Abre para somente para escrita somente; coloca o ponteiro do arquivo no final. Se o arquivo não existir, tenta criá-lo. não exclui
‘a+’Abre o arquivo para leitura e escrita; coloca o ponteiro do arquivo no final. Se o arquivo não existir, tenta criá-lo. não exclui
‘x’	Cria e abre o arquivo para escrita somente; da erro se um arquivo já existir
‘x+’Cria e abre um arquivo para escrita e leitura; da erro se um arquivo já existir -->
<?php 
//so um teste aleatório
    include("./classes.php");
    
    use foo\Cat as Cat;
    echo Cat::says();
//fim desse teste aleatório
    if(!is_dir("Ola")){//ve se existe esse diretorio
        mkdir("Ola",0777);//nome e  permissão dos arquivos
    }
    else 
        rmdir("Ola");//nome para excluir

    $arquivo = fopen("arquivoTeste.txt","a+");//cria ou procura um arquivo, pode colocar o caminho inteiro ou so o nome se estiver na msm pasta
    $acumulador = array();
    
    if( $arquivo == false )
        die("Erro ao acessar o arquivo");
    //primeiro lê e depois escreve, da erro se fazer ao contrario
    // while(true) {
    //     $linha = fgets($arquivo);
    //     if ($linha==null) break;
    //     echo $linha."- 2<br />";
    // } os dois exemplos leem o arquivo inteiro esse e o de baixo
    while(!feof($arquivo)) {
        $acumulador[] = fgets($arquivo);//pode dar um echo direito
    }
    var_dump(join("<br />", $acumulador));//tbm lê todo o arquivo

    fwrite($arquivo, "Olá mundo do back-end novo-674\r\n");//escreve no arquivo
    
    fclose($arquivo);
?>