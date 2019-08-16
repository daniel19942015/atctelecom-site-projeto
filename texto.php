<?php

    class FormataTexto{

        private $texto;
        private $aux;
        private $novoTexto;

        public function setText($value){
            $this->texto = $value;
        }

        public function getText(){
            return $this->texto;
        }

        public function Text(){

            $this->aux = str_replace(["ã", "à", "á", "ä", "â"], "a", $this->texto);
            $this->novoTexto = str_replace(["Ã", "Á", "À", "Ä", "Â"], "A", $this->aux);
            $this->aux = str_replace(["É", "Ê", "È", "Ë"], "E", $this->novoTexto);
            $this->novoTexto = str_replace(["é", "è", "ê", "ë"], "e", $this->aux);
            $this->aux = str_replace(["Í", "Ì", "Î", "Ï"], "I", $this->novoTexto);
            $this->novoTexto = str_replace(["í", "ì", "î", "ï"], "i", $this->aux);
            $this->aux = str_replace(["Ó", "Ò", "Ô", "Õ", "Ö"], "O", $this->novoTexto);
            $this->novoTexto = str_replace(["ó", "ò", "ô", "ö", "õ"], "o", $this->aux);
            $this->aux = str_replace(["Ú", "Ù", "Û", "Ü"], "U", $this->novoTexto);
            $this->novoTexto = str_replace(["ú", "ù", "û", "ü"], "u", $this->aux);
            $this->aux = str_replace(["Ç"], "C", $this->novoTexto);
            $this->novoTexto = str_replace(["ç"], "c", $this->aux);
            $this->aux = str_replace(["Ñ"], "N", $this->novoTexto);
            $this->novoTexto = str_replace(["ñ"], "n", $this->aux);

            return strtoupper($this->novoTexto);
        }

    }

