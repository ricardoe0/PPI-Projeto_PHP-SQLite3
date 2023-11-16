<?php
class Partida{
        private $acertos;        
        private $erros;       
        private $data;       
        private $horario;
        
        public function getAcertos() {return $this->acertos;}

	public function getErros() {return $this->erros;}

	public function getData() {return $this->data;}

	public function getHorario() {return $this->horario;}

        public function setAcertos( $acertos) {$this->acertos = $acertos;}

	public function setErros( $erros) {$this->erros = $erros;}

	public function setData($data) {
                $this->data = $data;
        }

	public function setHorario($horario) {
                $this->horario = $horario;
        }
}	
?>