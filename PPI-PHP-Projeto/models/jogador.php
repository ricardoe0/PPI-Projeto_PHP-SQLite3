<?php
class Jogador{
        private $nome;        
        private $acertos;        
        private $erros;        
        private $hora;                
        private $minuto;        
        private $dia;        
        private $ano;        
        private $mes;  
        #Nome
        public function getNome()
        {
                return $this->nome;
        }
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }
        #Acertos
        public function getAcertos()
        {
                return $this->acertos;
        }
        public function setAcertos($acertos)
        {
                $this->acertos = $acertos;

                return $this;
        }
        #Erros
        public function getErros()
        {
                return $this->erros;
        }
        public function setErros($erros)
        {
                $this->erros = $erros;

                return $this;
        }
        /* 
        ->Hora, Minuto, Dia, Mes, Ano
        ->Hora Formatada = '0'$hora:'0'$minuto
        ->Hora Formatada = '0'$dia/'0'$mes/'0'$ano
        */
        public function getHora()
        {
                return $this->hora;
        }
        public function setHora($hora)
        {
                $this->hora = $hora;

                return $this;
        }

        public function getMinuto()
        {
                return $this->minuto;
        }
        public function setMinuto($minuto)
        {
                $this->minuto = $minuto;

                return $this;
        }
        public function getHorario(){
                $min = $this->minuto;
                $nhora = $this->hora;
                if ($min <= 9) {
                        $min = "0" . $min;
                }
                if ($nhora <= 9) {
                        $nhora = "0" . $nhora;
                }
                return $nhora . ":" . $min; 
        }

        public function getDia()
        {
                return $this->dia;
        }
        public function setDia($dia)
        {
                $this->dia = $dia;

                return $this;
        }

        public function getAno()
        {
                return $this->ano;
        }
        public function setAno($ano)
        {
                $this->ano = $ano;

                return $this;
        }

        public function getMes()
        {
                return $this->mes;
        }
        public function setMes($mes)
        {
                $this->mes = $mes;

                return $this;
        }

        public function getData(){
                $sdia = $this->dia;
                $sano = $this->ano;
                $smes = $this->mes;
                if($sdia <= 9) {
                        $sdia = "0" . $sdia;
                }
                if ($smes <= 9) {
                        $smes = "0" . $smes;
                }
                return $sdia . "/" . $smes . "/" .$sano;
        }
}
?>