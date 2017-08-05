<?php


class Usuario implements JsonSerializable{
	
	private $nome;
	private $sobrenome;
	private $idade;
	private $sexo;
	private $id_tipo;
	private $cidade;
	private $cep;
	private $cpf;
	private $numComp;
	private $login;
	private $rua;
	private $bairro;
	private $status;
	private $id;
	
	public function __construct($nome,$idade,$sexo,$id =""){
		$this->nome = $nome;
		
		$this->idade = $idade;
		
		$this->sexo = $sexo;
				
		$this->id = $id;
		}
		
	public function jsonSerialize()
    {
        return [
            'cliente' => [
                'nome' => $this->getNome(),
                'idade' => $this->getIdade(),				
                'sexo' => $this->getSexo(),
                'id' => $this->getId()
            ]
        ];
    }
	
	public function setNome($nome){
		$this->nome = $nome;
		}
	public function getNome(){
		return $this->nome;
		}
	public function setIdade($idade){
		$this->idade = $idade;
		}
	public function getIdade(){
		return $this->idade;
		}
	public function setSexo($sexo){
		$this->sexo = $sexo;
		}
	public function getSexo(){
		return $this->sexo;
		}
	public function setLogin($login){
		$this->login = $login;
		}
	public function getLogin(){
		return $this->login;
		}
	public function setId($id){
		$this->id = $id;
		}
	public function getId(){
		return $this->id;
		}
	
}

