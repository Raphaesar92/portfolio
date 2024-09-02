<?php
include("assets/header.php");
?>

<body>
    <?php
    include("assets/head.php");
    ?>
    <main>
        <section class="topo-do-site">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site">
                        <h1>TRANSFORMANDO IDEIAS EM REALIDADE DIGITAL<span>.</span></h1>
                        <p>"Sou graduado em Análise e Desenvolvimento de Sistemas e possuo
                            experiência profissional como Desenvolvedor Web, com conhecimento
                            em sistemas CRM, varejo e comerciais. Tenho experiência
                            na criação e integração de APIs utilizando PHP puro, Laravel e Node.js!"
                        </p>

                        <div class="btn-contato">
                            <a href="#">
                                <button>Entre em contato</button>
                            </a>
                        </div>
                    </div><!--txt-topo-site-->

                    <div class="img-topo-site">
                        <img src="images/foto_perfil.png" alt="">

                    </div><!--img-topo-site-->
                </div>
            </div><!--interface-->
        </section><!--topo-do-site-->

        <section class="especialidades">
            <div class="interface">
                <h2 class="titulo">Minhas <span>Especialidades</span></h2>
                <div class="flex">
                    <div class="especialidades-box">
                        <i class="bi bi-code-square"></i>
                        <h3>Website</h3>
                        <p>"Criação e estilização de websites utilizando PHP,
                            CSS e Bootstrap, com layouts versáteis e responsivos."
                        </p>
                    </div><!--especialidades-box-->
                    <div class="especialidades-box">
                        <i class="bi bi-database"></i>
                        <h3>Banco de Dados</h3>
                        <p>"Conhecimento e experiência com banco de dados relacionais MySQL, SQL Server, PostgresSQL."
                        </p>
                    </div><!--especialidades-box-->
                    <div class="especialidades-box">
                        <i class="bi bi-git"></i>
                        <h3>Git</h3>
                        <p>"Conhecimento com Git, comandos essênciais como git pull e git push, criação de repositório."
                        </p>
                    </div><!-- especialidades-box -->
                </div><!-- flex -->
            </div><!-- interface -->
        </section><!-- especialidades -->

        <section class="sobre">
            <div class="interface">
                <div class="flex">
                    <div class="img-sobre">
                        <img src="images/pessoa.png" alt="">
                    </div><!--img-sobre-->

                    <div class="txt-sobre">
                        <h2>MUITO PRAZER, <span>
                                SOU RAPHAEL CASARINI.</span>
                        </h2>
                        <p>Meu nome é Raphael Ferreira Casarini, tenho 5 anos de exeperiência como
                            Desenvolvedor Fullstack, desenolvi aplicações para Web seguindo o modelo MVC.
                            Tenho conhecimento com PHP puro e outros frameworks como Laravel, Node.js, Javascript e Codenighter.
                        </p>
                        <div class="btn-social">
                            <a href="https://www.linkedin.com/in/raphael-ferreira-casarini-ab75bb78/"><button><i class="bi bi-linkedin"></i></button></a>
                            <a href="https://www.facebook.com/raphael.ferreiracasarini"><button><i class="bi bi-facebook"></i></button></a>
                            <a href="https://wa.me/5511981471298"><button><i class="bi bi-whatsapp"></i></button></a>
                        </div>
                    </div>

                </div>
            </div><!-- interface -->
        </section><!-- sobre -->

        <section class="portfolio">
            <div class="interface">
                <h2 class="titulo">MEU <span>PORTFÓLIO</span></h2>
                <div class="flex">
                    <div class="img-port" style="background-image: url(images/imagem.jpg);">
                        <div class="overlay">Projeto 1</div>
                    </div>
                    <div class="img-port" style="background-image: url(images/imagem.jpg);">
                        <div class="overlay">Projeto 2</div>
                    </div>
                    <div class="img-port" style="background-image: url(images/imagem.jpg);">
                        <div class="overlay">Projeto 3</div>
                    </div>
                </div>
            </div><!--interface-->
        </section><!--portofolio-->

        <section class="formulario">
            <div class="interface">
                <h2 class="titulo">FALE<span>COMIGO</span></h2>

                <form action="">
                    <input type="text" name="" id="" placeholder="Seu nome" required>
                    <input type="text" name="" id="" placeholder="Seu e-mail" required>
                    <input type="text" name="" id="" placeholder="Seu celular">
                    <textarea name="" id="" placeholder="Sua mensagem" required></textarea>
                    <div class="btn-enviar"><input type="submit" value="ENVIAR"></div>
                </form>
            </div>
        </section>
    </main>
    <?php
    include("assets/footer.php");
    ?>
</body>

</html>