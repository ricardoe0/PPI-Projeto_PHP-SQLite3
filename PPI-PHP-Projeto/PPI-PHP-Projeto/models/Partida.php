<?php
class Partida{
        private $acertos;        
        private $erros;       
        private $data;       
        private $horario;
        private $id;
        private $id_jogador;
        
        public function getAcertos() {return $this->acertos;}

	public function getErros() {return $this->erros;}

	public function getData() {return $this->data;}

	public function getHorario() {return $this->horario;}

	public function getId() {return $this->id;}

	public function getIdJogador() {return $this->id_jogador;}

        public function setAcertos( $acertos) {$this->acertos = $acertos;}

	public function setErros( $erros) {$this->erros = $erros;}

	public function setId( $id) {$this->id = $id;}

	public function setIdJogador( $id_jogador) {$this->id_jogador = $id_jogador;}

	public function setData($data) {
                $this->data = $data;
        }

	public function setHorario($horario) {
                $this->horario = $horario;
        }
}	
?>