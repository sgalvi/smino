<!DOCTYPE html>
<html
  xmlns:wicket="https://raw.githubusercontent.com/apache/wicket/wicket-9.x/wicket-core/src/main/resources/META-INF/wicket.xsd"
  lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="UTF-8">

  <title>Rete accelerometrica</title>

  <meta name="description" content="The Data Centre" />
  <meta name="keywords" content="oceanography,marine data,data management,data products" />
  <meta name="author" content="NODC" />
  <meta name="generator" content="Apache Wicket Application - http://wicket.apache.org" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />



  <link rel="icon" href="./icons/favicon.png" type="image/png" />
  <link rel="shortcut icon" href="./icons/favicon.png" type="image/png" />


  <script type="text/javascript"
    src="./wicket/resource/org.apache.wicket.resource.JQueryResourceReference/jquery/jquery-3.6.0-ver-7B432A70897DCD6A8F6D26413CDF1916.js"></script>
  <script type="text/javascript" id="gtag" defer="defer"
    src="https://www.googletagmanager.com/gtag/js?id=G-PH2B3YQD4B"></script>
  <script type="text/javascript" id="gtag-enable" defer="defer"
    src="./wicket/resource/it.trieste.ogs.nodc.web.GenericSitePage/gtag-enable-ver-B07456713D39584EA8861764143334DF.js"></script>
  <script type="text/javascript" id="matomo" defer="defer"
    src="./wicket/resource/it.trieste.ogs.nodc.web.GenericSitePage/matomo-ver-E924071AC33CEC7E5E6A3BEF6A709839.js"></script>
  <link rel="stylesheet" type="text/css"
    href="./wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsCssResourceReference/webjars/splide/3.6.12/css/splide-core.min-ver-4D820616285A4896E89828BF5FB8751E.css" />
  <link rel="stylesheet" type="text/css"
    href="./wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsCssResourceReference/webjars/bootstrap-italia/1.6.2/css/bootstrap-italia.min-ver-4E989355C075280F95C84F8C9D60577B.css"
    id="wb-theme" />
  <link rel="stylesheet" type="text/css"
    href="./wicket/resource/it.trieste.ogs.nodc.web.bootstrap.italia.ItaliaCssReference/css/nodc-ver-326870884590A363FC76B4B2857DA0F2.css" />
  <link rel="stylesheet" type="text/css"
    href="./wicket/resource/it.trieste.ogs.nodc.web.bootstrap.italia.ItaliaCssReference/css/geograph-ver-A301AA547EAAD5A4195520EA4E8C7008.css" />
  <script type="text/javascript"
    src="./wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsJavaScriptResourceReference/webjars/popper.js/1.16.1-lts/umd/popper-ver-16D9CB759C074DBC0C5590EE3CC83CEB.js"></script>
  <script type="text/javascript"
    src="./wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsJavaScriptResourceReference/webjars/splide/3.6.12/js/splide.min-ver-F00FFEA902A55A1F48473F23B1732880.js"></script>
  <script type="text/javascript" id="bootstrap-italia-fonts">
    /*<![CDATA[*/
    window.__PUBLIC_PATH__ = './wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsPackageResourceReference/webjars/bootstrap-italia/1.6.2/css/bootstrap-italia.min-ver-4E989355C075280F95C84F8C9D60577B.css/../../fonts'
    /*]]>*/
  </script>
  <script type="text/javascript" id="bootstrap-js"
    src="./wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsJavaScriptResourceReference/webjars/bootstrap-italia/1.6.2/js/bootstrap-italia.min-ver-8F661DF7D320078D02C0358E0DD439D1.js"></script>
  <script type="text/javascript"
    src="./wicket/resource/de.agilecoders.wicket.core.markup.html.references.JQueryMigrateJavaScriptReference/js/jquery-migrate-1.3.0-ver-322AF89581C7A1AD21A8149F51B8CC16.js"></script>
  <meta name="wicket.header.items" />
</head>


<body>
  <!-- <div class="cookiebar">
    <p>
      This website use third-part cookies.
      <br />
      Proseguendo nella navigazione accetti l'utilizzo dei cookie.
    </p>
    <div class="cookiebar-buttons">
     
      <button data-accept="cookiebar" class="cookiebar-btn cookiebar-confirm">
        Accept<span class="sr-only">
          cookies
        </span>
      </button>
    </div>
  </div> -->
  <div class="it-header-wrapper">
    <div class="it-header-slim-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="it-header-slim-wrapper-content">
           
              <div class="header-slim-right-zone">
            
                <div class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                    <span>ENG</span>
                    <svg class="icon d-none d-lg-block">
                      <use
                        href="wicket/resource/de.agilecoders.wicket.webjars.request.resource.IWebjarsResourceReference/webjars/bootstrap-italia/current/svg/sprite.svg#it-expand">
                      </use>
                    </svg>
                  </a>
                  <div class="dropdown-menu">
                    <div class="row">
                      <div class="col-12">
                        <div class="link-list-wrapper">
                          <ul class="link-list locale-list">
                            <li>
                              <a class="list-item" href="strongmotionit.html"><span>ita</span></a>
                            </li>
                          </ul>
                          <ul class="link-list locale-list">
                            <li>
                              <a class="list-item" href="strongmotion.html"><span>eng</span></a>
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
                      <img class="icon d-block d-sm-block d-md-none" alt="OGS logo" src="images/OGS_logoA_W.png" />

                      <img class="logo-wide icon d-none d-md-block" alt="OGS logo" src="images/OGS_logoW_eng.png" />
                    </a>
                    <div class="it-search-wrapper">
                      <a href="index.html">
                        <h3 class="d-block d-sm-block d-md-none">SMINO</h3>
                        <h3 class="d-none d-md-block">System of Monitoring <br />for Italy's North-Oriental</h3>
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
                                  href="wicket/resource/de.agilecoders.wicket.webjars.request.resource.IWebjarsResourceReference/webjars/bootstrap-italia/current/svg/sprite.svg#it-close">
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
                    href="wicket/resource/de.agilecoders.wicket.webjars.request.resource.IWebjarsResourceReference/webjars/bootstrap-italia/current/svg/sprite.svg#it-burger">
                  </use>
                </svg>
              </button>
              <div class="navbar-collapsable" id="nav10">
                <div class="overlay"></div>
                <div class="close-div sr-only">
                  <button class="btn close-menu" type="button">
                    <span class="it-close"></span>close
                  </button>
                </div>
                <div class="menu-wrapper">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link " href="index.html"><span>Home</span></a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link " href="team.html"><span> Team </span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="contact-us.html"><span> Contact us</span></a>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span>Useful links</span>
                        <svg class="icon">
                          <use
                            href="./wicket/resource/de.agilecoders.wicket.webjars.request.resource.IWebjarsResourceReference/webjars/bootstrap-italia/current/svg/sprite.svg#it-expand">
                          </use>
                        </svg>
                      </a>
                      <div class="dropdown-menu">
                        <div class="link-list-wrapper">
                          <ul class="link-list">
                            <li>
                              <a class="list-item" href="https://www.ogs.it/" target="_blank"><span>OGS</span></a>
                            </li>
                            <li>
                              <a class="list-item" href="https://frednet.crs.ogs.it/" target="_blank"><span>Frednet</span></a>
                            </li>
                            <li>
                              <a class="list-item" href="https://rts.crs.inogs.it/" target="_blank"><span>RTS</span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
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

  <!-- FINE HEADER -->
  <nav class="breadcrumb-container" aria-label="breadcrumb">
    <ol class="breadcrumb">
    </ol>
  </nav>

  <div class="container">
    <div class="row">
      <main class="col-12 col-sm-8 col-lg-7">
        <div class="inner-content pb-5">
          <h1 class="pt-4 mb-5">Strong motion Network</h1>

          <!-- <p class="lead">
     - possibile sottotitolo -
  </p> -->
          <p>
            In order to guarantee the correct recording also of strong seismic events, 29 stations of the seismic
network were also equipped with high quality strong motion sensors. Moreover, within the
&quot;Sentinel Buildings&quot; projects financed by the Regional Civil Protection of the Autonomous Region
of Friuli Venezia Giulia and the Interreg V-A Italy-Austria project Armonia, and the Venet-one
project, other medium cost strong motion sensors (more than 100) have been installed. The network
data are acquired in real time and their processing contributes to the rapid estimation of the impact
of seismic events.
          </p>


        </div>
      </main>

      </li>
      </ul>
    </div>
  </div>
  </div>
  </div> 
  </div>
  </div>



  <footer class="it-footer">
    <div class="it-footer-main">
      <div class="container">
        <section class="py-4">
          <div class="row">
            <div class="col-lg-8 col-md-8 pb-2">
              <img class="logo-wide icon" alt="OGS logo" src="images/OGS_logoW.png" />
              <p>
                National Institute of Oeanography and Applied Geophysics
                - OGS<br />
                <strong> Seismological Research Centre </strong><br /> Via Treviso 55 - 34100<br />Udine - Italy<br /><a
                  href="mailto:gnss@ogs.it">gnss@ogs.it</a>
              </p>
            </div>
            <div class="col-lg-4 col-md-4 pb-2">
              <div class="pb-2">
                <h4>
                  <a>
                    Follow on
                  </a>
                </h4>
                <ul class="list-inline text-left social">
                  <li class="list-inline-item">
                    <a class="p-2 text-white" href="https://www.facebook.com/ogscrs/" target="_blank"><svg
                        class="icon icon-sm icon-white align-top">
                        <use
                          href="wicket/resource/de.agilecoders.wicket.webjars.request.resource.IWebjarsResourceReference/webjars/bootstrap-italia/current/svg/sprite.svg#it-facebook">
                        </use>
                      </svg><span class="sr-only">Facebook</span></a>
                  </li>
                  <li class="list-inline-item">
                    <a class="p-2 text-white" href="https://twitter.com/crs_rts" target="_blank"><svg
                        class="icon icon-sm icon-white align-top">
                        <use
                          href="wicket/resource/de.agilecoders.wicket.webjars.request.resource.IWebjarsResourceReference/webjars/bootstrap-italia/current/svg/sprite.svg#it-twitter">
                        </use>
                      </svg><span class="sr-only">Twitter</span></a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

  </footer>
</body>

</html>