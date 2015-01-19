<?php
/*
 *
 * @package WordPress
 * @subpackage CdEasy
 * @since CdEasy
 * Template Name: Página Inicial
 */
?>
<?php get_header(); ?>
<div id="boxes">
    <!-- Janela Modal -->
   <div id="dialog2" class="window" style="top: 50% !important; left: 50% !important;">
        <div class="right">
            <input type="button" value="Fechar" class="close"/>
        </div>
        <div class="all">
            <div class="box-cont-right">
                  <?php echo do_shortcode('[contact-form-7 id="227" title="Formulário de Newsletter"]'); ?>          
            </div>
        </div>
    </div>
    <div id="mask" style="display: block; opacity: 0.8; overflow: hidden;"></div>
</div>
   
<div id="container">
    <div id="content">
        <div id="banner">
            <?php if (function_exists('show_simpleresponsiveslider')) show_simpleresponsiveslider(); ?>
        </div>
        <div class="window" id="janela1">
            <a href="#" class="fechar">X Fechar</a><br />
            <p>
                Convênios terão sala para treinamentos, recrutamentos e seleção especial.
            </p><br />
            <h2>Convênio: CD-EASY. Cursos e Treinamentos</h2>
            <ul>
                <li>Encaminhar sem qualquer custo, um funcionário por mês para aperfeiçoar ou fazer qualquer curso na área de informática ou profissionalizantes;</li>
                <li>Demais funcionários obterão vantagem exclusiva ou seja desconto acima de 10% em qualquer curso;</li>
                <li>Dependentes dos funcionários também obterão descontos especiais;</li>
            </ul><br />
            <h2>Convênio: Academia Acqua Vida Sports</h2>
            <ul>
                <li>Encaminhar sem qualquer custo, um funcionário por mês para aperfeiçoar ou fazer atividade física na área de aeróbica, musculação, dança, squash. Natação dependerá de disponibilidade de vaga no horário.</li>
                <li>O segundo ou demais funcionários obterão descontos especiais acima de 10%;</li>
                <li>Dependentes dos funcionários também obterão descontos especiais;</li>
            </ul><br />
            <h2>Convênio: Locadora Portal do Conhecimento</h2>
            <ul>
                <li>Locar até 3 vídeos de treinamento totalmente por semana;</li>
                <li>Ganhar totalmente grátis uma cópia de qualquer vídeo de treinamento;</li>
            </ul><br />
            <h2>Convênio: Livraria Easy Tell</h2>
            <ul>
                <li>Mantenha-se atualizado com os melhores livro na área administrativa e atualidades;</li>
            </ul><br />
            <h2>Convênio: Lava-Car Acqua Vida</h2>
            <ul>
                <li>Desconto especial de 20% na lavagem completa do seu carro.</li>
            </ul>
        </div>
        <section class="cursos-index">
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Cursos em Destaque</a></li>
                </ul>
                <div id="tabs-1">
                    <ul class="lista-curso">
                        <li><img src="<?= bloginfo('template_url') ?>/img/img-atendente-farmacia-drograria.jpg" alt="Cursos Cd-Easy" width="450" height="250"/></li> 
                        <li><img src="<?= bloginfo('template_url') ?>/img/img-auxiliar-consultorio-dentario.jpg" alt="Cursos Cd-Easy" width="450" height="250"/></li>  
                    </ul>
                    <ul class="lista-curso">
                        <li><img src="<?= bloginfo('template_url') ?>/img/img-auxiliar-veterinario.jpg" alt="Cursos Cd-Easy" width="450" height="250"/></li> 
                        <li><img src="<?= bloginfo('template_url') ?>/img/img-estetica-facial.jpg" alt="Cursos Cd-Easy" width="450" height="250"/></li>  
                    </ul>
                    <ul class="lista-curso">
                        <li><img src="<?= bloginfo('template_url') ?>/img/img-informatica-empresarial.jpg" alt="Cursos Cd-Easy" width="450" height="250"/></li> 
                        <li><img src="<?= bloginfo('template_url') ?>/img/img-ingles-empresarial.jpg" alt="Cursos Cd-Easy" width="450" height="250"/></li>  
                    </ul>
                    <ul class="lista-curso">
                        <li><img src="<?= bloginfo('template_url') ?>/img/img-mecanica-automoveis.jpg" alt="Cursos Cd-Easy" width="450" height="250"/></li> 
                        <li><img src="<?= bloginfo('template_url') ?>/img/img-mecanica-motos.jpg" alt="Cursos Cd-Easy" width="450" height="250"/></li>  
                    </ul>
                    <ul class="lista-curso">
                        <li><img src="<?= bloginfo('template_url') ?>/img/img-seguranca-trabalho.jpg" alt="Cursos Cd-Easy" width="450" height="250"/></li> 
                        <li><img src="<?= bloginfo('template_url') ?>/img/img-som-automotivo.jpg" alt="Cursos Cd-Easy" width="450" height="250"/></li>  
                    </ul>
                    <ul class="lista-curso">
                        <li class="mg-left"><img src="<?= bloginfo('template_url') ?>/img/img-cabeleleiro-cortes.jpg" alt="Cursos Cd-Easy" width="450" height="250"/></li> 
                    </ul>
                </div>
            </div>
        </section>
        <section id="sobre">
            <div class="center">
                <header>
                    <h2>Por que escolher a Cd-Easy para Estudar?</h2>
                </header>
                <ul>
                    <li>
                        <img src="<?= bloginfo('template_url') ?>/img/img-diferenciais-comeptitivos.png" alt="Cd-Easy-Estudar" width="170"/>
                        <p>Diferenciais Competitivos</p>
                    </li>
                    <li>
                        <img src="<?= bloginfo('template_url') ?>/img/img-central-atendimento.png" alt="Cd-Easy-Estudar" width="170"/>
                        <p>Central de Atendimento</p>
                    </li>
                    <li>
                        <img src="<?= bloginfo('template_url') ?>/img/img-programa-mais-emprego.png" alt="Cd-Easy-Estudar" width="170"/>
                        <p>Programa mais Emprego</p>
                    </li>
                    <li>
                        <img src="<?= bloginfo('template_url') ?>/img/img-fotos-eventos.png" alt="Cd-Easy-Estudar" width="170"/>
                        <p>Fotos e Eventos</p>
                    </li>
                    <li>
                        <img src="<?= bloginfo('template_url') ?>/img/img-promocoes.png" alt="Cd-Easy-Estudar" width="170"/>
                        <p>Promoções</p>
                    </li>
                </ul>
                <span>
                    Aluguel de Salas Treinamento + <br />Locação de Dvds de Tratamento <br />+ Livros + Equipamentos
                </span>
                <div class="convenio">
                    <span>Conveniados terão salão para Treinamento, Recrutamento e seleção de Pessoas</span>
                </div>
            </div>
        </section>
        <section id="convenio">
            <div class="center">
                <a href="#janela1" rel="modal" title="Leia o Informativo Cd-Easy">Leia o Informativo</a>
            </div>
        </section>
        <section id="cursos">
            <div class="jcarousel-wrapper">
                <div class="jcarousel carousel-stage">
                    <ul>
                        <li id="profissionalizantes">
                            <header>
                                <h2>Cursos Profissionalizantes</h2>
                            </header>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-assistente-financeiro-contabil.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-atendimento-cliente.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-atendimento-turista.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-auxiliar-escritorio.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-contabilidade-matematica-financeira.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <div class="lista-curso rg-curso">  
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-criativade-gestao.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-departamento-pessoal.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-excelencia-atendimento.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-logista-administracao.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-operador-supermercado.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-tecnicas-contabilidade.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-tecnico-administracao.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-tec-publicidade-propaganda.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-telefonista-recepcionista.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-turismo-hortelaria.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-operador-marketing.jpg" alt="Cursos Cd-Easy" width="166"/></span>  
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-ingles-empresarial.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-operador-caixa.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-administracao-rh.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-marketing-propaganda.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/profissionalizantes/img-tecnica-vendas.jpg" alt="Cursos Cd-Easy" width="166"/></span>  
                            </div>
                        </li>
                        <li id="area-saude">
                            <header>
                                <h2>Área de Saúde</h2>
                            </header>
                            <div class="lista-curso rg-curso idiomas-rt">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/area-saude/img-atendente-farmacia.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/area-saude/img-atendente-odontologico.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/area-saude/img-atendente-odontologico-avancado.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/area-saude/img-auxiliar-veterinaria.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <header>
                                <h2>Meu Primeiro Emprego</h2>
                            </header>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/primeiro-emprego/img-curriculum-vitae.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/primeiro-emprego/img-dinamicas-grupo.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/primeiro-emprego/img-entrevista-emprego.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/primeiro-emprego/img-etiqueta-social-profissional.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/primeiro-emprego/img-marketing-pessoal.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/primeiro-emprego/img-testes-matematica-contabil.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                        </li>
                        <li id="idiomas">
                            <header>
                                <h2>Curso de Idiomas</h2>
                            </header>
                            <div class="lista-curso rg-curso idiomas-rt">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/idiomas/img-ingles.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <header>
                                <h2>Empresarial</h2>
                            </header> 
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-assistente-rh.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-atendimento-loja.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-auxiliar-credito-cadastro.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-auxiliar-de-loja.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-auxiliar-deposito-estoquista.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-auxiliar-seguranca.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-chefe-secao.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-chefe-servico-cliente.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-conferente.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-coordenador-financeiro.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-empacotador.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-gerente-moda.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-vendedor-loja.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-oficial-manutencao.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-transporte-logistica.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-vitrinista.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-zelador.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-operador-caixa.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/empresarial/img-fiscal-loja.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                        </li>
                        <li id="tecnicos">
                            <header>
                                <h2>Cursos Técnicos</h2>
                            </header>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/tecnicos/img-dj-profissional.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/tecnicos/img-instalacao-eletrica-nr10.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/tecnicos/img-mecanica-automotiva.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/tecnicos/img-mecanica-motos.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/tecnicos/img-instalador-som-automotivo.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <header>
                                <h2>Secretariado</h2>
                            </header>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/secretariado/img-gestao-empreasas-info.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/secretariado/img-secretariado.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/secretariado/img-secretariado-adm-info.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/secretariado/img-secretariado-juridico.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/secretariado/img-secretariado-saude.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                        </li>
                        <li id="estetica">
                            <header>
                                <h2>Cursos de Estética</h2>
                            </header>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/estetica/img-cabeleleiro-colorimetria.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/estetica/img-cortes-cabelo.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/estetica/img-design-sobrancelhas.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/estetica/img-design-unhas.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/estetica/img-estetica-corporal.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/estetica/img-estetica-facial.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/estetica/img-depilacao-profissional.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/estetica/img-manicure-pedicure.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                            </div>
                        </li>
                        <li id="informatica-empresarial">
                            <header>
                                <h2>Informática Empresarial</h2>
                            </header>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-adobe-ilustrator.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-corew-draw.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-design-grafico.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-foto-digital.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-informatica-concurso.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-informatica-essencial-a.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-informatica-essencial-b.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-informatica-personal-tecnologico.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-informativa-vip.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-java.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-operador-computador.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-producao-grafica.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-sony-vegas.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-treinamento-prepara-aprend-a.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-treinamento-prepara-aprend-b.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-informatica-kids.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-indesign.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-informatica-escolar.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-informatica-intensiva.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-webdesign.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica/img-pagemaker.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/img-arte-finalista.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                            </div>
                        </li>
                        <li id="informatica-avancada">
                            <header>
                                <h2>Informática Avançada</h2>
                            </header>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-acess.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-autocad.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-criacao-games.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-asp-php.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-internet.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-logica-programacao.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-windows-7e8.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-word-avancado-tcc.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-word-secretarias.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-ferramentas-acessorios.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-linux.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-manutencao-notebook.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-montagem-manutencao-micros.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-project.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-redes.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                            </div>
                            <div class="lista-curso rg-curso">
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-3dstudiomax.jpg" alt="Cursos Cd-Easy" width="166"/></span> 
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-delphi-vb.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-digitacao.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-excel.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                                <span><img src="<?= bloginfo('template_url') ?>/img/cursos/informatica-avancada/img-excel-avancado.jpg" alt="Cursos Cd-Easy" width="166"/></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
            </div>
        </section>
        <section id="videos">
            <div class="center">
                <header>
                    <h2>Nosso Vídeo Institucional</h2>
                </header>
                <article class="fundo-video">
                    <div class="box-content">
                        <span>
                            <p>
                                <video class="video-r" width="480" height="320" controls>
                                    <source src="<?= bloginfo('template_url') ?>/video/institucional-cdeasy.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'/>
                                </video>
                            </p>
                        </span>
                    </div>
                </article>
            </div>
        </section>
        <section id="noticias">
            <div class="center">
                <div class="bg-fundo-conhecimento">
                    <img src="<?= bloginfo('template_url') ?>/img/img-bg-left-azul.png" alt="Icone Conhecimento Cd-Easy Cursos e Treinamentos" width="505"/>
                </div>
                <div class="facebook">
                    <img src="<?= bloginfo('template_url') ?>/img/icon-facebook.png" alt="Icone Cd-Easy Facebook" width="285"/>
                    <div class="box-facebook">
                        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fcdeasycursosetreinamentos%3Ffref%3Dts&amp;width=350&amp;height=427&amp;colorscheme=light&amp;show_faces=false&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:427px;" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section id="contato">
            <div class="center">
                <div class="box-form">
                    <div class="bx-fale-conosco">
                        <h2>Fale Conosco</h2>
                        <img src="<?= bloginfo('template_url') ?>/img/icon-fale-conosco.png" alt="icone Fale Conosco" width="90"/>
                    </div>
                    <div class="bx-contact-form">
                        <!-- Formulário de Contato !-->
                        <?php echo do_shortcode('[contact-form-7 id="28" title="Formulário de contato 1"]'); ?>
                    </div>
                </div>
                <div class="bg-map">
                    <div class="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.063013466407!2d-51.085348!3d-26.22714199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e661ee1e301059%3A0xa1973562771fa554!2sCd-Easy+Cursos+e+Treinamentos!5e0!3m2!1spt-BR!2s!4v1406228435050" width="430" height="290" frameborder="0" style="border:0"></iframe>
                    </div>
                    <div class="endereco">
                        <address>
                            <span>Rua Barão do Cerro Azul, 133 - Centro</span><br />
                            <span>E-mail: <a href="mailto:cdeasy@cdeasy.com.br?Subject=Hello%20again" target="_top">cdeasy@cdeasy.com.br</a></span><br />
                            <span>Telefone: (42)3523-1814</span>
                        </address>
                    </div>
                </div>
                <div class="pessoas">
                    <img src="<?= bloginfo('template_url') ?>/img/img-criancas-fale-conosco.png" alt="Crianças Cd-Easy Cursos e Treinamentos" width="540"/>
                </div>
            </div>
        </section>
        <?php get_footer(); ?>