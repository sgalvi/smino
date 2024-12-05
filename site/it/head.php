<?php
// header.php
?>
<!DOCTYPE html>
<html lang="it">

<body>
  <div class="it-header-wrapper">
    <div class="it-header-slim-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="it-header-slim-wrapper-content">

              <div class="header-slim-right-zone">

                <div class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                    <span>ITA</span>
                    <svg class="icon d-none d-lg-block">
                      <use
                        href="../../wicket/resource/de.agilecoders.wicket.webjars.request.resource.IWebjarsResourceReference/webjars/bootstrap-italia/current/svg/sprite.svg#it-expand">
                      </use>
                    </svg>
                  </a>
                  <div class="dropdown-menu">
                    <div class="row">
                      <div class="col-12">
                        <div class="link-list-wrapper">
                          <ul class="link-list locale-list">
                            <li>
                              <a class="list-item" href="index.php"><span>ita</span></a>
                            </li>
                          </ul>
                          <ul class="link-list locale-list">
                            <li>
                              <a class="list-item" href="../en/index.php"><span>eng</span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="it-nav-wrapper">
      <div class="it-header-center-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="it-header-center-content-wrapper">
                <div class="it-brand-wrapper col-md-10">
                  <div class="w-flex">
                    <a href="https://www.ogs.it/" target="_blank">
                      <img class="icon d-block d-sm-block d-md-none" alt="OGS logo" src="../../images/OGS_logoA_W.png" />

                      <img class="logo-wide icon d-none d-md-block" alt="OGS logo" src="../../images/OGS_logoW_ita.png" />
                    </a>
                    <div class="it-search-wrapper">
                      <a href="index.php">
                        <h3 class="d-block d-sm-block d-md-none">SMINO</h3>
                        <h3 class="d-none d-md-block">Sistema di Monitoraggio<br />dell'Italia Nord-Orientale</h3>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="it-right-zone col-md-2">

                  <div class="modal fade" tabindex="-1" role="dialog" id="search-modal">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" type="button" data-dismiss="modal" aria-label="chiudi">
                            <svg class="icon">
                              <use
                                href="../../wicket/resource/de.agilecoders.wicket.webjars.request.resource.IWebjarsResourceReference/webjars/bootstrap-italia/current/svg/sprite.svg#it-close">
                              </use>
                            </svg>
                          </button>
                        </div>
                        <div class="modal-body">


                          <div class="form-group">

                          </div>


                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="it-header-navbar-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12">

             <nav id="navbar" class="navbar navbar-expand-lg has-megamenu">
              <button class="custom-navbar-toggler" type="button" aria-controls="nav10" aria-expanded="false"
                aria-label="Toggle navigation" data-target="#nav10">
                <svg class="icon">
                  <use
                    href="../../wicket/resource/de.agilecoders.wicket.webjars.request.resource.IWebjarsResourceReference/webjars/bootstrap-italia/current/svg/sprite.svg#it-burger">
                  </use>
                </svg>
              </button>
              <div class="navbar-collapsable" id="nav10">
                <div class="overlay"></div>
                <div class="close-div sr-only">
                  <button class="btn close-menu" type="button">
                    <span class="it-close"></span>chiudi
                  </button>
                </div>
                <div class="menu-wrapper">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php"><span>Home</span></a>
                    </li>
                    
                    <!-- <li class="nav-item">
                      <a class="nav-link" href="./content/team.php"><span> Progetti </span></a>
                    </li> -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span>Reti</span>
                        <svg class="icon">
                          <use
                            href="../../wicket/resource/de.agilecoders.wicket.webjars.request.resource.IWebjarsResourceReference/webjars/bootstrap-italia/current/svg/sprite.svg#it-expand">
                          </use>
                        </svg>
                      </a>
                      <div class="dropdown-menu">
                        <div class="link-list-wrapper">
                          <ul class="link-list">
                            <li>
                              <a class="list-item" href="./sismo.php" ><span>Rete Sismometrica</span></a>
                            </li>
                            <li>
                              <a class="list-item" href="./frednet.php"><span>Rete Geodetica</span></a>
                            </li>
                            <li>
                              <a class="list-item" href="./strongmotion.php" ><span>Rete Accelerometrica</span></a>
                            </li>
                            <li>
                              <a class="list-item" href="./diffusa.php" ><span>Rete Accelerometrica Diffusa</span></a>
                            </li>
                            <li>
                              <a class="list-item" href="./fibra.php" ><span>Rete Fibra</span></a>
                            </li>
                            <li>
                              <a class="list-item" href="./gravimetrica.php"><span>Rete Gravimetrica</span></a>
                            </li>
                            <li>
                              <a class="list-item" href="https://www.crs.inogs.it/ipcam/" target="_blank"><span>Webcam</span></a>
                            </li>
                            
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span>Progetti</span>
                        <svg class="icon">
                          <use
                            href="../../wicket/resource/de.agilecoders.wicket.webjars.request.resource.IWebjarsResourceReference/webjars/bootstrap-italia/current/svg/sprite.svg#it-expand">
                          </use>
                        </svg>
                      </a>
                      <div class="dropdown-menu">
                        <div class="link-list-wrapper">
                          <ul class="link-list">
                            <li>
                              <a class="list-item" href="./conv_fvg.php" target="_blank"><span>Convenzione FVG - Prot. Civile</span></a>
                            </li>
                            <li>
                              <a class="list-item" href="./conv_ven.php" target="_blank"><span>Convenzione Veneto - Prot. Civile</span></a>
                            </li>
                            <li>
                              <a class="list-item" href="./pnrr.php" target="_blank"><span>Progetti PNRR e SMINO</span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span>Dati di SMINO</span>
                        <svg class="icon">
                          <use
                            href="../../wicket/resource/de.agilecoders.wicket.webjars.request.resource.IWebjarsResourceReference/webjars/bootstrap-italia/current/svg/sprite.svg#it-expand">
                          </use>
                        </svg>
                      </a>
                      <div class="dropdown-menu">
                        <div class="link-list-wrapper">
                          <ul class="link-list">
                            <li>
                              <a class="list-item" href="https://terremoti.ogs.it" target="_blank"><span>Terremoti in Tempo Reale - RTS</span></a>
                            </li>
                            <li>
                              <a class="list-item" href="https://gnssdata-epos.oca.eu/" target="_blank"><span>Dati GNSS - EPOS</span></a>
                            </li>
                            <li>
                              <a class="list-item" href="https://frednet.crs.ogs.it/" target="_blank"><span>Dati GNSS - FREDNET</span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="contact-us.php"><span>Contattaci</span></a>
                    </li>

                  </ul>
                </div>
              </div>
            </nav>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


<body>