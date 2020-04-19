<!DOCTYPE html>
<!--
    HyperGaming - Gaming CSS Framework
    NOTE: Chromium 73.0.3683.86 for Arch Linux 64 bits
    @author Gabriel Lopes Ferreira Ramos <gabrielramos149@gmail.com>
    @link https://github.com/hiperesp/hypergaming
    @license UNDEFINED
-->
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="theme-color" content="#080325">
    <meta name="author" content="EasyCode">
    <title>EasyCode - Desenvolvimento de Sistemas</title>
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link rel="stylesheet" type="text/css" href="css/color/default.css">
    <link rel="stylesheet" type="text/css" href="css/custom_style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" type="text/css" href="font/materialdesignicons/material-icons.css">
    <!--link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png"-->
    <link rel="icon" type="image/png" href="images/logo_white.png"-->
    <script src="js/script.js" defer=""></script>
    <style>
footer .news, footer .copyright {
    font-weight: lighter;
}
footer .link {
    text-decoration: underline;
}
    </style>
</head>

<body>
    <div class="screen" data-screen="loading">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-50 -50 200 200" preserveAspectRatio="xMidYMid" class="loading">
            <circle cx="50" cy="50" fill="none" r="40" stroke="#2e0048" stroke-dasharray="60" stroke-linecap="round" stroke-width="4"></circle>
        </svg>
        <div class="loading-content">
            <img src="images/logo_white.png">
        </div>
    </div>
    <div class="screen" data-screen="resize-warning">
        <div class="screen-content">
            <h1>Atenção</h1><br>
            <h3>Notamos que você redimensionou a janela do navegador.</h3><br>
            <p>Nosso site não funciona bem quando você alterna entre os modos mobile e PC sem recarregar a página.</p>
            <p>Recomendamos que você recarregue a página para que ele funcione perfeitamente no novo modo.</p>
            <p>Caso opte por não recarregar a página, o site pode se comportar de maneira instável, para contornar esse problema, recarregue a página.</p>
            <p>Caso escolha desativar esse aviso, você pode habilitar novamente limpando os cookies do site.</p><br><br>
            <a class="button-2" href="javascript:void(0)" data-resize-action="reload">Recarregar</a>
            <a class="button-1" href="javascript:void(0)" data-resize-action="no-reload">Não recarregar</a>
            <a class="button-1" href="javascript:void(0)" data-resize-action="disable-warning">Desativar esse aviso</a>
        </div>
    </div>
    <header>
        <div class="header-container">
            <input id="hamburger-controller" type="checkbox" class="hamburger-controller">
            <a href="#">
                <div class="logo">
                    <img src="images/logo_white.png">
                </div>
            </a><!--
         --><label class="hamburger-controller-label only-mobile" for="hamburger-controller"><i class="material-icons menu-closed">menu</i><i class="material-icons menu-opened">close</i></label><!--
         --><nav>
                <ul class="menu menu-left">
                    <li class="menu-item">
                        <a href="javascript:void(0)">
                            <div class="menu-item-title">Nossos Projetos <i class="material-icons">arrow_drop_down</i></div>
                            <div class="menu-item-subtitle">Desenvolvidos</div>
                        </a>
                        <div class="dropdown-content">
                            <ul class="dropdown-column">
                                <li class="dropdown-item">
                                    <a target="_blank" href="https://github.com/hiperesp/Simple-PHP-Hosting-System" title="Sistema de hospedagem de sites PHP + MariaDB">Simple PHP Hosting System <span class="badge-1" style="background-color: #600089;">Público</span></a>
                                </li>
                                <li class="dropdown-item">
                                    <a target="_blank" href="https://github.com/hiperesp/hypergaming" title="Gaming CSS Framework">HyperGaming CSS <span class="badge-1" style="background-color: #600089;">Público</span></a>
                                </li>
                                <li class="dropdown-item">
                                    <a target="_blank" href="https://github.com/hiperesp/PHP-Database-Auto-Installer" title="Instalador Automático de Banco de Dados em PHP">PHP Database Auto Installer <span class="badge-1" style="background-color: #600089;">Público</span></a>
                                </li>
                                <li class="dropdown-item">
                                    <a target="_blank" href="https://contrata.eu.org" title="ContrataEu">ContrataEu <span class="badge-1" style="background-color: #0080ff;">Em desenvolvimento</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a href="#team">
                            <div class="menu-item-title">Equipe <i class="material-icons">arrow_drop_down</i></div>
                            <div class="menu-item-subtitle">EasyCode</div>
                        </a>
                        <div class="dropdown-content">
                            <ul class="dropdown-column">
                                <li class="dropdown-item">
                                    <a href="#alexLopes">Alex Lopes <span class="badge-1">Fundador</span></a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#cesarRocha">César Rocha</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#gabrielLopes">Gabriel Lopes</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#gabrielOliveira">Gabriel Oliveira</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#lucasRamos">Lucas Ramos</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#rafaelLopes">Rafael Lopes</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a href="#team">
                            <div class="menu-item-title">Ferramentas <i class="material-icons">arrow_drop_down</i></div>
                            <div class="menu-item-subtitle">públicas</div>
                        </a>
                        <div class="dropdown-content">
                            <ul class="dropdown-column">
                                <li class="dropdown-item">
                                    <a target="_blank" href="http://speedtest.easycode.eu.org">SpeedTest <span class="badge-1">by Ookla</span></a>
                                </li>
                                <li class="dropdown-item">
                                    <a target="_blank" id="contrataEuLink" href="http://contrata.eu.org">Contrata Eu <span class="badge-1">Novo!</span></a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:alert('Atenção:\nO Trampo Fácil agora é \u0022Contrata Eu\u0022.');document.querySelector('#contrataEuLink').click();">Trampo Fácil</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="menu menu-right">
                    <li class="menu-item">
                        <a href="#contact">
                            <div class="menu-item-title">Entre em contato</div>
                            <div class="menu-item-subtitle">Com a EasyCode</div>
                        </a>
                    </li>
                </ul>
            </nav>
            <label class="hamburger-close-label only-mobile" for="hamburger-controller"></label>
        </div>
    </header>
    <main>
        <section class="slider">
            <div class="section-title"></div>
            <div class="section-content">
                <div class="slide" data-timeout="7500">
                    <div class="slide-background">
                        <img src="images/simple_php_hosting_system.jpg">
                    </div>
                    <div class="slide-content" style="padding-top: 80px;">
                        <div class="slide-content-container">
                            <div class="slide-title">
                                <h1>Simple PHP Hosting System<br>Hospedagem Compartilhada</h1>
                            </div>
                            <div class="slide-text">
                                <p>Um sistema de hospedagem em PHP, com suporte ao banco de dados MariaDB. Linux</p>
                            </div>
                            <div class="slide-options">
                                <a target="_blank" href="https://github.com/hiperesp/Simple-PHP-Hosting-System/tree/master" class="button-2 button-large"><i class="material-icons">cloud_download</i> Obter código-fonte</a>
                                <a target="_blank" href="https://github.com/hiperesp/Simple-PHP-Hosting-System/" class="button-1 button-large"><i class="material-icons">format_align_left</i> Mais informações</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide" data-timeout="7500">
                    <div class="slide-background">
                        <img src="images/lol.jpg">
                    </div>
                    <div class="slide-content" style="padding-top: 80px;">
                        <div class="slide-content-container">
                            <div class="slide-title">
                                <h1>HyperGaming CSS<br>Gaming CSS Framework</h1>
                            </div>
                            <div class="slide-text">
                                <p>Um framework CSS para desenvolvimento de sites no estilo "Gaming".</p>
                            </div>
                            <div class="slide-options">
                                <a target="_blank" href="http://hiperesp.github.io/HyperGaming/" class="button-2 button-large"><i class="material-icons">remove_red_eye</i> Demonstração</a>
                                <a target="_blank" href="https://github.com/hiperesp/HyperGaming/" class="button-1 button-large"><i class="material-icons">cloud_download</i> Obter código-fonte</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-pos">
                <div class="change-slide"></div>
                <div class="slide-timer"></div>
            </div>
        </section>
        <section class="news" id="team">
            <div class="section-title">Nossa Equipe</div>
            <div class="section-content">
                <article id="alexLopes">
                    <div class="article-image">
                        <img src="images/team/alex.png">
                    </div>
                    <div class="article-content">
                        <div class="article-title">
                            <h1>Alex Lopes</h1><span class="article-date"><i class="material-icons">date_range</i> desde 11/09/2019</span>
                        </div>
                        <div class="article-tags">
                            <i class="material-icons">local_offer</i>
                            <a href="javascript:void(0)">Diretor</a>,
                            <a href="javascript:void(0)"><span class="badge-1" style="color: #ffffff;">Fundador</span></a>
                        </div>
                        <div class="article-text">
                            <p>Todavia, o desafiador cenário globalizado oferece uma interessante oportunidade para verificação dos procedimentos normalmente adotados. Ainda assim, existem dúvidas a respeito de como a necessidade de renovação processual assume importantes posições no estabelecimento do remanejamento dos quadros funcionais. Caros amigos, a consulta aos diversos militantes faz parte de um processo de gerenciamento dos modos de operação convencionais. A certificação de metodologias que nos auxiliam a lidar com o consenso sobre a necessidade de qualificação cumpre um papel essencial na formulação do impacto na agilidade decisória.</p>
                        </div>
                        <div class="article-options">
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">email</i> E-mail</a>
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">supervisor_account</i> Gitlab</a>
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">supervisor_account</i> Github</a>
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">account_circle</i> Facebook</a>
                        </div>
                    </div>
                </article>
                <article id="cesarRocha">
                    <div class="article-image">
                        <img src="images/team/cesar.jpg">
                    </div>
                    <div class="article-content">
                        <div class="article-title">
                            <h1>César Rocha</h1><span class="article-date"><i class="material-icons">date_range</i> desde 11/09/2019</span>
                        </div>
                        <div class="article-tags">
                            <i class="material-icons">local_offer</i>
                            <a href="javascript:void(0)">Database Administrator</a>
                        </div>
                        <div class="article-text">
                            <p>No mundo atual, o aumento do diálogo entre os diferentes setores produtivos cumpre um papel essencial na formulação de alternativas às soluções ortodoxas. Não obstante, a estrutura atual da organização promove a alavancagem do levantamento das variáveis envolvidas. No entanto, não podemos esquecer que a consolidação das estruturas prepara-nos para enfrentar situações atípicas decorrentes das regras de conduta normativas. Acima de tudo, é fundamental ressaltar que a mobilidade dos capitais internacionais obstaculiza a apreciação da importância dos níveis de motivação departamental.</p>
                        </div>
                        <div class="article-options">
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">email</i> E-mail</a>
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">supervisor_account</i> Gitlab</a>
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">supervisor_account</i> Github</a>
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">account_circle</i> Facebook</a>
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">web</i> Site</a>
                        </div>
                    </div>
                </article>
                <article id="gabrielLopes">
                    <div class="article-image">
                        <img src="images/team/hiperesp.png">
                    </div>
                    <div class="article-content">
                        <div class="article-title">
                            <h1>Gabriel Lopes</h1><span class="article-date"><i class="material-icons">date_range</i> desde 11/09/2019</span>
                        </div>
                        <div class="article-tags">
                            <i class="material-icons">local_offer</i>
                            <a href="javascript:void(0)">Programador</a>
                        </div>
                        <div class="article-text">
                            <p>A nível organizacional, a constante divulgação das informações cumpre um papel essencial na formulação das condições financeiras e administrativas exigidas. Pensando mais a longo prazo, o julgamento imparcial das eventualidades promove a alavancagem do remanejamento dos quadros funcionais. O empenho em analisar a percepção das dificuldades é uma das consequências das regras de conduta normativas. A prática cotidiana prova que o acompanhamento das preferências de consumo assume importantes posições no estabelecimento do retorno esperado a longo prazo.</p>
                        </div>
                        <div class="article-options">
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">email</i> E-mail</a>
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">supervisor_account</i> Gitlab</a>
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">supervisor_account</i> Github</a>
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">account_circle</i> Facebook</a>
                        </div>
                    </div>
                </article>
                <article id="gabrielOliveira">
                    <div class="article-image">
                        <img src="images/team/noisyboy.jpg">
                    </div>
                    <div class="article-content">
                        <div class="article-title">
                            <h1>Gabriel Oliveira</h1><span class="article-date"><i class="material-icons">date_range</i> desde 11/09/2019</span>
                        </div>
                        <div class="article-tags">
                            <i class="material-icons">local_offer</i>
                            <a href="javascript:void(0)">Analista</a>
                        </div>
                        <div class="article-text">
                            <p>Ainda assim, existem dúvidas a respeito de como a constante divulgação das informações maximiza as possibilidades por conta do orçamento setorial. A prática cotidiana prova que a execução dos pontos do programa estimula a padronização do remanejamento dos quadros funcionais. O incentivo ao avanço tecnológico, assim como a percepção das dificuldades ainda não demonstrou convincentemente que vai participar na mudança das regras de conduta normativas. Caros amigos, o acompanhamento das preferências de consumo assume importantes posições no estabelecimento do retorno esperado a longo prazo.</p>
                        </div>
                        <div class="article-options">
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">email</i> E-mail</a>
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">supervisor_account</i> Github</a>
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">account_circle</i> Facebook</a>
                        </div>
                    </div>
                </article>
                <article id="lucasRamos">
                    <div class="article-image">
                        <img src="images/team/rip.png">
                    </div>
                    <div class="article-content">
                        <div class="article-title">
                            <h1>Lucas Ramos</h1><span class="article-date"><i class="material-icons">date_range</i> desde 11/09/2019</span>
                        </div>
                        <div class="article-tags">
                            <i class="material-icons">local_offer</i>
                            <a href="javascript:void(0)">Gerente de projetos</a>
                        </div>
                        <div class="article-text">
                            <p>É importante questionar o quanto a hegemonia do ambiente político não pode mais se dissociar dos procedimentos normalmente adotados. Ainda assim, existem dúvidas a respeito de como a consulta aos diversos militantes causa impacto indireto na reavaliação do remanejamento dos quadros funcionais. A prática cotidiana prova que a necessidade de renovação processual faz parte de um processo de gerenciamento do orçamento setorial.</p>
                        </div>
                        <div class="article-options">
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">supervisor_account</i> Gitlab</a>
                        </div>
                    </div>
                </article>
                <article id="rafaelLopes">
                    <div class="article-image">
                        <img src="images/team/rafael.png">
                    </div>
                    <div class="article-content">
                        <div class="article-title">
                            <h1>Rafael Lopes</h1><span class="article-date"><i class="material-icons">date_range</i> desde 11/09/2019</span>
                        </div>
                        <div class="article-tags">
                            <i class="material-icons">local_offer</i>
                            <a href="javascript:void(0)">Web designer</a>
                        </div>
                        <div class="article-text">
                            <p>É importante questionar o quanto a hegemonia do ambiente político não pode mais se dissociar dos procedimentos normalmente adotados. Ainda assim, existem dúvidas a respeito de como a consulta aos diversos militantes causa impacto indireto na reavaliação do remanejamento dos quadros funcionais. A prática cotidiana prova que a necessidade de renovação processual faz parte de um processo de gerenciamento do orçamento setorial.</p>
                        </div>
                        <div class="article-options">
                            <a href="javascript:alert('Ainda não colocado');" class="button-1"><i class="material-icons">supervisor_account</i> Gitlab</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <section class="slider">
            <div class="section-title"></div>
            <div class="section-content">
                <div class="slide" data-timeout="0">
                    <div class="slide-background">
                        <img src="images/porque_contratar.jpeg">
                    </div>
                    <div class="slide-content">
                        <div class="slide-content-container">
                            <div class="slide-title">
                                <h1>Por que contratar a EasyCode</h1>
                            </div>
                            <div class="slide-text">
                                <p></p>
                            </div>
                            <div class="slide-options">
                                <section class="features">
                                    <div class="section-title"></div>
                                    <div class="section-content">
                                        <div class="feature feature-4">
                                            <div class="feature-content">
                                                <div class="feature-icon">
                                                    <i class="material-icons">all_inclusive</i>
                                                </div>
                                                <div class="feature-title">
                                                    <h1>Qualquer sistema</h1>
                                                </div>
                                                <div class="feature-text">
                                                    <p>Criamos qualquer tipo de sistema web multiplataforma</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature feature-4">
                                            <div class="feature-content">
                                                <div class="feature-icon">
                                                    <i class="material-icons">devices_other</i>
                                                </div>
                                                <div class="feature-title">
                                                    <h1>Responsividade</h1>
                                                </div>
                                                <div class="feature-text">
                                                    <p>Seu sistema poderá ser acessado de qualquer lugar</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature feature-4">
                                            <div class="feature-content">
                                                <div class="feature-icon">
                                                    <i class="material-icons">money</i>
                                                </div>
                                                <div class="feature-title">
                                                    <h1>Custo</h1>
                                                </div>
                                                <div class="feature-text">
                                                    <p>A EasyCode oferece o melhor o custo da internet</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature feature-4">
                                            <div class="feature-content">
                                                <div class="feature-icon">
                                                    <i class="material-icons">update</i>
                                                </div>
                                                <div class="feature-title">
                                                    <h1>Tecnologia</h1>
                                                </div>
                                                <div class="feature-text">
                                                    <p>Aplicamos a tecnologia + recente para criar o melhor sistema</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section class="slider" id="contact">
            <div class="section-title"></div>
            <div class="section-content">
                <div class="slide" data-timeout="0" style="padding-top: 80px;">
                    <div class="slide-background" >
                            <img src="images/fundo_entre_em_contato.jpg">
                    </div>
                    <div class="slide-content">
                        <div class="slide-content-container">
                            <div class="slide-title">
                                <h1>Entre em contato conosco</h1>
                            </div>
                            <div class="slide-text">
                                <p></p>
                            </div>
                            <div class="slide-options">
                                <section class="forms">
                                    <div class="section-title"></div>
                                    <div class="section-content">
                                        <form action="#" id="contact-footer-form">
                                            <div class="form-item">
                                                <label class="item-66-33">
                                                    <h2>Insira seu nome <span class="badge-1">Obrigatório</span></h2>
                                                    <input name="txtNome" maxlength="32" type="text" placeholder="Nome" required="">
                                                </label><!--
                                             --><label class="item-66-66">
                                                    <h2>Insira seu sobrenome</h2>
                                                    <input name="txtSobrenome" maxlength="128" type="text" placeholder="Sobrenome">
                                                </label>
                                            </div>
                                            <div class="form-item">
                                                <label class="item-66">
                                                    <h2>Insira a sua empresa</h2>
                                                    <input name="txtEmpresa" maxlength="128" type="text" placeholder="Empresa">
                                                </label>
                                            </div>
                                            <div class="form-item">
                                                <label class="item-66">
                                                    <h2>Insira seu e-mail para retorno <span class="badge-1">Obrigatório</span></h2>
                                                    <input name="txtEmail" maxlength="254" type="email" placeholder="E-mail" required="">
                                                </label>
                                            </div>
                                            <div class="form-item">
                                                <label class="item-66">
                                                    <h2>Insira seu telefone para retorno (com DDD)</h2>
                                                    <input name="txtTelefone" maxlength="12" type="tel" placeholder="Telefone">
                                                </label>
                                            </div>
                                            <div class="form-item">
                                                <label class="item-66">
                                                    <h2>Insira o assunto do contato <span class="badge-1">Obrigatório</span></h2>
                                                    <input name="txtAssunto" maxlength="32" type="text" placeholder="Assunto" required="">
                                                </label>
                                            </div>
                                            <div class="form-item">
                                                <label class="item-100">
                                                    <h2 class="item-66">Insira a mensagem <span class="badge-1">Obrigatório</span></h2>
                                                    <textarea name="txtMensagem" maxlength="4096" placeholder="Mensagem" required=""></textarea>
                                                </label>
                                            </div>
                                            <div class="form-item">
                                                <a href="javascript:void(0)" data-form-action="submit" class="button-2 button-large">Enviar</a>
                                                <a href="javascript:void(0)" data-form-action="reset" class="button-1 button-large">Limpar</a>
                                            </div>
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="section-title"></div>
            <div class="section-content" style="text-align: center;opacity: 0.5;">
                <b>Provedores</b>: 
                Virtual Machine by <a class="link" target="_blank" href="http://oracle.com">Oracle</a>.
                Domains by <a class="link" target="_blank" href="http://eu.org">EU.org</a>.
                SpeedTest by <a class="link" target="_blank" href="http://speedtest.net">Ookla</a>.<br>
                <b>Nossos Links</b>:
                <a class="link" target="_blank" href="http://168.138.150.123">168.138.150.123</a>.
                <a class="link" target="_blank" href="http://easycode.eu.org">EasyCode.eu.org</a>.
                <a class="link" target="_blank" href="http://contrata.eu.org">Contrata.eu.org</a>.
                <a class="link" target="_blank" href="http://trampofacil.eu.org">TrampoFacil.eu.org</a>.<br>
                <b>Administração</b>:
                <a class="link" target="_blank" href="https://myservices-hiperesp.console.oraclecloud.com">Oracle Cloud Console</a>.<br>
            </div>
        </section>
        <section class="copyright">
            <div class="section-title"></div>
            <div class="section-content">
                <p>2019-2020 &copy; Made with <span style="color: #ff0000;">❤</span> by <a class="link" target="_blank" href="/">EasyCode</a>. Template <a class="link" target="_blank" href="https://github.com/hiperesp/HyperGaming/">HyperGaming</a> by <a class="link" target="_blank" href="/">EasyCode</a>.</p>
            </div>
        </section>
    </footer>
    <script>
(function(){
    (function(){
        /*REGISTER ALL FORMS*/
        var allForms = document.querySelectorAll("form");
        for(var i=0; i<allForms.length; i++){
            allForms[i].addEventListener("keydown", function(e){
                if(e.keyCode==13){
                    submitForm(this);
                }
            });
        }
    })();
    (function(){
        /*REGISTER ALL FORMS USER ACTIONS*/
        var formUserActions = document.querySelectorAll("*[data-form-action]");
        for(var j=0; j<formUserActions.length; j++){
            formUserActions[j].addEventListener("click", function(e){
                var form = getForm(e.path);
                if(form===undefined){
                    return;
                }
                console.log(form);
                switch(this.dataset.formAction){
                    case "submit":
                        submitForm(form);
                        break;
                    case "reset":
                        resetForm(form);
                        break;
                    default:
                        console.error("Ação não encontrada para o formulário no seguinte elemento:", formUserActions[j]);
                        break;
                }
            });
        }
    })();
})();
function getForm(path){
    for(var i=0; i<path.length; i++){
        if(path[i].tagName.toLowerCase()=="form".toLowerCase()){
            return path[i];
        }
    }
    console.error("Formulário não encontrado.");
    return;
}
function submitForm(form){
    var elements = form.elements;
    for(var i=0; i<elements.length; i++){
        if(elements[i].reportValidity()){
            continue;
        } else {
            return;
        }
    }
    form.submit();
}
function resetForm(form){
    form.reset();
}
    </script>
</body>

</html>
