<!DOCTYPE html>
<html
  xmlns:wicket="https://raw.githubusercontent.com/apache/wicket/wicket-9.x/wicket-core/src/main/resources/META-INF/wicket.xsd"
  lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="UTF-8">

  <title>Rete Accelerometrica Diffusa</title>

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
          <h1 class="pt-4 mb-5">La Rete accelerometica Diffusa</h1>
          <div class="landscape-image mb-4">
            <img src="../images/venetone.png" class="img-fluid w-100" alt="Landscape view of Friuli region"
              style="max-height: 700px; object-fit: cover;">
          </div>

          <p>
            In aggiunta agli accelerometri della rete sismometrica, nell'ambito di diversi progetti strategici, tra cui
            il progetto "Edifici Sentinella", finanziato dalla Protezione Civile Regionale della Regione autonoma del
            Friuli Venezia Giulia, il progetto Interreg V-A Italia-Austria Armonia, è stata installata una densa rete di
            sensori accelerometrici tra Friuli Venezia Giulia e Veneto. I sensori della rete accelerometrica urbana sono
            stati sviluppati nell'ambito dei suddetti progetti dalla sinergia tra OGS e ADEL (direi qualcosa qua
            prendendo spunto dal lavoro sottomesso sul fatto che gli strumenti combinano le alte prestazioni nella
            registrazione delle accelerazioni del suolo per eventi moderati e forti ma hanno un costo ridotto). La
            disponibilità di tali sensori ha permesso di realizzare un'importante integrazione al monitoraggio sismico
            su larga scala, migliorando la capacità di raccolta dati nelle aree sensibili.
          </p>

          <p>
            Inoltre la Regione del Veneto ha incaricato l'OGS di attuare l'Azione 5.1 del POR-FESR 2014-2020
            "Integrazione e sviluppo di sistemi di prevenzione multirischio, anche attraverso reti digitali
            interoperabili di coordinamento operativo precoce". L'obiettivo principale è stato quello di realizzare una
            rete capillare di ulteriori circa 300 sensori accelerometrici a medio costo installati alla base di 317
            edifici in 306 comuni del Veneto.
          </p>

          <p>
            I dati raccolti da questa rete di sensori vengono acquisiti in tempo reale grazie a sofisticati sistemi di
            trasmissione e comunicazione. L'elaborazione immediata di queste informazioni contribuisce
            significativamente alla stima rapida dell'impatto degli eventi sismici, offrendo strumenti utili per le
            autorità competenti nella gestione delle emergenze. Questo sistema avanzato di monitoraggio permette una
            reazione tempestiva in caso di terremoti, migliorando la sicurezza e la protezione delle persone e degli
            edifici nelle aree a rischio. Nell'ambito del progetto inoltre, sono state acquisiti dal Dipartimento di
            Geoscienze dell'Università degli Studi di Padova sugli effetti di sito e sulle caratteristiche degli
            edifici.
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
                <li><a class="list-item medium" href="https://v1.ogs.it/" target="_blank"><span>Rete accelerometrica
                      diffusa per il monitoraggio del Veneto</span></a></li>

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