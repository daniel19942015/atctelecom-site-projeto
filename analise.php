

<?php 
	

   class TratarDados {
      
      public $dataNascimento; 
      public $resultado;

      public function tratarData(){
            $value = date_create($this->dataNascimento);
            $dataAtual = date_create(date("d/m/Y")); 
            $timeStamp = date_diff($dataAtual, $value);

         return date_interval_format($timeStamp, "%y");

      }

      public function setData($data){
         $this->dataNascimento = $data;
      } 


      public function getData(){
         return $this->dataNascimento;
      }

   }

?>