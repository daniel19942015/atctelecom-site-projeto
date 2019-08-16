 
<?php       

        require_once('conexao.php');
        require_once('analise.php');
        require_once('texto.php');
        
if($_POST){

        require_once('resp_aceito.php');

       
        $avulso = "";   
        $salario = strtoupper($_POST['salario']);
        $cargo = strtoupper($_POST['cargo']);
        $nome = strtoupper($_POST['nome']);
        $telefone = strtoupper($_POST['telefone']);
        $celular = strtoupper($_POST['celular']);
        $data_nascimento = strtoupper($_POST['data_nascimento']);

        // // recurso idade
        
        $pegarIdade = new TratarDados();
        $pegarIdade->setData($data_nascimento);
        $idadeIndividuo = $pegarIdade->tratarData();

        // resultado
        $idade = $idadeIndividuo;

        $naturalidade = strtoupper($_POST['naturalidade']);
        $civil = strtoupper($_POST['civil']);
        $sexo = strtoupper($_POST['sexo']);
        $rg = strtoupper($_POST['rg']);
        $cpf = strtoupper($_POST['cpf']);
        $cep = strtoupper($_POST['cep']);

        // Exclui caracteres acentuados
        $convertRua = new FormataTexto;

        $ruaAux = strtoupper($_POST['rua']);
        $convertRua->setText($ruaAux);
        $rua = $convertRua->Text();


        $numAux = strtoupper($_POST['numero']);
        $convertRua->setText($numAux);
        $numero = $convertRua->Text();


        $comAux = strtoupper($_POST['complemento']);
        $convertRua->setText($comAux);
        $complemento = $convertRua->Text();
        
        
        $baiAux = strtoupper($_POST['bairro']);
        $convertRua->setText($baiAux);
        $bairro = $convertRua->Text();
        

        $cidAux = strtoupper($_POST['cidade']);
        $convertRua->setText($cidAux);
        $cidade = $convertRua->Text();


        $uf = strtoupper($_POST['uf']);

        $fundamental = strtoupper($_POST['fundamental']);
        $medio = strtoupper($_POST['medio']);
        $tecnico = strtoupper($_POST['tecnico']);
        $superior = strtoupper($_POST['superior']);
        $lingua = strtoupper($_POST['lingua']);
        $outraLingua = strtoupper($_POST['outraLingua']);
        $informatica = strtoupper($_POST['informatica']);
        $cursoInfo = strtoupper($_POST['cursoInfo']);
        $curso = strtoupper($_POST['curso']);
        $outroCurso = strtoupper($_POST['outroCurso']);
        $nomeEmpresa = strtoupper($_POST['nomeEmpresa']);
        $cargoEmpresa = strtoupper($_POST['cargoEmpresa']);
        $telefoneEmpresa = strtoupper($_POST['telefoneEmpresa']);
        $dataAdmEmpresa = strtoupper($_POST['dataAdmEmpresa']);
        $dataDemEmpresa = strtoupper($_POST['dataDemEmpresa']);
        $motivoSaida = strtoupper($_POST['motivoSaida']);
        $horario = strtoupper($_POST['horario']);
        $cnh = strtoupper($_POST['cnh']);
        $work = strtoupper($_POST['work']);
        $alguem = strtoupper($_POST['alguem']);
        $experiencia = strtoupper($_POST['experiencia']);
        $esperaAtc = strtoupper($_POST['esperaAtc']);
        $weWork = strtoupper($_POST['weWork']);
        $pontos = strtoupper($_POST['pontos']);
        $resultado = 0;



        // Ranking

        $dataCompare = new TratarDados();
        $dataCompare->setData($data_nascimento);
        $resposta = $dataCompare->tratarData();
        
        if ($resposta >= 18 && $resposta <= 50) {
                
                $resultado += 50;

        }else{
                $resultado += 0;
        }

        // ensino fundamental

        if ($fundamental == "S") {
                $resultado += 20;

        }elseif ($fundamental == "I") {
                $resultado += 10;

        }else{
                $resultado += 0;
        }

        // ensino Medio 

         if ($medio == "S") {
                $resultado += 30;

        }elseif ($medio == "I") {
                $resultado += 15;
                
        }else{
                $resultado += 0;
        }

        // ensino tecnico

         if ($tecnico == "S") {
                $resultado += 40;

        }elseif ($tecnico == "I") {
                $resultado += 20;
                
        }else{
                $resultado += 0;
        }

        // ensino superior

        if ($superior == "S") {
                $resultado += 100;

        }elseif ($superior == "I") {
                $resultado += 50;
                
        }else{
                $resultado += 0;
        }


        // saber lingua

        if ($lingua == "IN" || $lingua == "ES" || $lingua == "OU") {
                $resultado += 50;
        }else{
                $resultado += 0;
        }

        // informatica

        if ($informatica == "S") {
                $resultado += 50;   
        }else{
                $resultado += 0;
        }

        // outro curso

        if ($curso == "S") {
                $resultado += 35;   
        }else{
                $resultado += 0;
        }

        // fexibilidade
        if ($horario == "S") {
                $resultado += 25;   
        }else{
                $resultado += 0;
        }

        // possui cnh

        if ($cnh == "S") {
                $resultado += 50;   
        }else{
                $resultado += 0;
        }

        // possui experiencia  

        if ($experiencia == "S") {
                $resultado += 80;   
        }else{
                $resultado += 0;
        }


        $stmt = $con->prepare("INSERT INTO cadastro_processos VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
       
        $stmt->bind_param(
            "sssssssisssssssissssssssssssssssssssssssssssi",
            $avulso,
            $salario,
            $cargo,
            $nome,
            $telefone,
            $celular,
            $data_nascimento,
            $idade,
            $naturalidade,
            $civil,
            $sexo,
            $rg,
            $cpf,
            $cep,
            $rua,
            $numero,
            $complemento,
            $bairro,
            $cidade,
            $uf,
            $fundamental,
            $medio,
            $tecnico,
            $superior,
            $lingua,
            $outraLingua,
            $informatica,
            $cursoInfo,
            $curso,
            $outroCurso,
            $nomeEmpresa,
            $cargoEmpresa,
            $telefoneEmpresa,
            $dataAdmEmpresa,
            $dataDemEmpresa,
            $motivoSaida,
            $horario,
            $cnh,
            $work,
            $alguem,
            $experiencia,
            $esperaAtc,
            $weWork,
            $pontos,
            $resultado
        );


        $stmt->execute();

        

    }elseif(!$_POST){
        require_once('resp_nao_aceito.php');
    }
