<?php $toEmail = 'contacto@mandira-spa.com'; if ( isset($_POST['Nombre']) ) { if ( empty($_POST['Nombre']) ) $errors[] = 'Porfavor ingrese su nombre completo!'; if ( empty($_POST['Telefono']) ) $errors[] = 'Porfavor ingrese su telefono!'; if ( empty($_POST['Asunto']) ) $errors[] = 'Porfavor ingrese su asunto!'; if ( empty($_POST['Email']) ) $errors[] = 'Porfavor ingrese su e-mail!'; if ( empty($_POST['Mensaje']) ) $errors[] = 'Porfavor ingrese un mensaje!'; if ( !isset($errors) ) { $message = 'Nombre: '.$_POST['Nombre']."\n"; $message .= 'Telefono: '.$_POST['Telefono']."\n"; $message .= 'Asunto: '.$_POST['Asunto']."\n"; $message .= 'Email: '.$_POST['Email']."\n"; $message .= 'Mensaje: '.$_POST['Mensaje']."\n"; $headers = 'From: '.$_POST['Email']."\r\n" . 'Reply-To:'.$_POST['Email']. "\r\n" . 'X-Mailer: PHP/' . phpversion(); mail($toEmail,'Contacto Mandira Spa WEB',$message,$headers); $submitted = true; } } ?>
    <!DOCTYPE html>
    <html lang=en>

    <head>
        <meta charset=utf-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name=description content="A front-end template that helps you build fast, modern mobile web apps.">
        <meta name=viewport content="width=device-width,initial-scale=1">
        <meta name=apple-mobile-web-app-capable content=yes>
        <meta name=apple-mobile-web-app-status-bar-style content=black>
        <meta name=apple-mobile-web-app-title content="Material Design Lite">
        <meta name=mobile-web-app-capable content=yes>
        <meta name=msapplication-TileImage content=images/touch/ms-touch-icon-144x144-precomposed.png>
        <meta name=msapplication-TileColor content=#3372DF>
        <title>Mandira Spa</title>
        <link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css>
        <link rel=icon sizes=192x192 href=images/android-desktop.png>
        <link rel=apple-touch-icon-precomposed href=images/ios-desktop.png>
        <link rel="shortcut icon" href=img/favicon.ico>
        <link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel=stylesheet>
        <link href=css/js-image-slider.css rel="stylesheet">
        <link rel=stylesheet href=css/material.min.css>
        <link rel=stylesheet href=css/styles.css>

        <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base header">
            <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                <ul class=side-nav id=mobile-demo>
                    <li><a class=nav-hover-a href=index.html>Inicio</a></li>
                    <li><a class="dropdown-button nav-hover-a" href=#! data-activates=tratamientos2>Tratamientos</a></li>
                    <li><a class=nav-hover-a href=nosotros.html>Nosotros</a></li>
                    <li><a class=nav-hover-a href=instalaciones.html>Instalaciones</a></li>
                    <li><a class=nav-hover-a href=aparatologia.html>Aparatologia</a></li>
                    <li><a class="nav-hover-a nha-active" href=contacto.php>Contacto</a></li>
                </ul>
                <ul id=tratamientos class=dropdown-content>
                    <li><a href=faciales.html>Faciales</a></li>
                    <li class=divider></li>
                    <li><a href=corporales.html>Corporales</a></li>
                    <li class=divider></li>
                    <li><a href=masajes.html>Masajes</a></li>
                    <li class=divider></li>
                    <li><a href=envol.html>Envolvente</a></li>
                    <li class=divider></li>
                    <li><a href=exfo.html>Exfoliante</a></li>
                    <li class=divider></li>
                    <li><a href=hidro.html>Hidroterapia</a></li>
                    <li class=divider></li>
                    <li><a href=holis.html>Holisticos</a></li>
                    <li class=divider></li>
                    <li><a href=pedilu.html>Pediluvios</a></li>
                    <li class=divider></li>
                    <li><a href=epila.html>Epilacion</a></li>
                    <li class=divider></li>
                    <li><a href=especiales.html>Especiales</a></li>
                    <li class=divider></li>
                </ul>
                <ul id=tratamientos2 class=dropdown-content>
                    <li><a href=faciales.html>Faciales</a></li>
                    <li class=divider></li>
                    <li><a href=corporales.html>Corporales</a></li>
                    <li class=divider></li>
                    <li><a href=masajes.html>Masajes</a></li>
                    <li class=divider></li>
                    <li><a href=envol.html>Envolvente</a></li>
                    <li class=divider></li>
                    <li><a href=exfo.html>Exfoliante</a></li>
                    <li class=divider></li>
                    <li><a href=hidro.html>Hidroterapia</a></li>
                    <li class=divider></li>
                    <li><a href=holis.html>Holisticos</a></li>
                    <li class=divider></li>
                    <li><a href=pedilu.html>Pediluvios</a></li>
                    <li class=divider></li>
                    <li><a href=epila.html>Epilacion</a></li>
                    <li class=divider></li>
                    <li><a href=especiales.html>Especiales</a></li>
                    <li class=divider></li>
                </ul>
                <header>
                    <div class="mdl-layout--large-screen-only mdl-layout__header-row"></div>
                    <div id=wrap-slide>
                        <nav>
                            <div class="nav-wrapper brown-colr-ms">
                                <a href=index.html class=brand-logo>
                                    <div id=logo title=Mandira-Spa></div>
                                </a> <a href=# data-activates=mobile-demo class=button-collapse><i class=material-icons>menu</i></a>
                                <ul class="right hide-on-med-and-down">
                                    <li><a class=nav-hover-a href=index.html>Inicio</a></li>
                                    <li><a class=nav-hover-a href=nosotros.html>Nosotros</a></li>
                                    <li><a class=nav-hover-a href=instalaciones.html>Instalaciones</a></li>
                                    <li><a class="dropdown-button nav-hover-a" href=#! data-activates=tratamientos>Tratamientos</a></li>
                                    <li><a class=nav-hover-a href=aparatologia.html>Aparatologia</a></li>
                                    <li><a class="nav-hover-a nha-active" href=contacto.php>Contacto</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </header>
                <main>
                  <div id="wrap-slide" class="mdl-color-text--white" style="margin-top: -29px;">
                      <? if ( $submitted == true ) { ?>
                          <h4><center>Gracias por contactar a Mandira-Spa!. Hemos recibido tu mensaje en seguida nos pondremos en contacto con usted.</center></h4>
                          <? } else { ?>
                              <h4><center>Dejanos tu mensaje y a la brevedad posible te responderemos</center></h4>
                              <div class=row>
                                  <form class="col s12" method=post action=contacto.php id=contact_form>
                                      <?php if ( isset($errors) ) { ?>
                                          <div id=formErrors class=error>
                                              <h3>En contramos algunos errores en tu informacion!</h3>
                                              <ul>
                                                  <?php foreach ( $errors as $anError ) echo '<li>'.$anError.'</li>'; ?>
                                              </ul>
                                          </div>
                                          <? } ?>
                                              <div class=row>
                                                  <div class="col s12 m6 l6">
                                                      <div class=row>
                                                          <div class="input-field col s12"><i class="material-icons prefix">account_circle</i>
                                                              <input id=Nombre class=validate name=Nombre value="<?php echo $_POST['Nombre']; ?>">
                                                              <label for=Nombre>Nombre</label>
                                                          </div>
                                                      </div>
                                                      <div class=row>
                                                          <div class="input-field col s12"><i class="material-icons prefix">phone</i>
                                                              <input id=Telefono type=tel class=validate name=Telefono value="<?php echo $_POST['Telefono']; ?>">
                                                              <label for=Telefono>Telefono</label>
                                                          </div>
                                                      </div>
                                                      <div class=row>
                                                          <div class="input-field col s12"><i class="material-icons prefix">label_outline</i>
                                                              <input id=Asunto class=validate name=Asunto value="<?php echo $_POST['Asunto']; ?>">
                                                              <label for=Asunto>Asunto</label>
                                                          </div>
                                                      </div>
                                                      <div class=row>
                                                          <div class="input-field col s12"><i class="material-icons prefix">markunread_mailbox</i>
                                                              <input id=Email type=email class=validate name=Email value="<?php echo $_POST['Email']; ?>">
                                                              <label for=Email>Email</label>
                                                          </div>
                                                      </div>
                                                      <div class=row>
                                                          <div class="input-field col s12"><i class="material-icons prefix">comment</i>
                                                              <textarea id=Mensaje class=materialize-textarea name=Mensaje cols=40 rows=10>
                                                                  <?php echo $_POST['Mensaje']; ?>
                                                              </textarea>
                                                              <label for=Mensaje>Mensaje</label>
                                                          </div>
                                                      </div>
                                                      <div class=row>
                                                          <div class="input-field col s12">
                                                              <center>
                                                                  <input type=submit value="Enviar Mensaje" class="btn">
                                                              </center>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col s12 m6 l6">
                                                      <center><img src=img/logo2.png alt="Contacto Mandira-Spa" class=responsive-img>
                                                          <br>
                                                          <br>
                                                          <br><img src=img/banner1.png alt="Contacto Mandira-Spa" class=responsive-img></center>
                                                  </div>
                                              </div>
                                  </form>
                              </div>
                              <?php }; ?>
                  </div>
                    <div class="mdl-layout__tab-panel is-active" id=overview>
                        <section class="section--footer mdl-color--white mdl-grid">
                            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                                <div class="section__circle-container__circle mdl-color--accent section__circle--big">
                                    <a class="waves-effect waves-light" href=reserva.html><img class=picture src=images/reserva.jpg alt=Reserva></a>
                                </div>
                            </div>
                            <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                                <h5>Reservar una cita</h5>Mandira Spa te recomienda ser puntual para no afectar el tiempo de tu servicio.
                                <br>
                                <br><a href=reserva.html class="waves-effect cyan darken-1 btn btn-full">Agendar una cita.</a></div>
                            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                                <div class="section__circle-container__circle mdl-color--accent section__circle--big">
                                    <a class="waves-effect waves-light modal-trigger" href=#modal1><img class=picture src=images/maps.png alt=Reserva></a>
                                </div>
                            </div>
                            <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                                <h5>Como llegar</h5>Estamos ubicados en Pablo Casals #775 col. Prados Providencia, Guadalajara, Jalisco, México.
                                <br>
                                <br>
                                <center><a href=#modal1 class="modal-trigger waves-effect cyan darken-1 btn btn-full">Ver mapa -> Navegar</a></center>
                            </div>
                        </section>
                    </div>
                    <div class=footer-fix>
                        <footer class=mdl-mega-footer>
                            <div class=mdl-mega-footer--middle-section>
                                <div class=mdl-mega-footer--drop-down-section>
                                    <ul class="collapsible grey-text text-lighten-3 colaps-media-off" data-collapsible=accordion>
                                        <li>
                                            <div class="collapsible-header active"><i class=material-icons>web</i>Navegar</div>
                                            <div class=collapsible-body>
                                                <a class="grey-text text-lighten-3" href=index.html>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-home zmdi-hc-2x"></i><span class=footer-aling-span>Inicio</span></div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href=nosotros.html>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-assignment-account zmdi-hc-2x"></i><span class=footer-aling-span>Nosotros</span></div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href=instalaciones.html>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-compare zmdi-hc-2x"></i><span class=footer-aling-span>Instalaciones</span></div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href=tratamientos.html>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-grain zmdi-hc-2x"></i><span class=footer-aling-span>Tratamientos</span></div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href=aparatologia.html>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-reader zmdi-hc-2x"></i><span class=footer-aling-span>Aparatologia</span></div>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="collapsible grey-text text-lighten-3 colaps-media-on" data-collapsible=accordion>
                                        <li>
                                            <div class=collapsible-header><i class=material-icons>web</i>Navegar</div>
                                            <div class=collapsible-body>
                                                <a class="grey-text text-lighten-3" href=index.html>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-home zmdi-hc-2x"></i><span class=footer-aling-span>Inicio</span></div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href=nosotros.html>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-assignment-account zmdi-hc-2x"></i><span class=footer-aling-span>Nosotros</span></div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href=instalaciones.html>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-compare zmdi-hc-2x"></i><span class=footer-aling-span>Instalaciones</span></div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href=tratamientos.html>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-grain zmdi-hc-2x"></i><span class=footer-aling-span>Tratamientos</span></div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href=aparatologia.html>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-reader zmdi-hc-2x"></i><span class=footer-aling-span>Aparatologia</span></div>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class=mdl-mega-footer--drop-down-section>
                                    <ul class="collapsible grey-text text-lighten-3 colaps-media-off" data-collapsible=accordion>
                                        <li>
                                            <div class="collapsible-header active"><i class=material-icons>thumb_up</i>Siguenos</div>
                                            <div class=collapsible-body>
                                                <a class="grey-text text-lighten-3" href=https://www.facebook.com/pages/Spa-Mandira/431585930300237>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-facebook-box zmdi-hc-2x"></i><span class=footer-aling-span>Facebook</span></div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href=https://twitter.com/MandiraSpa>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-twitter-box zmdi-hc-2x"></i><span class=footer-aling-span>Twitter</span></div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href=http://instagram.com/mandiraspa>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-instagram zmdi-hc-2x"></i><span class=footer-aling-span>Instagram</span></div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href=https://es.foursquare.com/v/mandira-spa/52e2b942498e7f4d875b67ca>
                                                    <div class=footer-aling-div>&nbsp;<i class="zmdi zmdi-facebook zmdi-hc-2x"></i><span class=footer-aling-span>&nbsp;<span class=footer-aling-span>Foursquare</span></span>
                                                    </div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href="http://201.175.21.198/roundcube/">
                                                    <div class=footer-aling-div><i class="zmdi zmdi-email-open zmdi-hc-2x"></i><span class=footer-aling-span><span class=footer-aling-span>Mandira Access</span></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="collapsible grey-text text-lighten-3 colaps-media-on" data-collapsible=accordion>
                                        <li>
                                            <div class=collapsible-header><i class=material-icons>thumb_up</i>Siguenos</div>
                                            <div class=collapsible-body>
                                                <a class="grey-text text-lighten-3" href=https://www.facebook.com/pages/Spa-Mandira/431585930300237>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-facebook-box zmdi-hc-2x"></i><span class=footer-aling-span>Facebook</span></div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href=https://twitter.com/MandiraSpa>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-twitter-box zmdi-hc-2x"></i><span class=footer-aling-span>Twitter</span></div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href=http://instagram.com/mandiraspa>
                                                    <div class=footer-aling-div><i class="zmdi zmdi-instagram zmdi-hc-2x"></i><span class=footer-aling-span>Instagram</span></div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href=https://es.foursquare.com/v/mandira-spa/52e2b942498e7f4d875b67ca>
                                                    <div class=footer-aling-div>&nbsp;<i class="zmdi zmdi-facebook zmdi-hc-2x"></i><span class=footer-aling-span>&nbsp;<span class=footer-aling-span>Foursquare</span></span>
                                                    </div>
                                                </a>
                                                <br>
                                                <a class="grey-text text-lighten-3" href="http://201.175.21.198/roundcube/">
                                                    <div class=footer-aling-div><i class="zmdi zmdi-email-open zmdi-hc-2x"></i><span class=footer-aling-span><span class=footer-aling-span>Mandira Access</span></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class=mdl-mega-footer--drop-down-section>
                                    <ul class="collapsible grey-text text-lighten-3 colaps-media-off" data-collapsible=accordion>
                                        <li>
                                            <div class="collapsible-header active"><i class=material-icons>contact_phone</i>Contacto</div>
                                            <div class=collapsible-body>
                                                <a href=contacto.php class="grey-text text-lighten-3">
                                                    <div class=footer-aling-div><i class="zmdi zmdi-comment-text zmdi-hc-2x"></i><span class=footer-aling-span>Enviar un mensaje</span></div>
                                                </a>
                                                <br>
                                                <div class="footer-aling-div grey-text text-lighten-3"><i class="zmdi zmdi-phone zmdi-hc-2x"></i><span class=footer-aling-span>(33) 36-40-02-81</span></div>
                                                <br>
                                                <div class="footer-aling-div grey-text text-lighten-3"><i class="zmdi zmdi-phone zmdi-hc-2x"></i><span class=footer-aling-span>(33) 36-42-51-71</span></div>
                                                <br>
                                                <div class="footer-aling-div grey-text text-lighten-3"><i class="zmdi zmdi-email zmdi-hc-2x"></i><span class=footer-aling-span>contacto@mandira-spa.com</span></div>
                                                <br>
                                                <div class="footer-aling-div grey-text text-lighten-3"><i class="zmdi zmdi-email zmdi-hc-2x"></i><span class=footer-aling-span>mandiraspa@mandira-spa.com</span></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="collapsible grey-text text-lighten-3 colaps-media-on" data-collapsible=accordion>
                                        <li>
                                            <div class=collapsible-header><i class=material-icons>contact_phone</i>Contacto</div>
                                            <div class=collapsible-body>
                                                <a href=contacto.php class="grey-text text-lighten-3">
                                                    <div class=footer-aling-div><i class="zmdi zmdi-comment-text zmdi-hc-2x"></i><span class=footer-aling-span>Enviar un mensaje</span></div>
                                                </a>
                                                <br>
                                                <div class="footer-aling-div grey-text text-lighten-3"><i class="zmdi zmdi-phone zmdi-hc-2x"></i><span class=footer-aling-span>(33) 36-40-02-81</span></div>
                                                <br>
                                                <div class="footer-aling-div grey-text text-lighten-3"><i class="zmdi zmdi-phone zmdi-hc-2x"></i><span class=footer-aling-span>(33) 36-42-51-71</span></div>
                                                <br>
                                                <div class="footer-aling-div grey-text text-lighten-3"><i class="zmdi zmdi-email zmdi-hc-2x"></i><span class=footer-aling-span>contacto@mandira-spa.com</span></div>
                                                <br>
                                                <div class="footer-aling-div grey-text text-lighten-3"><i class="zmdi zmdi-email zmdi-hc-2x"></i><span class=footer-aling-span>mandiraspa@mandira-spa.com</span></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=mdl-mega-footer--bottom-section>
                                <div class=mdl-logo>©copyright Mandira Spa 2015-2016</div>
                                <ul class=mdl-mega-footer--link-list>
                                    <li><a href="http://mandira-spa.com/">• mandira-spa.com</a></li>
                                    <li>• Pablo Casals #775 col. Prados Providencia, Guadalajara, Jalisco, México.</li>
                                    <li><a href=http://mandira-spa.com/AVISO%20DE%20PRIVACIDAD.pdf>• Aviso de privacidad</a></li>
                                </ul>
                            </div>
                        </footer>
                    </div>
                </main>
                <div id=modal1 class="modal bottom-sheet">
                    <div class=modal-content>
                        <center>
                            <h4>Como llegar a Mandira Spa</h4></center>
                        <div id=mapDiv class=final-contact>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.48245641114!2d-103.39383238504263!3d20.69062440461128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae4368b8ecef%3A0x3b985585b680398d!2sAv+Pablo+Casals+775%2C+Prados+Providencia%2C+44670+Guadalajara%2C+Jal.%2C+Mexico!5e0!3m2!1sen!2sus!4v1450500759222" width=100% height=205 frameborder=0 style=border:0 allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="modal-footer final-contact"><a href=#! class="modal-action modal-close waves-effect waves-green btn red"><i class="material-icons left">close</i>Cerrar</a>
                        <div class=map-btns-fix><a href="https://www.google.com/maps/dir//Av+Pablo+Casals+775,+Prados+Providencia,+44670+Guadalajara,+Jal.,+Mexico/@20.6906244,-103.3938324,17z/data=!4m13!1m4!3m3!1s0x8428ae4368b8ecef:0x3b985585b680398d!2sAv+Pablo+Casals+775,+Prados+Providencia,+44670+Guadalajara,+Jal.,+Mexico!3b1!4m7!1m0!1m5!1m1!1s0x8428ae4368b8ecef:0x3b985585b680398d!2m2!1d-103.3916437!2d20.6906194" class="modal-action modal-close waves-effect cyan darken-1 btn"><i class="material-icons left">map</i>Google Maps</a></div>
                    </div>
                </div>
            </div>
            <script src=js/material.min.js></script>
            <script src=js/jquery-1.9.1.min.js></script>
            <script src=https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js></script>
            <script src=js/utility-NonIndex.js></script>
