<!DOCTYPE html>
<html
  xmlns:wicket="https://raw.githubusercontent.com/apache/wicket/wicket-9.x/wicket-core/src/main/resources/META-INF/wicket.xsd"
  lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="UTF-8">

  <title>Rete Gravimetrica</title>

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
    src="../wicket/resource/it.crs.ogs.smino.web.GenericSitePage/gtag-enable-ver-B07456713D39584EA8861764143334DF.js"></script>
  <script type="text/javascript" id="matomo" defer="defer"
    src="../wicket/resource/it.crs.ogs.smino.web.GenericSitePage/matomo-ver-E924071AC33CEC7E5E6A3BEF6A709839.js"></script>
  <link rel="stylesheet" type="text/css"
    href="../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsCssResourceReference/webjars/splide/3.6.12/css/splide-core.min-ver-4D820616285A4896E89828BF5FB8751E.css" />
  <link rel="stylesheet" type="text/css"
    href="../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsCssResourceReference/webjars/bootstrap-italia/1.6.2/css/bootstrap-italia.min-ver-4E989355C075280F95C84F8C9D60577B.css"
    id="wb-theme" />
  <link rel="stylesheet" type="text/css"
    href="../wicket/resource/it.crs.ogs.smino.web.bootstrap.italia.ItaliaCssReference/css/smino-ver-326870884590A363FC76B4B2857DA0F2.css" />
  <link rel="stylesheet" type="text/css"
    href="../wicket/resource/it.crs.ogs.smino.web.bootstrap.italia.ItaliaCssReference/css/geograph-ver-A301AA547EAAD5A4195520EA4E8C7008.css" />
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
          <h1 class="pt-4 mb-5">La Rete Gravimetrica</h1>
          <div class="landscape-image mb-4">
            <img src="../images/gravi2.png" 
                class="img-fluid w-100" 
                alt="Landscape view of Friuli region" 
                style="max-height: 700px; object-fit: cover;">
          </div>
          
          <p>
            La Rete Gravimetrica Regionale è un progetto in fase di realizzazione che prevede l'istituzione di una serie di punti di riferimento distribuiti nel Nord-Est Italia, dove verranno effettuate misurazioni precise dell'accelerazione di gravità terrestre. Questo progetto continua la storica attività di monitoraggio gravimetrico condotta dall'Istituto Nazionale di Oceanografia e di Geofisica Sperimentale - OGS.
          </p>
          <p>
            La rete sarà composta da punti di misura relativi, nei quali si misurerà la differenza di gravità tra un punto e l'altro. Le misure relative saranno collegate a due nuovi capisaldi assoluti della rete Gravimetrica Nazionale, nei quali verranno invece rilevati i valori assoluti di gravità. Le misure assolute saranno effettuate nei laboratori delle sedi OGS di Udine e Trieste.
          </p>
          <p>
            Questa nuova rete permetterà di ottenere una mappatura dettagliata delle variazioni di gravità terrestre nella regione. Dal punto di vista geodetico, sarà utile per determinare con alta precisione la forma del geoide locale, la superficie fisica di riferimento per le altitudini. In ambito geofisico, invece, la rete verrà impiegata per l'esplorazione del sottosuolo, costituendo un riferimento primario per nuovi rilievi di dettaglio. Queste misurazioni aiuteranno soprattutto nell'individuazione e modellazione di strutture tettoniche attive (come faglie) e di strutture idrogeologiche legate al deflusso delle acque sotterranee (falde acquifere).          
          </p>
          <p>
          Inoltre, il mantenimento costante della rete consentirà di monitorare nel tempo eventuali variazioni dell'accelerazione di gravità. L'integrazione di questi dati con quelli provenienti dalla rete sismometrica, accelerometrica e geodetica SMINO permetterà una ricostruzione più precisa dell'evoluzione tettonica e idrogeologica del Nord-Est Italia.
          </p>

        </div>
      </main>
      
    </div>
  </div>


  <?php
  include 'footer.php';
  ?>
</body>

</html>