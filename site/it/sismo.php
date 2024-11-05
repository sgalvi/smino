<!DOCTYPE html>
<html
  xmlns:wicket="https://raw.githubusercontent.com/apache/wicket/wicket-9.x/wicket-core/src/main/resources/META-INF/wicket.xsd"
  lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="UTF-8">

  <title>Rete sismometrica</title>

  <meta name="description" content="The Data Centre" />
  <meta name="keywords" content="oceanography,marine data,data management,data products" />
  <meta name="author" content="NODC" />
  <meta name="generator" content="Apache Wicket Application - http://wicket.apache.org" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />



  <link rel="icon" href="./icons/favicon.png" type="image/png" />
  <link rel="shortcut icon" href="./icons/favicon.png" type="image/png" />


  <script type="text/javascript"
    src="../../wicket/resource/org.apache.wicket.resource.JQueryResourceReference/jquery/jquery-3.6.0-ver-7B432A70897DCD6A8F6D26413CDF1916.js"></script>
  <script type="text/javascript" id="gtag" defer="defer"
    src="https://www.googletagmanager.com/gtag/js?id=G-PH2B3YQD4B"></script>
  <script type="text/javascript" id="gtag-enable" defer="defer"
    src="../../wicket/resource/it.trieste.ogs.nodc.web.GenericSitePage/gtag-enable-ver-B07456713D39584EA8861764143334DF.js"></script>
  <script type="text/javascript" id="matomo" defer="defer"
    src="../../wicket/resource/it.trieste.ogs.nodc.web.GenericSitePage/matomo-ver-E924071AC33CEC7E5E6A3BEF6A709839.js"></script>
  <link rel="stylesheet" type="text/css"
    href="../../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsCssResourceReference/webjars/splide/3.6.12/css/splide-core.min-ver-4D820616285A4896E89828BF5FB8751E.css" />
  <link rel="stylesheet" type="text/css"
    href="../../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsCssResourceReference/webjars/bootstrap-italia/1.6.2/css/bootstrap-italia.min-ver-4E989355C075280F95C84F8C9D60577B.css"
    id="wb-theme" />
  <link rel="stylesheet" type="text/css"
    href="../../wicket/resource/it.trieste.ogs.nodc.web.bootstrap.italia.ItaliaCssReference/css/nodc-ver-326870884590A363FC76B4B2857DA0F2.css" />
  <link rel="stylesheet" type="text/css"
    href="../../wicket/resource/it.trieste.ogs.nodc.web.bootstrap.italia.ItaliaCssReference/css/geograph-ver-A301AA547EAAD5A4195520EA4E8C7008.css" />
  <script type="text/javascript"
    src="../../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsJavaScriptResourceReference/webjars/popper.js/1.16.1-lts/umd/popper-ver-16D9CB759C074DBC0C5590EE3CC83CEB.js"></script>
  <script type="text/javascript"
    src="../../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsJavaScriptResourceReference/webjars/splide/3.6.12/js/splide.min-ver-F00FFEA902A55A1F48473F23B1732880.js"></script>
  <script type="text/javascript" id="bootstrap-italia-fonts">
    /*<![CDATA[*/
    window.__PUBLIC_PATH__ = '../../../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsPackageResourceReference/webjars/bootstrap-italia/1.6.2/css/bootstrap-italia.min-ver-4E989355C075280F95C84F8C9D60577B.css/../../fonts'
    /*]]>*/
  </script>
  <script type="text/javascript" id="bootstrap-js"
    src="../../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsJavaScriptResourceReference/webjars/bootstrap-italia/1.6.2/js/bootstrap-italia.min-ver-8F661DF7D320078D02C0358E0DD439D1.js"></script>
  <script type="text/javascript"
    src="../../wicket/resource/de.agilecoders.wicket.core.markup.html.references.JQueryMigrateJavaScriptReference/js/jquery-migrate-1.3.0-ver-322AF89581C7A1AD21A8149F51B8CC16.js"></script>
  <meta name="wicket.header.items" />
</head>


<body>

<?php
  include 'cookiebar.php';
  include 'head.php';
?>

  <!-- FINE HEADER -->
  <nav class="breadcrumb-container" aria-label="breadcrumb">
    <ol class="breadcrumb">
    </ol>
  </nav>

  <div class="container">
    <div class="row">
      <main class="col-12 col-sm-8 col-lg-7">
        <div class="inner-content pb-5">
          <h1 class="pt-4 mb-5">Rete sismometrica dell’Italia nord-orientale</h1>
          <div class="landscape-image mb-4">
            <img src="../../images/sismometrica.png" 
                class="img-fluid w-100" 
                alt="Landscape view of Friuli region" 
                style="max-height: 700px; object-fit: cover;">
          </div>
          <!-- <p class="lead">
     - possibile sottotitolo -
  </p> -->
          <p>
            La Rete sismometrica dell’Italia nord-orientale consta di 43 stazioni, di cui 24 a banda larga, 15 a
            corto periodo e 4 di periodo intermedio. La Rete è gestita da OGS anche per conto delle Regioni
            Friuli Venezia Giulia e del Veneto. Le stazioni sono installate in Friuli Venezia Giulia,   Veneto
             (nella maggior parte dei casi) in  Emilia Romagna e Lombardia. I dati registrati da tutte le stazioni
            sono acquisiti in tempo reale presso la sede del Centro di Ricerche Sismologiche di OGS a Udine.
          </p>
          <p>
            La rete fornisce dati anche al sistema di sorveglianza sismica nazionale, con scambio dati in tempo
            reale con il  Dipartimento di Protezione Civile e con l’Istituto Nazionale di Geofisica e Vulcanologia
            (INGV). Inol tre, al fine di migliorare la qualità delle localizzazioni e della stima della magnitudo in
            regioni fron taliere, la rete scambia dati in tempo reale con le reti sismometriche di Austria,
            Slovenia, Sv izzera, e delle Province Autonome di Trento e di Bolzano, e dell’Università degli Stud           i
            di Genova. 
          </p>
          <p>
            La  Rete sismometrica dell’Italia nord-orientale è parte della rete transfrontaliera CE3RN a cui
            partecipano anche le reti sismiche di  Croazia, Slovacchia, Ungheria, Romania, Albania e Bulgari.
             CE3RN  è un esempio di eccellenza di collaborazione transnazionale e di condivisione di
            infrastrutture, dati e risorse. I dati della rete vengono resi disponibili attraverso OASIS, EIDA e il
            sistema RTS.
          </p>


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
                <li><a class="list-item medium" href="https://rts.crs.inogs.it/" target="_blank"><span>Real-time
                      Seismology</span></a>

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