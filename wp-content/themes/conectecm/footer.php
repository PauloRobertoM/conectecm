</div>
        <!-- #content-wrapper end -->

        <!-- FOOTER
        ============================================= -->
        <footer class="site-footer" id="contato">
            <div class="container">
                <!-- Footer Top
                ============================================= -->
                <div class="footer-top">
                    <div id="contato_form">
                        <div id="sucesso_contato_form" class="anemated bounce">
                            <div class="text-center">
                                <span class="icon-enviado-sucesso" style="
                                font-size: 100px;
                                color: #f9a435;
                                "></span>
                            </div><!-- text-center -->
                            <h1 style="
                            margin: 50px 0 0;
                            line-height: 1;
                            font-size: 22px;
                            color: white;
                            font-weight: 100 !important;
                            ">Seu contato foi enviado com sucesso!</h1>
                        </div><!-- sucesso_contato_form -->

                        <h3 class="title-with-bord wow fadeIn animated" style="visibility: visible; margin: 0 0 30px; color: white;">CONTATO</h3>

                        <?php echo wp_nonce_field('contato', '_wpnonce'); ?>
                        <input type="text" id="security" style="display: none;" placeholder="Você não deve preencher esse campo, ele é usado para a segurança do formulário.">

                        <div id="contato_form_callbacks"></div>

                        <div class="row" style="margin: 0 -7.5px;">

                            <div class="col-md-6" style="padding: 0 7.5px;">
                                <input class="contato_form_input" type="text" id="contato_nome" placeholder="Nome:">
                                <input class="contato_form_input" type="text" id="contato_email" placeholder="E-mail:">
                                <input class="contato_form_input telefone" type="text" id="contato_telefone_celular" placeholder="Telefone:">
                            </div>
                            <!-- col-md-6 -->

                            <div class="col-md-6" style="padding: 0 7.5px;">
                                <textarea class="contato_form_input" style="height: 195px;" placeholder="Mensagem:" id="contato_mensagem"></textarea>
                                <div class="text-left">
                                    <button id="send_cotnato">Enviar <span class="ion-android-arrow-forward" style="font-size: 32px; position: absolute; top: 50%; margin-top: -16px; right: 35px;"></span></button>
                                </div>
                            </div>
                            <!-- col-md-6 -->

                        </div>
                        <!-- row -->
                    </div>
                    <!-- contato_form-->

                    <div class="footer-social">
                        <ul class="social-profile">
                            <li><a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank"><i class="icon icon-twitter"></i></a></li>
                            <li><a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank"><i class="icon icon-facebook"></i></a></li>
                            <li><a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank"><i class="icon icon-instagram"></i></a></li>
                            <li><a href="<?php echo SOCIAL_PINTEREST; ?>" target="_blank"><i class="icon icon-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- footer-top end -->

            </div>
            <!-- container -->

            <!-- Footer Bottom
            ============================================= -->
            <div class="footer-bottom clearfix">
                <div class="copyright-footer">
                    <p>Copyright © Conecte comunicação e Marketing <?php echo date('Y'); ?>. Todos os direitos reservados.</p>
                </div>
            </div>
            <!-- footer-bottom end -->

        </footer>
        <!-- footer end -->
    </div>
    <!-- #main wrapper end-->

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/flexslider.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <!-- External -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/plugin.js"></script>
    <!-- revolution slider -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
     <!-- /revolution slider -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

    <?php wp_footer() ?>
</body>

</html>
