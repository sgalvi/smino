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

  <!-- FINE HEADER -->
  <nav class="breadcrumb-container" aria-label="breadcrumb">
    <ol class="breadcrumb">
    </ol>
  </nav>

  <div class="container">
    <div class="row">
      <main class="col-12 col-sm-8 col-lg-7">
        <div class="inner-content pb-5">
          <h1 class="pt-4 mb-5">Rete Accelerometrica dell’Italia Nord-Orientale</h1>
          <div class="landscape-image mb-4">
            <img src="../../images/accel.png" 
                class="img-fluid w-100" 
                alt="Landscape view of Friuli region" 
                style="max-height: 700px; object-fit: cover;">
          </div>
          
          <p>
          Per garantire una corretta e completa registrazione anche di eventi sismici di forte intensità, 29 stazioni della rete sismometrica sono state equipaggiate con sensori accelerometrici di alta qualità, capaci di rilevare con precisione le accelerazioni generate durante un sisma. Questi sensori avanzati consentono di ottenere dati cruciali per comprendere la dinamica degli eventi sismici e per migliorare le valutazioni relative agli impatti sul territorio.
          </p>
        <p>
        In aggiunta a queste dotazioni, nell’ambito di diversi progetti strategici, tra cui il progetto "Edifici Sentinella", finanziato dalla Protezione Civile Regionale della Regione autonoma del Friuli Venezia Giulia, il progetto Interreg V-A Italia-Austria Armonia e il Progetto Venet-one, sono stati installati più di 100 sensori accelerometrici a medio costo. Questi sensori, pur avendo un costo inferiore rispetto a quelli di alta qualità, rappresentano un’importante integrazione per il monitoraggio sismico su larga scala, migliorando la capacità di raccolta dati nelle aree sensibili.
        </p>
        <p>
        I dati raccolti da questa rete di sensori vengono acquisiti in tempo reale grazie a sofisticati sistemi di trasmissione e comunicazione. L’elaborazione immediata di queste informazioni contribuisce significativamente alla stima rapida dell’impatto degli eventi sismici, offrendo strumenti utili per le autorità competenti nella gestione delle emergenze. Questo sistema avanzato di monitoraggio permette una reazione tempestiva in caso di terremoti, migliorando la sicurezza e la protezione delle persone e degli edifici nelle aree a rischio.
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



  <?php
  include 'footer.php';
?>
</body>

</html>