<?php

class Card{

    public $id;
    public $titulo;
    public $descricao;
    public $ref_img_1;
    public $ref_img_2;
    public $diretorio;

    public function __get($atr) {
        return $this->$atr;
    }

    public function __set($atr, $valor) {
        $this->$atr = $valor;
    }

    
}

$path = "projetos/";
$diretorio = dir($path);

$lista_cards = [];

$i = 0;

while($arquivo = $diretorio -> read()){
    
    if (!($arquivo == '.' || $arquivo == '..')){

        $titulo = file_get_contents($path.$arquivo.'/portifolio/titulo.txt');
        $descricao = file_get_contents($path.$arquivo.'/portifolio/descricao.txt');
        $ref_img_1 = $path.$arquivo.'/portifolio/img1.png';
        $ref_img_2 = $path.$arquivo.'/portifolio/img2.png';
        $ref = $path.$arquivo;


        $card = new Card();

        $card->__set('id',$i);

        $card->__set('titulo',$titulo);
        $card->__set('descricao',$descricao);
        $card->__set('ref_img_1',$ref_img_1);
        $card->__set('ref_img_2',$ref_img_2);


        $card->__set('diretorio', $ref);

        array_push($lista_cards, $card);
        
        $i++;

    }

}
$diretorio -> close();


?>