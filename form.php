<!--Inicio de formulário-->


<form method="post" action="analise_dados.php">


  <!--Salário Colaborador-->
    <div class="form-group-1">

      <select name="salario" class="form-control">
          <option selected value="">-- Salario pretendido --</option>
          <option value="900">R$ 900,00</option>
          <option value="1000">Até R$ 1000,00</option>
          <option value="1500">Até R$ 1500,00</option>
          <option value="2000">Até R$ 2000,00</option>
          <option value="2500">Até R$ 2500,00</option>
          <option value="3000">Até R$ 3000,00</option>
          <option value="4000">Acima de R$ 3000,00</option>
      </select>

    </div>

  <!--Fim salário colaborador-->

  <!--Cargo pretendido do colaborador-->
    <div class="form-group">

      <select name="cargo" class="form-control">
          <option value="" selected>-- Cargos disponiveis --</option>
          <option value="Auxiliar de Almoxarifado">Auxiliar de Almoxarifado</option>
          <option value="Auxiliar de Administrativo">Auxiliar de Administrativo</option>
          <option value="Instalador de Telecom">Instalador de Telecom</option>
          <option value="Projetista">Projetista</option>
          <option value="Aprendiz">Aprendiz</option>
          <option value="Estágio">Estagio</option>
          <option value="Operador de frota">Operador de frota</option>
          <option value="Operador de Centro de Operações">Centro de Operacoes (COP)</option>
          <option value="Outro">Outro</option>

      </select>
    </div>
  <!---->


    <div class="form-group">
      <input type="text" name="nome" placeholder="Nome completo" class="form-control" id="nome" required>
    </div>
    <div class="form-group">
      <input type="text" name="telefone" placeholder="Telefone fixo" class="form-control" id="telefone" required>
    </div>

    <div class="form-group">
      <input type="text" name="celular" placeholder="Telefone Celular" class="form-control" id="celular"/>
    </div>

    <div class="form-group">
      <label>Data de nascimento:</label></br></br>
      <input type="date" name="data_nascimento" placeholder="Data de nascimento" class="form-control" required>
    </div>

    <div class="form-group">
      <input type="text" name="naturalidade" id="naturalidade" placeholder="Naturalidade" class="form-control">
    </div>

    <div class="form-group">
      <label>Estado civil:</label></br></br>
      <select name="civil" class="form-control" required>
          <option value="solteiro">Solteiro (a)</option>
          <option value="casado">Casado (a)</option>
          <option value="divorciado">Divorciado (a)</option>
          <option value="viuvo">Viuvo (a)</option>
      </select>
    </div>

    <div class="form-group">
      <label>Sexo:</label></br></br>
      Feminino: <input type="radio" name="sexo" value="F"/></br></br>
      Masculino: <input type="radio" name="sexo" value="M"/></br></br>
      Outro: <input type="radio" name="sexo" value="O" checked/>
    </div>

    <div class="form-group">
      <input type="text" name="rg" placeholder="Numero do RG" class="form-control" id="rg" required>
    </div>
    
    <div class="form-group">
      <input type="text" name="cpf" placeholder="Numero do CPF" class="form-control" id="cpf" required/>
    </div>


    
   <!--*******************************************Area endereço site***************************************************-->


    <div id="informacao"><h1><i class="fa fa-map-marker"></i>&nbsp&nbsp Localização</h1></div>


    <div class="form-group">
      <input name="cep" type="text" id="cep" value="" onblur="pesquisacep(this.value);" class = "form-control" placeholder="Digite o CEP: 04361-090" required/>
    </div>

    <div class="form-group">
      <input type="text" name="rua" id="rua" value="" placeholder="Endereço: Av. exemplo" class="form-control" readonly required/>
    </div>
    <div class="form-group">
      <input type="number" name="numero" placeholder="Digite o numero Ex: 222" class="form-control" required>
    </div>
    <div class="form-group">
      <input type="text" name="complemento" id="complemento" placeholder="Digite seu Complemento" class="form-control">
    </div>
    <div class="form-group">
      <input type="text" name = "bairro" id = "bairro" placeholder="bairro" class="form-control" readonly/>
    </div>
    <div class="form-group">
      <input type="text" name = "cidade" id = "cidade" placeholder="Cidade" class="form-control" readonly>
    </div>
    <div class="form-group">
      <input name="uf" type="text" id="uf" size="2" class="form-control" placeholder="uf" readonly/>
    </div>

    <input name="ibge" type="text" id="ibge" size="8" style="display:none;"/>

  <!--*****************************************Final Area endereço site************************************************-->

    <div id="informacao"><i class="fa fa-book"></i>&nbsp&nbsp Instrução</div> 

    <div class="form-group">
      <br/><label><b>Ensino fundamental:</b></label></br></br>
      Não: &nbsp<input type="radio" name="fundamental" value="N" /></br></br>
      Incompleto: &nbsp<input type="radio" name="fundamental" value="I" /></br></br>
      Completo: &nbsp<input type="radio" name="fundamental" value="S" checked/></br></br>
    </div>

    <div class="form-group">
      <br/><label><b>Ensino Médio:</b></label></br></br>
      Não: &nbsp<input type="radio" name="medio" value="N" /></br></br>
      Incompleto: &nbsp<input type="radio" name="medio" value="I" /></br></br>
      Completo: &nbsp<input type="radio" name="medio" value="S" checked /></br></br>
    </div>

    <div class="form-group">
      <br/><label><b>Ensino Técnico:</b></label></br></br>
      Não: &nbsp<input type="radio" name="tecnico" checked value="N" /></br></br>
      Incompleto: &nbsp<input type="radio" name="tecnico" value="I" /></br></br>
      Completo: &nbsp<input type="radio" name="tecnico" value="S" /></br></br>
    </div>

    <div class="form-group">
      <br/><label><b>Ensino Superior: </b></label></br></br>
      Não: &nbsp<input type="radio" name="superior" checked="ok" value="N" /></br></br>
      Incompleto: &nbsp<input type="radio" name="superior" value="I" /></br></br>
      Completo: &nbsp<input type="radio" name="superior" value="S" /></br></br>
    </div>

    <div class="form-group">
      <br/><label><b>Língua extrageira: </b></label></br></br>

      Não: &nbsp<input type="radio" name="lingua" checked="ok" value="N"/></br></br>
      Inglês: &nbsp<input type="radio" name="lingua" value="IN" /></br></br>
      Espanhol: &nbsp<input type="radio" name="lingua" value="ES"/></br></br>
      Outra: &nbsp<input type="radio" name="lingua" id="outra" value="OU" /></br></br>
  

      <div id="descricao">
          <p>Descreva:</p><br/>
          <textarea class="area" name="outraLingua"></textarea>
      </div>

    </div>
    
    <div class="form-group">
      <label><b>Conhecimento em informática: </b></label></br></br>
      Sim: &nbsp<input type="radio" name="informatica" id="info_sim" value="S"/></br></br>
      Não: &nbsp<input type="radio" name="informatica" checked id="info_nao" value="N"/></br></br>

      <div id="informatica">
          <p>Descreva:</p><br/>
          <textarea class="area" name="cursoInfo"></textarea>
      </div>

    </div>

    <div class="form-group">
      <label><b>Outro curso: </b></label></br></br>
      Sim: &nbsp<input type="radio" name="curso" id="curso_sim" /></br></br>
      Não: &nbsp<input type="radio" name="curso" id="curso_nao" checked/></br></br>

      <div id="apcurso">
        <p>Descreva:</p></br>
        <textarea class="area" name="outroCurso"></textarea>
      </div>

    </div>



    <!--*****************************************Inicio area de experiência************************************************-->
    <div id="informacao">
      <h1><i class="fa fa-briefcase"></i>&nbsp&nbsp Experiência Anterior</h1>
    </div>
    
    <div class="form-group">
      <input type="text" name="nomeEmpresa" id="nomeEmpresa" placeholder="Nome da empresa" class="form-control" >
    </div>

    <div class="form-group">
      <input type="text" name="cargoEmpresa" id="cargoEmpresa" placeholder="Cargo Anterior" class="form-control" >
    </div>

    <div class="form-group">
      <input type="text" name="telefoneEmpresa" id="telefoneEmpresa" placeholder="Telefone da empresa" class="form-control" >
    </div>

    <div class="form-group">
      <label>Data de Admissão:</label></br></br>
      <input type="date" name="dataAdmEmpresa" class="form-control">
    </div>

    <div class="form-group">
      <label>Data de Demissão:</label></br></br>
      <input type="date" name="dataDemEmpresa" placeholder="Nome da empresa" class="form-control"/>
    </div>

    <div class="form-group">
      <label>Motivo da saida:</label></br></br>
      <textarea class="area" name="motivoSaida" id="motivoSaida"></textarea>
    </div>

    <div id="informacao">
      <h1><i class="fa fa-info-circle"></i>&nbsp&nbsp Informações complementares</h1>
    </div>

    <div class="form-group">
      <label><b>Flexibilidade de horário: </b></label></br></br>
      Sim: &nbsp<input type="radio" name="horario" value="S"/></br></br>
      Não: &nbsp<input type="radio" name="horario" checked value="N"/></br></br>
    </div>

    <div class="form-group">
      <label><b>Possui CNH: </b></label></br></br>
      Sim: &nbsp<input type="radio" name="cnh" value="S"/></br></br>
      Não: &nbsp<input type="radio" name="cnh" value="N" checked/></br></br>
    </div>

    <div class="form-group">
      <label><b>Conhece alguém que trabalha na ATC Telecom?</b></label></br></br>
      Sim: &nbsp<input type="radio" name="work" value="S"/></br></br>
      Não: &nbsp<input type="radio" name="work" value="N" checked/></br></br>


      <div id="apwork">
          <p>Se sim, quem?</p><br/>
          <textarea class="area" name="alguem"></textarea>
      </div>

    </div>

    <div class="form-group">
      <label><b>Tem experiência no cargo pretendido?</b></label></br></br>
      Sim: &nbsp<input type="radio" name="experiencia" value="S"/></br></br>
      Não: &nbsp<input type="radio" name="experiencia" value="N" checked/></br></br>
    </div>

    <div class="form-group">
      <label><b>O que você espera da empresa?</b></label></br></br>
      <textarea class="area" name="esperaAtc" required></textarea></br></br>
    </div>

    <div class="form-group">
      <label><b>Por que devemos escolhê-lo para trabalhar conosco?</b></label></br></br>
      <textarea class="area" name="weWork" required></textarea>
    </div>

    <div class="form-group">
      <label><b>Cite seus pontos positivos e negativos?</b></label></br></br>
      <textarea class="area" name="pontos" required></textarea>
    </div>

    <div class="form-group">
      <button name="registro" class="btn-reg">Enviar</button>
    </div>

  </form>

  <script>
    

    const dados = {
      telefone: function(input){

        input.addEventListener("keypress", function(){

            const validate = /\(\d{2}\)\s?\d{4}-\d{4}/g;
            input.value = input.value.replace(/[a-zA-Z]/g, "");
            const lenTel = "(00) 0000-0000";
            input.maxLength = lenTel.length;

            switch(input.value.length){
              case 0:
                input.value = "(" + input.value;
              break; 
              case 3:
                input.value = input.value + ")";
              break;
              case 4:
                input.value = input.value + " ";
              break;
              case 8:
                input.value = input.value + "-";
              break;
            }
        })
      },

      celular: function(input){
        input.addEventListener("keypress", function(){
          
            const validate = /\(\d{2}\)\s?\d{4}-\d{4}/g;
            input.value = input.value.replace(/[a-zA-Z]/g, "");
            const lenTel = "(00) 00000-0000";
            input.maxLength = lenTel.length;

            switch(input.value.length){
              case 0:
                input.value = "(" + input.value;
              break; 
              case 3:
                input.value = input.value + ")";
              break;
              case 4:
                input.value = input.value + " ";
              break;
              case 9:
                input.value = input.value + "-";
              break;
            }
        })
      },

      rg: function(input){

        input.addEventListener("keypress", function(){
          input.value = input.value.replace(/[a-zA-Z]/g, "");
          const lenRg = "00.000.000-00";
          input.maxLength = lenRg.length;

            switch(input.value.length){
              case 2:
                input.value = input.value + ".";
              break;
              case 6:
                input.value = input.value + ".";
              break;
              case 10:
                input.value = input.value + "-";
              break;
            }
        })
      },

      cpf: function(input){

        input.addEventListener("keypress", function(){

          input.value = input.value.replace(/[a-zA-Z]/g, "");
          const lenCpf = "000.000.000-00";
          input.maxLength = lenCpf.length;

            switch(input.value.length){
              case 3:
                input.value = input.value + ".";
              break;
              case 7:
                input.value = input.value + ".";
              break;
              case 11:
                input.value = input.value + "-";
              break;
            }
        })
      }, 
      cep: function(input){
        input.addEventListener("keypress", function(){

          input.value = input.value.replace(/[a-zA-Z]/g, "");
          const lenCep = "00000-000";
          input.maxLength = lenCep.length;

          switch(input.value.length){
            case 5:
              input.value = input.value + "-";
            break;
          }
        })
      },
      
      texto: function(input){
        input.addEventListener("keyup", function(){
          input.value = input.value.replace(/([àáâãä])/g, "a");
          input.value = input.value.replace(/[éèêë]/g, "e");
          input.value = input.value.replace(/[íìîï]/g, "i");
          input.value = input.value.replace(/[ôòóöõ]/g, "o");
          input.value = input.value.replace(/[ûúùü]/g, "u");
          input.value = input.value.replace(/[ç]/g, "c");
          input.value = input.value.replace(/[ñ]/g, "n");
          // Elimina todas as letras com 
          input.value = input.value.replace(/([ÁÀÂÃÄ])/g, "A");
          input.value = input.value.replace(/[ÉÈÊË]/g, "E");
          input.value = input.value.replace(/[ÍÌÎÏ]/g, "I");
          input.value = input.value.replace(/[ÒÓÖÕ]/g, "O");
          input.value = input.value.replace(/[ÛÚÙÜ]/g, "U");
          input.value = input.value.replace(/[Ç]/g, "C");
          input.value = input.value.replace(/[Ñ]/g, "N");
        }) 
      }
    }

    dados.telefone(document.getElementById("telefone"));
    dados.telefone(document.getElementById("telefoneEmpresa"));
    dados.celular(document.getElementById("celular"));
    dados.rg(document.getElementById("rg"));
    dados.cpf(document.getElementById("cpf"));
    dados.cep(document.getElementById("cep"));
    dados.texto(document.getElementById("nomeEmpresa"));
    dados.texto(document.getElementById("cargoEmpresa"));
    dados.texto(document.getElementById("nome"));
    dados.texto(document.getElementById("naturalidade"));
    dados.texto(document.getElementById("complemento"));

    for(let i = 0; i <= document.getElementsByClassName("area").length; i++){
      dados.texto(document.getElementsByClassName("area")[i]);
    }
    
    </script>

