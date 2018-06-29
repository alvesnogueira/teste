<?php

class Enquete{
	private $pergunta;
	private $usuario;
	private $id = 0;
	private $respostas = [];
	
	/**
	* @object objetoParametro
	*	      objetoParametro->nome;
	*/
	public function CriaEnquete($objetoParametro)
	{
		$this->id += 1;
		$this->nomeAutor =  $objetoParametro->nome;
		$this->criaQuestionario($objetoParametro);
	}
	/**
	*
	*/
	public function criaQuestionario($objetoParametro)
	{
			$respostas = '';
			$questionario;
			foreach($objetoParametro->respostas AS $resposta){
				$respostas .= '<li>'.$resposta.'<li>';
			}
			echo $respostas;
	}
	
	
}

$enquete = new Enquete();
$objetoParametro->nome = 'Israel Alve';
$objetoParametro->pergunta = 'Seu nome';
$objetoParametro->respostas = ['Joao','Jose','Arnaldo','Israel'];

$enquete->CriaEnquete($objetoParametro);




