<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="generator" content="Hugo 0.104.3">
    <meta name="generator" content="Relearn 5.3.3">
    <meta name="description" content="BITS, the free IT security training for public authorities, was created by the Information Technology Working Group of the Association of Towns and Municipalities in North Rhine-Westphalia as a web-based learning course for employees in public authorities and other institutions. It serves to inform and sensitize colleagues at IT workstations with regard to relevant security topics.">
    <meta name="author" content="Dr. Lutz Gollan">
    <title>Categories :: BITS | IT security training for public authorities</title>
    <link href="../en/categories/index.xml" rel="alternate" type="application/rss+xml" title="BITS | IT security training for public authorities">
    <link href="../images/favicon.png" rel="icon" type="image/png">
    <!-- https://github.com/filamentgroup/loadCSS/blob/master/README.md#how-to-use -->
    <link href="../css/fontawesome-all.min.css" rel="stylesheet" media="print" onload="this.media='all';this.onload=null;"><noscript><link href="../css/fontawesome-all.min.css" rel="stylesheet"></noscript>
    <link href="../css/featherlight.min.css" rel="stylesheet" media="print" onload="this.media='all';this.onload=null;"><noscript><link href="../css/featherlight.min.css" rel="stylesheet"></noscript>
    <link href="../css/auto-complete.css" rel="stylesheet" media="print" onload="this.media='all';this.onload=null;"><noscript><link href="../css/auto-complete.css" rel="stylesheet"></noscript>
    <link href="../css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="../css/nucleus.css" rel="stylesheet">
    <link href="../css/fonts.css" rel="stylesheet" media="print" onload="this.media='all';this.onload=null;"><noscript><link href="../css/fonts.css" rel="stylesheet"></noscript>
    <link href="../css/theme.css" rel="stylesheet">
    <link href="../css/theme-normal.css" rel="stylesheet" id="variant-style">
    <link href="../css/ie.css" rel="stylesheet">
    <link href="../css/variant.css" rel="stylesheet">
    <link href="../css/print.css" rel="stylesheet" media="print">
    <script src="../js/variant.js"></script>
    <script>
      // hack to let hugo tell us how to get to the root when using relativeURLs, it needs to be called *url= for it to do its magic:
      // https://github.com/gohugoio/hugo/blob/145b3fcce35fbac25c7033c91c1b7ae6d1179da8/transform/urlreplacers/absurlreplacer.go#L72
      var index_url="../en/index.json";
      var root_url="../";
      var baseUri=root_url.replace(/\/$/, '');
      // translations
      window.T_Copy_to_clipboard = 'Copy to clipboard';
      window.T_Copied_to_clipboard = 'Copied to clipboard!';
      window.T_Copy_link_to_clipboard = 'Copy link to clipboard';
      window.T_Link_copied_to_clipboard = 'Copied link to clipboard!';
      // some further base stuff
      var baseUriFull='/';
      window.variants && variants.init( [ 'normal', 'dark-mode', 'high-contrast' ] );
    </script>
    <script src="../js/jquery.min.js" defer></script>
	<meta name="date" content="18 Dec 22">

  </head>
  <body class="mobile-support html" data-url="../en/categories.php">
    <div id="body" class="default-animation">
      <div id="sidebar-overlay"></div>
      <div id="toc-overlay"></div>
      <nav id="topbar" class="highlightable">
        <div>
          <div class="navigation">
             <span class="nav nav-next"><i class="fa fa-chevron-right fa-fw"></i></span>
          </div>
          <div class="navigation">
             <a class="nav nav-prev" href="../en/" title="BITS | IT security training for public authorities (&#129104;)"><i class="fas fa-chevron-left fa-fw"></i></a>
          </div>
          <div id="breadcrumbs">
            <span id="sidebar-toggle-span">
              <a href="#" id="sidebar-toggle" title='Menu (CTRL+ALT+n)'><i class="fas fa-bars fa-fw"></i></a>
            </span>
            <span class="links">
              Categories
            </span>
          </div>
        </div>
      </nav>
      <main id="body-inner" class="highlightable default" tabindex="-1">
        <div class="flex-block-wrapper">
          <div id="head-tags">
          </div>
          <article>

<h1>Categories</h1>
<ul>
</ul>

            <footer class="footline">
            </footer>
          </article>        </div>
      </main>
    </div>
    <aside id="sidebar" class="default-animation showVisitedLinks">
      <div id="header-wrapper" class="default-animation">
        <div id="header" class="default-animation">
<a id="logo" href="../en/index.php">
  <img src="../images/logo.jpg" width="220" height="140" alt="BITS Logo" title="BITS | Behörden-IT-Sicherheitstraining">
</a>

        </div>
      </div>
      <div id="content-wrapper" class="highlightable">
      <?php
        include("../00-weekly/php/weekly-filter.php");
        $htmlString = <<<EOT
          <ul class="topics">
          </ul>
        EOT;
        $newTree = filterNavTree($htmlString);
        echo $newTree;
        ?>
        <div id="shortcuts">
          <div class="nav-title">More</div>
          <ul>
            <li><a class="padding" href="../en/weitere-informationen.php"><i class='fas fa-fw fa-info-circle'></i> more information</a></li>
            <li><a class="padding" href="../en/herausgeber-und-lizenz.php"><i class='fas fa-fw fa-id-card'></i> Publisher and License</a></li>
            <li><a class="padding" href="../en/barrierefreiheit.php"><i class='fas fa-fw fa-wheelchair'></i> Accessibility</a></li>
            <li><a class="padding" href="../en/impressum.php"><i class='fas fa-fw fa-file-contract'></i> Imprint</a></li>
            <li><a class="padding" href="../en/datenschutz.php"><i class='fas fa-fw fa-user-shield'></i> Datasecurity</a></li>
          </ul>
        </div>
        <div class="footermargin footerLangSwitch footerVariantSwitch footerVisitedLinks footerFooter showVariantSwitch showVisitedLinks"></div>
        <hr class="default-animation footerLangSwitch footerVariantSwitch footerVisitedLinks footerFooter showVariantSwitch showVisitedLinks">
        <div id="prefooter" class="footerLangSwitch footerVariantSwitch footerVisitedLinks showVariantSwitch showVisitedLinks">
          <ul>
            <li id="select-language-container" class="footerLangSwitch">
              <div class="padding select-container">
                <i class="fas fa-language fa-fw"></i>
                <span>&nbsp;</span>
                <div class="select-style">
                  <label class="a11y-only" for="select-language">Language</label>
                  <select id="select-language" onchange="location = baseUri + this.value;">
                    <option lang="de" id="de" value="/categories.php">Deutsch</option>
                    <option lang="en" id="en" value="/en/categories.php" selected>English</option>
                  </select>
                </div>
                <div class="select-clear"></div>
              </div>
            </li>
            <li id="select-variant-container" class="footerVariantSwitch showVariantSwitch">
              <div class="padding select-container">
                <i class="fas fa-paint-brush fa-fw"></i>
                <span>&nbsp;</span>
                <div class="select-style">
                  <label class="a11y-only" for="select-variant">Theme</label>
                  <select id="select-variant" onchange="window.variants && variants.changeVariant( this.value );">
                    <option id="normal" value="normal" selected>Normal</option>
                    <option id="dark-mode" value="dark-mode">Dark Mode</option>
                    <option id="high-contrast" value="high-contrast">High Contrast</option>
                  </select>
                </div>
                <div class="select-clear"></div>
              </div>
              <script>window.variants && variants.markSelectedVariant();</script>
            </li>
            <li class="footerVisitedLinks showVisitedLinks"><a class="padding" onclick="clearHistory();"><i class="fas fa-history fa-fw"></i> Clear History</a></li>
          </ul>
        </div>
        <div id="footer" class="footerFooter">
        </div>
      </div>
    </aside>
    <script src="../js/clipboard.min.js" defer></script>
    <script src="../js/perfect-scrollbar.min.js" defer></script>
    <script src="../js/featherlight.min.js" defer></script>
    <script src="../js/theme.js" defer></script>
  </body>
</html>
