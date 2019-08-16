    
    <div id="menuResponsive">
            <button id="buttonResponsive">x</button>

                      <div id="submenu">
                                <ul>
                                      <li><a href="#">quem somos?</a></li>
                                      <li><a href="#">serviços</a></li>
                                      <li><a href="#">cases</a></li>
                                      <li>
                                            <a href="#">Empresa
                                              <ul id="submenu-menu">
                                                <li><a href = "">História</a></li>
                                                <li><a href = "">Missão visão e valores</a></li>
                                              </ul>
                                            </a>
                                     </li>
                                     <li><a href="#">colaborador</a></li>
                                     <li><a href="#">contatos</a></li>
                              </ul>
                      </div>

        </div>


<header id="container-menu">


       <section id="top-1">


             <section class="top-2">


                        <div class="location">
                              <div class="content-top1">
                                <i class="fa fa-phone"></i>
                                 <div class="telefone"><span>Telefone:</span><p>(11) 5564 - 9222</p></div>
                              </div>

                              <div class="content-top2">
                                <i class="fa fa-whatsapp"></i>
                                <div class="whatsapp"><span>Whatsapp:</span><p>(11) 99274-4733</p></div>
                              </div>
                        </div>

                        <div class="location"><img src="images/atclogo2.png"></div>

                        <div class="location">

                                <div class="content-top-link"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></div>

                                <div class="content-top-goo">
                                  <a href="#" target="_blank"><i class="fa fa-google"></i></a>
                                </div>

                                <div class="content-top-face">
                                        <a href="https://www.facebook.com.br" target="_blank"><i class="fa fa-facebook"></i></a>
                                </div>
                        </div>

                </section>

          </section>

          <section id="top-menu">

                     <button id="buttonMenu"><i class="fa fa-align-justify" aria-hidden="true"></i></button>

                     <script type="text/javascript">



                              let botao = document.getElementById("buttonMenu");
                              let menuResp = document.getElementById("menuResponsive");
                              let btnResp = document.getElementById("buttonResponsive");

                              botao.addEventListener("click", function(){
                                menuResp.style.display = "block";
                              });

                              btnResp.addEventListener("click", function(){
                                menuResp.style.display = "none";
                              });



                     </script>

            <section id="menu-center">

                            <div class="logo-oficial">
                                            <a href="index.php"><img src="images/_atcLogo.png" id="logo1" /></a>
                                            <a href="index.php"><img src="images/_atcLogo2.png" id="logo2"/></a>
                            </div>

                          <nav class="menu">



                                            <ul>
                                                <li><a href="index.php" class="menu-font">home</a></li>
                                                <li>
                                                    <a href="#" class="menu-font">quem somos?</a>
                                                    <ul class="sub-menu">
                                                          <li><a href="colaborador.php" class="menu-font">história</a></li>
                                                          <li><a href="#" class="menu-font">missão, visão e valores</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#" class="menu-font">serviços</a>
                                                    <ul class="sub-menu2">
                                                          <li><a href="_colaboration.php" class="menu-font">tv à cabo</a></li>
                                                          <li><a href="#" class="menu-font">backbone</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="_cases.php" class="menu-font">cases</a></li>
                                                <li><a href="_colaboration.php" class="menu-font">colaborador</a></li>
                                                <li><a href="_contact.php" class="menu-font">contatos</a></li>
                                            </ul>
                                            <script type="text/javascript">

                                                let menu = document.getElementsByClassName("menu-font");

                                                      for(i = 0; i < menu.length; i++){
                                                          menu[i].style.textTransform = "uppercase";
                                                      }


                                            </script>

                          </nav>




            </section>

            <div class="clear"></div>

          </section>
  </header>
