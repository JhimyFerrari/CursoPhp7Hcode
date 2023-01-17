<?php
//scan directory
//scaneia o diretorio
$images = scandir("images");

$data = array();

foreach ($images as $img) {

    //in_array faz uma busca dentro do array
    //in_array(needle,array $haystack)
    //in_array(ondeProcura,oqueProcura)


    if (!in_array($img, array(".",".."))) {
        $filename = "images". DIRECTORY_SEPARATOR . $img;

        //      path info traz informações do arquivo
        $info = pathinfo($filename);

        //adicionou mais uma chave ao array, contendo o filesize do arquivo
        $info["size"] = filesize($filename);

        //adicionou mais uma chave ao array, contendo o filemtime do arquivo
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));

        $info["url"] = "http://localhost/UdemyPHP.com/DIR/".str_replace("\\","/",$filename);


        array_push($data, $info);
        
    
    }
    
}

echo json_encode($data);




?>