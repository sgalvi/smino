<!DOCTYPE html>
<html
  xmlns:wicket="https://raw.githubusercontent.com/apache/wicket/wicket-9.x/wicket-core/src/main/resources/META-INF/wicket.xsd"
  lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="UTF-8">

  <title>Rete di monitoraggio su Fibre Ottiche</title>

  <meta name="description" content="The Data Centre" />
  <meta name="keywords" content="oceanography,marine data,data management,data products" />
  <meta name="author" content="NODC" />
  <meta name="generator" content="Apache Wicket Application - http://wicket.apache.org" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />



  <link rel="icon" href="../../icons/favicon.png" type="image/png" />
  <link rel="shortcut icon" href="../../icons/favicon.png" type="image/png" />


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
    window.__PUBLIC_PATH__ = '../../wicket/resource/de.agilecoders.wicket.webjars.request.resource.WebjarsPackageResourceReference/webjars/bootstrap-italia/1.6.2/css/bootstrap-italia.min-ver-4E989355C075280F95C84F8C9D60577B.css/../../fonts'
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

  <nav class="breadcrumb-container" aria-label="breadcrumb">
    <ol class="breadcrumb">
    </ol>
  </nav>

  <div class="container">
    <div class="row">
      <main class="col-12 col-sm-8 col-lg-7">
        <div class="inner-content pb-5">
          <h1 class="pt-4 mb-5">Rete di monitoraggio sismico e geodetico su fibre ottiche</h1>

          <!-- <p class="lead">
     - possibile sottotitolo -
  </p> -->
            <p>
                Il Distributed Acoustic Sensing (DAS) è una tecnologia innovativa che sfrutta le linee di fibra ottica esistenti per eseguire misure di deformazione dinamica del suolo (spostamento relativo o strain), utilizzando strumenti di interrogazione specifici. Questa tecnica consente la raccolta di dati dinamici (serie temporali continue) con una sensibilità paragonabile ai sensori sismici tradizionali, ma su distanze più ampie, fino a 50 km per interrogatore, con un'elevata risoluzione spaziale a livello metrico.          
            </p>
            <p>
            Nell'ambito del Piano Nazionale di Ripresa e Resilienza (PNRR), Missione 4 "Istruzione e Ricerca" - Componente 2 "Dalla ricerca all'impresa", l'Unione Europea ha finanziato la proposta progettuale ITINERIS (Italian Integrated Environmental Research Infrastructures System), che mettendo a sistema le principali Infrastrutture di Ricerca di rilevanza nazionale a tema ambientale (tra cui SMINO),mira a sviluppare un'infrastruttura integrata per la ricerca ambientale in Italia, promuovendo l'eccellenza scientifica e la cooperazione internazionale.
            </p>
            <p>
                Per raggiungere gli obiettivi di ITINERIS, il Centro di Ricerche Sismologiche (CRS) dell'OGS ha acquistato sei unità di interrogazione ottica modello iDAS (intelligent Distributed Acoustic Sensor). Questi dispositivi saranno integrati alle infrastrutture di comunicazione esistenti a scala regionale. L’uso di fibre ottiche lineari standard pre-esistenti  di vari chilometri di lunghezza permetterà sia una riduzione dei costi, sia la possibilità di monitorare in moto continuo e dettagliato il moto del suolo associato ai fenomeni sismici.
            </p>
            <p>
                L'integrazione dei sistemi DAS nel Sistema di Monitoraggio dell'Italia Nord-Orientale (SMINO), gestito dal CRS, potenzierà l'infrastruttura di monitoraggio. Ciò migliorerà significativamente le capacità di rilevazione e allerta precoce dei fenomeni sismici, oltre a garantire un monitoraggio più efficace di deformazioni a medio e lungo termine, come la subsidenza. Questo rappresenta un progresso fondamentale per la Protezione Civile, aumentando la capacità di risposta e mitigazione dei rischi naturali 
            </p>
            <p>
                L'applicazione su vasta scala della tecnologia DAS su aree urbane e regionali rappresenta il primo esperimento di questo genere in Italia e uno dei primi in Europa, con un impatto positivo sulla gestione del rischio sismico e sulla sicurezza del territorio. È in fase di definizione un accordo di collaborazione tra OGS e altri enti locali e regionali per supportare la Protezione Civile nelle attività di prevenzione e risposta alle emergenze, promuovendo una maggiore sicurezza per la popolazione.
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