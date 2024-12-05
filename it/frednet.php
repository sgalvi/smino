<!DOCTYPE html>
<html
  xmlns:wicket="https://raw.githubusercontent.com/apache/wicket/wicket-9.x/wicket-core/src/main/resources/META-INF/wicket.xsd"
  lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="UTF-8">

  <title>Frednet</title>

  <meta name="description" content="The Data Centre" />
  <meta name="keywords" content="oceanography,marine data,data management,data products" />
  <meta name="author" content="NODC" />
  <meta name="generator" content="Apache Wicket Application - http://wicket.apache.org" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />



  <link rel="icon" href="../icons/favicon.png" type="image/png" />
  <link rel="shortcut icon" href="../icons/favicon.png" type="image/png" />


  <script type="text/javascript"
    src="../wicket/resource/org.apache.wicket.resource.JQueryResourceReference/jquery/jquery-3.6.0-ver-7B432A70897DCD6A8F6D26413CDF1916.js"></script>
  <script type="text/javascript" id="gtag" defer="defer"
    src="https://www.googletagmanager.com/gtag/js?id=G-PH2B3YQD4B"></script>
  <script type="text/javascript" id="gtag-enable" defer="defer"
    src="../wicket/resource/it.trieste.ogs.nodc.web.GenericSitePage/gtag-enable-ver-B07456713D39584EA8861764143334DF.js"></script>
  <script type="text/javascript" id="matomo" defer="defer"
    src="../wicket/resource/it.trieste.ogs.nodc.web.GenericSitePage/matomo-ver-E924071AC33CEC7E5E6A3BEF6A709839.js"></script>
  <link rel="stylesheet" type="text/css"
    href="../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsCssResourceReference/webjars/splide/3.6.12/css/splide-core.min-ver-4D820616285A4896E89828BF5FB8751E.css" />
  <link rel="stylesheet" type="text/css"
    href="../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsCssResourceReference/webjars/bootstrap-italia/1.6.2/css/bootstrap-italia.min-ver-4E989355C075280F95C84F8C9D60577B.css"
    id="wb-theme" />
  <link rel="stylesheet" type="text/css"
    href="../wicket/resource/it.trieste.ogs.nodc.web.bootstrap.italia.ItaliaCssReference/css/nodc-ver-326870884590A363FC76B4B2857DA0F2.css" />
  <link rel="stylesheet" type="text/css"
    href="../wicket/resource/it.trieste.ogs.nodc.web.bootstrap.italia.ItaliaCssReference/css/geograph-ver-A301AA547EAAD5A4195520EA4E8C7008.css" />
  <script type="text/javascript"
    src="../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsJavaScriptResourceReference/webjars/popper.js/1.16.1-lts/umd/popper-ver-16D9CB759C074DBC0C5590EE3CC83CEB.js"></script>
  <script type="text/javascript"
    src="../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsJavaScriptResourceReference/webjars/splide/3.6.12/js/splide.min-ver-F00FFEA902A55A1F48473F23B1732880.js"></script>
  <script type="text/javascript" id="bootstrap-italia-fonts">
    /*<![CDATA[*/
    window.__PUBLIC_PATH__ = '../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsPackageResourceReference/webjars/bootstrap-italia/1.6.2/css/bootstrap-italia.min-ver-4E989355C075280F95C84F8C9D60577B.css/../../fonts'
    /*]]>*/
  </script>
  <script type="text/javascript" id="bootstrap-js"
    src="../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsJavaScriptResourceReference/webjars/bootstrap-italia/1.6.2/js/bootstrap-italia.min-ver-8F661DF7D320078D02C0358E0DD439D1.js"></script>
  <script type="text/javascript"
    src="../wicket/resource/de.agilecoders.wicket.core.markup.html.references.JQueryMigrateJavaScriptReference/js/jquery-migrate-1.3.0-ver-322AF89581C7A1AD21A8149F51B8CC16.js"></script>
  <meta name="wicket.header.items" />
</head>


<body>
<?php
  include 'cookiebar.php';
  include 'head.php';
?>

  

  <nav class="breadcrumb-container" aria-label="breadcrumb">
    <ol class="breadcrumb">
    </ol>
  </nav>

  <div class="container">
    <div class="row">
      <main class="col-12 col-sm-8 col-lg-7">
        <div class="inner-content pb-5">
          
          <h1 class="pt-4 mb-5">Friuli Regional Deformation Network (FReDNet)</h1>
          <div class="landscape-image mb-4">
            <img src="../images/frednet.png" 
                class="img-fluid w-100" 
                alt="Landscape view of Friuli region" 
                style="max-height: 700px; object-fit: cover;">
          </div>
          <!-- <p class="lead">
     - possibile sottotitolo -
  </p> -->
  <p> FReDNet (Friuli Regional Deformation Network) è il sistema di monitoraggio delle deformazioni crostali in Friuli Venezia Giulia, sviluppato dal Centro di Ricerche Sismologiche a partire dal 2002, con l'installazione della prima stazione (Zuliani et al., 2018; Tunini et al., 2024). Nella maggior parte dei casi, i ricevitori sono stati installati in siti che già ospitano i sensori della rete sismica dell'OGS. FReDNet fa parte anche di un programma geodetico più ampio relativo alla microplacca adriatica, che include misurazioni episodiche ripetute di punti geodetici. </p> <p> Attualmente, FReDNet comprende 22 ricevitori GNSS permanenti (GPS+GLONASS+Galileo+Beidou) per il monitoraggio geodetico delle deformazioni crostali nel nord-est Italia. Fornisce anche un servizio in tempo reale per la navigazione georeferenziata ad alta precisione, secondo modalità di correzione differenziale (RTK - Real Time Kinematic, e VRS - Virtual Reference Station). Il servizio è liberamente accessibile a utenti pubblici, privati e scientifici (Figura 3). La rete è integrata con la rete geodetica della Regione Friuli Venezia Giulia (rete Antonio Marussi), con la Rete Dinamica Nazionale (RDN) dell'Istituto Geografico Militare (IGM) e con la rete permanente europea EUREF (EPN). </p>








        </div>
      </main>
      <div class="d-none d-md-block col-sm-4 offset-lg-1 col-lg-4 bd-toc">

        <div class="sidebar-wrapper it-line-left-side">
          <div class="sidebar-linklist-wrapper">
            <div class="link-list-wrapper">
              <ul class="link-list">
                <li>
                  <h3 class="no_toc">Links</h3>
                </li>
                <li><a class="list-item medium" href="https://frednet.crs.ogs.it/"
                    target="_blank"><span>FReDNet</span></a></li>
                <li><a class="list-item medium" href="https://gnssdata-epos.oca.eu/#/site"
                    target="_blank"><span>Epos Data Gateway</span></a></li>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
  include 'footer.php';
  ?>
</body>

</html>