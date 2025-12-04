<!DOCTYPE html>
<html lang="de">
<head>
    <?php
        require_once __DIR__ . '/src/php/config.php';
        include COMPONENTS_PATH . 'head.php';
    ?>

    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://websich.de/">

    <title>Premium Webdesign für maßgeschneiderte Websites | Websich</title>
    <meta name="description" content="Premium Webdesign, Webentwicklung, SEO und IT-Security – maßgeschneiderte Websites für Unternehmer, die online professionell auftreten wollen.">

    <!-- OpenGraph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://websich.de/">
    <meta property="og:title" content="Premium Webdesign für maßgeschneiderte Websites | Websich">
    <meta property="og:description" content="Individuelles, performantes und sicheres Webdesign – inklusive Webentwicklung, SEO & IT-Security. Alles aus einer Hand für Ihren erfolgreichen Online-Auftritt.">
    <meta property="og:image" content="https://websich.de/assets/opengraph/og-image.jpg">
    <meta property="og:locale" content="de_DE">

    <!-- Twitter/X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Premium Webdesign für maßgeschneiderte Websites | Websich">
    <meta name="twitter:description" content="Individuelles, performantes und sicheres Webdesign – inklusive Webentwicklung, SEO & IT-Security. Alles aus einer Hand für Ihren erfolgreichen Online-Auftritt.">
    <meta name="twitter:image" content="https://websich.de/assets/opengraph/og-image.jpg">

    <link rel="preload" href="/assets/fonts/Merriweather-light.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/assets/fonts/Outfit.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/assets/fonts/Allura-Regular.woff2" as="font" type="font/woff2" crossorigin>


</head>

<body>

<?php
    include COMPONENTS_PATH . 'header.php';
    include COMPONENTS_PATH . 'cookie.php';
    include COMPONENTS_PATH . 'popup.php';
?>

<main>
    <section id="hero">
        <div id="hero-text-overlay" class="animate-on-scroll bottom">
            <div id="hero-heading">
                <span>Premium</span>
                <h1>Webseiten<br> die begeistern</h1>
            </div>
            <p>
                Ich entwickle maßgeschneiderte Webseiten, die mit Design, Technik und Gefühl überzeugen – handgefertigt und perfekt auf Ihr Unternehmen abgestimmt.
            </p>
            <div id="hero-cta">
                <button aria-label="Zur Terminauswahl" class="calendlyButton primary-btn">Jetzt Projekt starten</button>
                <button aria-label="Zu den Kontaktmöglichkeiten" class="secundary-btn" onclick="location.href='#contact'">Kontakt aufnehmen</button>
            </div>
        </div>
        <div id="overlay-shadow"></div>

        <img 
        fetchpriority="high"
            id="background-img"
            src="/assets/images/index/hero-800.webp"
            srcset="
                /assets/images/index/hero-400.webp 400w,
                /assets/images/index/hero-800.webp 800w,
                /assets/images/index/hero-1200.webp 1200w
            "
            sizes="(max-width: 600px) 400px, (max-width: 1200px) 800px, 1200px"
            alt="Hintergrundbild Hochhaus"
        />
    </section>

    <section id="offer">
        <div class="h2-heading animate-on-scroll bottom">
            <span>Erleben Sie digitale Handwerkskunst</span>
            <h2>Unsere Leistungen</h2>
        </div>
        <div id="offer-cards" class="grid grid-3xn">
            <div class="offer-card animate-on-scroll bottom">
                <img loading="lazy" src="/assets/icons/code.svg" alt="Code Icon">
                <h3>Webentwicklung</h3>
                <p>
                    Ich entwickle performante und sichere Webseiten mit klarer Struktur und moderner Technik.
                    Sauberer Code, schnelle Ladezeiten und höchste Qualität bis ins Detail.
                </p>
            </div>
            <div class="offer-card animate-on-scroll bottom">
                <img loading="lazy" src="/assets/icons/design.svg" alt="Design Icon">
                <h3>Webdesign</h3>
                <p>
                    Jedes Projekt entsteht aus einem klaren Konzept und einem Auge fürs Detail. 
                    Farben, Typografie und Layout verschmelzen zu einer harmonischen Komposition.
                </p>
            </div>
            <div class="offer-card animate-on-scroll bottom">
                <img loading="lazy" src="/assets/icons/camera.svg" alt="Digitalkamera Icon">
                <h3>Fotografie</h3>
                <p>
                    Authentische Aufnahmen, die Geschichten erzählen.
                    Professionelle Bilder, die Ihre Website lebendig und greifbar machen.
                </p>
            </div>
        </div>
    </section>

    <section id="additional-offer">
        <div class="h2-heading animate-on-scroll bottom">
            <span>Alles, was Ihre Website braucht</span>
            <h2>Optionale Ergänzungen</h2>
        </div>

        <div id="add-offer-area" class="grid">
            <div class="add-offer animate-on-scroll left">
                <img loading="lazy" src="/assets/icons/check.svg" alt="Verfügar Häckchen Icon">
                <h3 style="white-space: nowrap">SEO & Keywordrecherche</h3>
                <p>
                    Durch gezielte Keywordanalysen und technische Optimierung helfe ich Ihrer Website, 
                    dort sichtbar zu werden, wo Ihre Zielgruppe sucht. 
                    Für bessere Rankings und messbare Ergebnisse.
                </p>
            </div>
            <div class="add-offer animate-on-scroll right">
                <img loading="lazy" src="/assets/icons/check.svg" alt="Verfügar Häckchen Icon">
                <h3 style="white-space: nowrap">Wartung & Optimierung</h3>
                <p>
                    Regelmäßige Updates, Performance-Tuning und technisches Feintuning halten Ihre Website 
                    sicher, schnell und langfristig zuverlässig – ganz ohne Aufwand für Sie.
                </p>
            </div>
            <div class="add-offer animate-on-scroll left">
                <img loading="lazy" src="/assets/icons/check.svg" alt="Verfügar Häckchen Icon">
                <h3 style="white-space: nowrap">IT Security & Backups</h3>
                <p>
                    Sicherheit auf höchstem Niveau: Mit verschlüsselten Backups, Firewalls und 
                    individueller Absicherung bleibt Ihre Website rundum geschützt.
                </p>
            </div>
            <div class="add-offer animate-on-scroll right">
                <img loading="lazy" src="/assets/icons/check.svg" alt="Verfügar Häckchen Icon">
                <h3 style="white-space: nowrap">Hosting & Domains</h3>
                <p>
                    Professionelles Hosting mit stabiler Performance und erstklassiger Erreichbarkeit – 
                    inklusive Domainverwaltung, SSL und individueller Konfiguration.
                </p>
            </div>
        </div>
    </section>

    <section id="process">
        <div class="h2-heading animate-on-scroll bottom">
            <span>So läuft Ihr Projekt stressfrei mit Websich ab</span>
            <h2>Ablauf bei Websich</h2>
        </div>
        <div id="process-grid" class="grid">
            <div class="process-item animate-on-scroll bottom">
                <span>1</span>
                <div class="process-item-text">
                    <h3>Erstgespräch</h3>
                    <p>
                        In einem unverbindlichen Gespräch klären wir Ziele, 
                        Wünsche und Anforderungen. So entsteht ein klares Bild, 
                        was Ihre Website leisten soll – technisch, gestalterisch 
                        und strategisch.
                    </p>                    
                </div>
            </div>
            <div class="process-item animate-on-scroll bottom">
                <span>2</span>
                <div class="process-item-text">
                    <h3>Projektstart</h3>
                    <p>
                        Nach der Planung beginne ich mit der Strukturierung und 
                        Vorbereitung aller Inhalte. Dabei stimme ich jedes Detail mit 
                        Ihnen ab, bevor es in die Designphase geht.
                    </p>                    
                </div>
            </div>
            <div class="process-item animate-on-scroll bottom">
                <span>3</span>
                <div class="process-item-text">
                    <h3>Designphase</h3>
                    <p>
                        Das visuelle Konzept entsteht: modern, klar und individuell 
                        auf Ihre Marke abgestimmt. Ich lege besonderen Wert auf eine 
                        durchdachte Nutzerführung und hochwertige Anmutung.
                    </p>                    
                </div>
            </div>
            <div class="process-item animate-on-scroll bottom">
                <span>4</span>
                <div class="process-item-text">
                    <h3>Fotografie</h3>
                    <p>
                        Auf Wunsch übernehme ich die Bildgestaltung oder plane ein 
                        professionelles Shooting, um Ihre Marke authentisch in Szene zu 
                        setzen – für einen einheitlichen, hochwertigen Auftritt.
                    </p>                    
                </div>
            </div>
            <div class="process-item animate-on-scroll bottom">
                <span>5</span>
                <div class="process-item-text">
                    <h3>Entwicklung</h3>
                    <p>
                        Auf Basis des finalen Designs programmiere ich Ihre Website von 
                        Grund auf. Sauberer Code, Performance und Sicherheit stehen dabei 
                        an erster Stelle.
                    </p>                    
                </div>
            </div>
            <div class="process-item animate-on-scroll bottom">
                <span>6</span>
                <div class="process-item-text">
                    <h3>Betreuung</h3>
                    <p>
                        Auch nach dem Launch bleibe ich Ihr Ansprechpartner: 
                        für technische Betreuung, Anpassungen oder Erweiterungen
                         – zuverlässig und persönlich.
                    </p>                    
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <span id="project-span">PROJEKTE</span>
        <div class="projects-container">
            <nav class="toc animate-on-scroll bottom">
                <span data-target="projekt-1">Landypoint</span>
                <span data-target="projekt-2">Xora AI</span>
            <!--<span data-target="projekt-3">Hochwiesen</span>-->
            </nav>

            <div class="projects-content">
                <div id="projekt-1" class="project">
                    <div class="heading animate-on-scroll bottom">
                        <span>Landrover Legend</span>
                        <h2>Landypoint</h2>
                        <div class="tags">
                            <div class="tag">Vintage</div>
                            <div class="tag">Landrover</div>
                            <div class="tag">Restauration</div>
                        </div>
                    </div>

                    <div class="text-img-block">
                        <div class="text">
                            <h3>Problemstellung</h3>
                            <p>
                                Die alte Website war unübersichtlich und visuell uneinheitlich. 
                                Gewünscht war ein moderner, dunkler Auftritt, der die rustikale 
                                Landrover-Ästhetik nicht verliert. Ziel: ein klarer, nahbarer 
                                Look mit schneller Orientierung und responsive design.
                            </p>
                        </div>
                        <img loading="lazy" src="/assets/images/landypoint/problemstellung.webp" alt="Alte Seite von Landypoint">
                    </div>
                    <div class="text-img-block">
                        <div class="text">
                            <h3>Lösungskonzept</h3>
                            <p>
                                In gemeinsamen Meetings wurden Struktur, Inhalte und 
                                Bildsprache neu definiert. Der Kunde brachte Texte ein, 
                                ein Designer unterstützte bei der visuellen Feinjustierung.
                                So entstand ein starkes, authentisches Erscheinungsbild.
                            </p>
                        </div>
                        <img loading="lazy" src="/assets/images/landypoint/loesungskonzept.webp" alt="Unterseite von Landypoint">
                    </div>
                    <div class="text-img-block">
                        <div class="text">
                            <h3>Designkonzept</h3>
                            <p>
                                Dunkle Töne, präzise Abstände und strukturiert eingesetzte Typografie prägen 
                                das neue Design. Die Seite bleibt bewusst handgefertigt 
                                und individuell — ein Mix aus rustikalem Charme und moderner
                                Eleganz.
                            </p>
                        </div>
                        <img loading="lazy" src="/assets/images/landypoint/designkonzept.webp" alt="Das Design von Landypoint">
                    </div>
                    <div class="branding">
                        <div class="color" style="background-color: #2d3138">
                            <span style="color: #b3c0ce">#2d3138</span>
                        </div>
                        <div class="color" style="background-color: #3e4049">
                            <span style="color: #b3c0ce">#3e4049</span>
                        </div>
                        <div class="color" style="background-color: #999999">
                            <span style="color: #2d3138">#999999</span>
                        </div>
                        <div class="color" style="background-color: #58809b">
                            <span style="color: #b3c0ce">#58809b</span>
                        </div>
                        <div class="color" style="background-color: #8ba1b4">
                            <span style="color: #2d3138">#8ba1b4</span>
                        </div>
                        <div class="color" style="background-color: #b3c0ce">
                            <span style="color: #2d3138">#b3c0ce</span>
                        </div>
                        <div class="color" style="background-color: #eeeeee">
                            <span style="color: #2d3138">#eeeeee</span>
                        </div>
                        
                    </div>
                    <div class="text-img-block">
                        <div class="text">
                            <h3>Technologische Umsetzung</h3>
                            <p>
                                Der Code wurde vollständig individuell entwickelt. 
                                Besonderheit: Die mobile.de-API integriert Fahrzeugdaten 
                                automatisch und stellt sie visuell hochwertig dar. 
                                Performance, Struktur und Details wurden eng mit dem 
                                Kunden abgestimmt.
                            </p>
                        </div>
                        <img loading="lazy" src="/assets/images/landypoint/technologische_umsetzung.webp" alt="Programmiercode von der Landypoint-Website">
                    </div>

                    <h3>Ergebnis seit Launch</h3>
                    <div id="numbers-grid">
                        <div class="number">
                            <span class="num">15.300</span>
                            <span class="small-num">Neue Nutzer <br>(43% über Google-Suche)</span>
                        </div>
                        <div class="number">
                            <span class="num">52.000 </span>
                            <span class="small-num">Aufrufe <br> (26% auf Conversion-seite)</span>
                        </div>
                    </div>
                </div>

                <div id="projekt-2" class="project">
                    <div class="heading animate-on-scroll bottom">
                        <span>Artifical Intelligence Landingpage</span>
                        <h2>Xora AI</h2>
                        <div class="tags">
                            <div class="tag">SaaS</div>
                            <div class="tag">Landingpage</div>
                            <div class="tag">KI</div>
                        </div>
                    </div>

                    <div class="text-img-block">
                        <div class="text">
                            <h3>Problemstellung</h3>
                            <p>
                                Die Idee: ein KI-gestütztes Tool, das Ziele, Gewohnheiten und 
                                tägliche Planung vereint. Der Markt ist überfüllt, viele Apps 
                                sind visuell unklar oder wirken austauschbar.
                                Das Ziel: ein ruhiges, zeitgemäßes Interface, das Fortschritt 
                                intuitiv zeigt und Nutzer motiviert.
                            </p>
                        </div>
                        <img loading="lazy" src="/assets/images/xora/problemstellung.webp" alt="Alte Seite von Landypoint">
                    </div>
                    <div class="text-img-block">
                        <div class="text">
                            <h3>Lösungskonzept</h3>
                            <p>
                                Basierend auf aktuellen UX-Trends wurden Struktur, Userflow und Funktionsumfang 
                                definiert. Fokus lag auf Klarheit: Ziele, Dashboard und Gewohnheiten sollten ohne 
                                Erklärungsbedarf funktionieren.
                                Die gesamte Informationsarchitektur wurde so gestaltet, dass Nutzer 
                                sich sofort zurechtfinden – ohne überladen zu werden.
                            </p>
                        </div>
                        <img loading="lazy" src="/assets/images/xora/loesungskonzept.webp" alt="Unterseite von Landypoint">
                    </div>
                    <div class="text-img-block">
                        <div class="text">
                            <h3>Designkonzept</h3>
                            <p>
                                Dunkle Flächen, starke Akzente und saubere Raster sorgen für maximale Orientierung.
                                Typografie, Icons und Abstände folgen streng den Modernen Designstandards, ergänzt durch eigene Stilelemente für mehr Charakter.
                                Das Interface wirkt fokussiert, frisch und hochwertig – ideal für ein modernes SaaS-Produkt.
                            </p>
                        </div>
                        <img loading="lazy" src="/assets/images/xora/designkonzept.webp" alt="Das Design von Landypoint">
                    </div>
                    <div class="branding">
                        <div class="color" style="background-color: #212121">
                            <span style="color: #B4B4B4">#212121</span>
                        </div>
                        <div class="color" style="background-color: #2D2D2D">
                            <span style="color: #B4B4B4">#2D2D2D</span>
                        </div>
                        <div class="color" style="background-color: #7E2FAE">
                            <span style="color: #B4B4B4">#7E2FAE</span>
                        </div>
                        <div class="color" style="background-color: #B4B4B4">
                            <span style="color: #212121">#B4B4B4</span>
                        </div>
                        <div class="color" style="background-color: #EEEEEE">
                            <span style="color: #212121">#EEEEEE</span>
                        </div>
                        
                    </div>
                    <div class="text-img-block">
                        <div class="text">
                            <h3>Design Impact</h3>
                            <p>
                                Das Konzept zeigt, wie ein KI-Produkt gleichzeitig professionell und zugänglich wirken kann.
                                Klare Struktur, starke Bildsprache und durchdachte Micro-Details ergeben ein Design, dass der Nutzer direkt „versteht“
                            </p>
                        </div>
                        <img loading="lazy" src="/assets/images/xora/designimpact.webp" alt="Programmiercode von der Landypoint-Website">
                    </div>

                    <h3>Ergebnise des Designkonzepts</h3>
                    <div id="numbers-grid">
                        <div class="number">
                            <span class="num">100%</span>
                            <span class="small-num">individuell designt</span>
                        </div>
                        <div class="number">
                            <span class="num">7+</span>
                            <span class="small-num">Psychologische UX-Prinzipien</span>
                        </div>
                    </div>
                </div>
<!--
                <div id="projekt-3" class="project">
                    <div class="heading animate-on-scroll bottom">
                        <span>Hotel Landgasthof</span>
                        <h2>Hochwiesen</h2>
                        <div class="tags">
                            <div class="tag">Mittelstand</div>
                            <div class="tag">Homepage</div>
                            <div class="tag">Hotel</div>
                        </div>
                    </div>
                </div>
-->
            </div>
        </div>
    </section>

    <section id="about">
        <div class="h2-heading animate-on-scroll bottom">
            <span>Erfahrung. Leidenschaft. Ergebnisse.</span>
            <h2>Warum Sie mit mir arbeiten sollten</h2>
        </div>

        <div id="about-wrapper">
            <img loading="lazy" src="/assets/images/index/portrait.webp" alt="Portraitfoto von Fabian Sichert" class="animate-on-scroll left">
            <div id="about-info" class="animate-on-scroll right">
                <div id="about-heading">
                    <div>
                        <span>Gründer</span>
                        <h3>Fabian Sichert</h3>                     
                    </div>
                    <p>
                        Ich bin kein klassisches Webstudio, sondern Ihr persönlicher Partner für modernes, sicheres und wirkungsvolles Webdesign. 
                        Mein Anspruch: Websites schaffen, die nicht nur optisch überzeugen, sondern nachhaltig Eindruck hinterlassen – bei Ihren Kunden und in Ihrer Marke.
                        <br><br>
                        Von der ersten Idee bis zum Go-Live erhalten Sie bei mir alles aus einer Hand – Design, Entwicklung, Technik und Hosting. 
                        Dabei stehen direkte Kommunikation, ehrliche Beratung und höchste Qualität im Mittelpunkt. 
                        Jede Website ist ein Unikat – mit Leidenschaft, Präzision und dem Ziel, das Beste aus Ihrer digitalen Präsenz herauszuholen.
                    </p>
                    <div>
                        <button aria-label="Email direkt an Fabian Sichert schreiben" class="img-btn" onclick="location.href='mailto:fabian@websich.de'"><img loading="lazy" src="/assets/icons/mail.svg" alt="E-Mail Icon"><span style="white-space: nowrap">Persönlich schreiben</span></button>
                    </div>
                </div>
                <div id="about-slideshow" class="grid">
                    <div class="about-slide">
                        <h4>Exklusivität statt Standard</h4>
                        <p>
                            Keine Vorlagen, kein Baukasten – jedes Projekt wird individuell gestaltet 
                            und präzise auf Ihr Unternehmen zugeschnitten.
                        </p>
                    </div>
                    <div class="about-slide">
                        <h4>Klarheit & Eleganz</h4>
                        <p>
                            Ein Design, das Vertrauen schafft, Ihre Marke stärkt 
                            und mit moderner Ästhetik überzeugt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="trust-badge">
        <div id="blur-overlay">
            <h2>Designstandards, wie sie auch <br> große Marken setzen</h2>
        </div>

        <div id="logo-track-wrapper">
            <div class="logo-track" aria-label="Logos bekannter internationaler Marken">
                <img loading="lazy" src="/assets/icons/brands/apple.svg" alt="Apple Logo" title="Apple" />
                <img loading="lazy" src="/assets/icons/brands/audi.svg" alt="Audi Logo" title="Audi" />
                <img loading="lazy" src="/assets/icons/brands/figma.svg" alt="Figma Logo" title="Figma" />
                <img loading="lazy" src="/assets/icons/brands/google.svg" alt="Google Logo" title="Google" />
                <img loading="lazy" src="/assets/icons/brands/lamborghini.svg" alt="Lamborghini Logo" title="Lamborghini" />
                <img loading="lazy" src="/assets/icons/brands/landrover.svg" alt="Land Rover Logo" title="Land Rover" />
                <img loading="lazy" src="/assets/icons/brands/meta.svg" alt="Meta Logo" title="Meta" />
                <img loading="lazy" src="/assets/icons/brands/netflix.svg" alt="Netflix Logo" title="Netflix" />
                <img loading="lazy" src="/assets/icons/brands/nike.svg" alt="Nike Logo" title="Nike" />
                <img loading="lazy" src="/assets/icons/brands/notion.svg" alt="Notion Logo" title="Notion" />
                <img loading="lazy" src="/assets/icons/brands/nvidia.svg" alt="NVIDIA Logo" title="NVIDIA" />
                <img loading="lazy" src="/assets/icons/brands/openai.svg" alt="OpenAI Logo" title="OpenAI" />
                <img loading="lazy" src="/assets/icons/brands/paypal.svg" alt="PayPal Logo" title="PayPal" />
                <img loading="lazy" src="/assets/icons/brands/porsche.svg" alt="Porsche Logo" title="Porsche" />
                <img loading="lazy" src="/assets/icons/brands/samsung.svg" alt="Samsung Logo" title="Samsung" />
                <img loading="lazy" src="/assets/icons/brands/shopify.svg" alt="Shopify Logo" title="Shopify" />
                <img loading="lazy" src="/assets/icons/brands/spotify.svg" alt="Spotify Logo" title="Spotify" />
                <img loading="lazy" src="/assets/icons/brands/tesla.svg" alt="Tesla Logo" title="Tesla" />
            </div>

            <div class="logo-track" aria-label="Logos bekannter internationaler Marken">
                <img loading="lazy" src="/assets/icons/brands/apple.svg" alt="Apple Logo" title="Apple" />
                <img loading="lazy" src="/assets/icons/brands/audi.svg" alt="Audi Logo" title="Audi" />
                <img loading="lazy" src="/assets/icons/brands/figma.svg" alt="Figma Logo" title="Figma" />
                <img loading="lazy" src="/assets/icons/brands/google.svg" alt="Google Logo" title="Google" />
                <img loading="lazy" src="/assets/icons/brands/lamborghini.svg" alt="Lamborghini Logo" title="Lamborghini" />
                <img loading="lazy" src="/assets/icons/brands/landrover.svg" alt="Land Rover Logo" title="Land Rover" />
                <img loading="lazy" src="/assets/icons/brands/meta.svg" alt="Meta Logo" title="Meta" />
                <img loading="lazy" src="/assets/icons/brands/netflix.svg" alt="Netflix Logo" title="Netflix" />
                <img loading="lazy" src="/assets/icons/brands/nike.svg" alt="Nike Logo" title="Nike" />
                <img loading="lazy" src="/assets/icons/brands/notion.svg" alt="Notion Logo" title="Notion" />
                <img loading="lazy" src="/assets/icons/brands/nvidia.svg" alt="NVIDIA Logo" title="NVIDIA" />
                <img loading="lazy" src="/assets/icons/brands/openai.svg" alt="OpenAI Logo" title="OpenAI" />
                <img loading="lazy" src="/assets/icons/brands/paypal.svg" alt="PayPal Logo" title="PayPal" />
                <img loading="lazy" src="/assets/icons/brands/porsche.svg" alt="Porsche Logo" title="Porsche" />
                <img loading="lazy" src="/assets/icons/brands/samsung.svg" alt="Samsung Logo" title="Samsung" />
                <img loading="lazy" src="/assets/icons/brands/shopify.svg" alt="Shopify Logo" title="Shopify" />
                <img loading="lazy" src="/assets/icons/brands/spotify.svg" alt="Spotify Logo" title="Spotify" />
                <img loading="lazy" src="/assets/icons/brands/tesla.svg" alt="Tesla Logo" title="Tesla" />
            </div>
        </div>
    </div>

    <section id="testimonials">
        <div class="h2-heading animate-on-scroll bottom">
            <span>Vertrauen, das man spürt</span>
            <h2>Das sagen meine Kunden</h2>           
        </div>

        <div id="testimonial">
            <div id="profile" class="animate-on-scroll bottom">
                <img loading="lazy" src="/assets/images/index/urs.webp" alt="Profilbild von Urs Stiegler">
            </div>

            <div id="test-heading" class="animate-on-scroll bottom">
                <span>Landypoint GmbH</span>
                <h3>Urs Stiegler</h3>
                <div class="stars">
                    <img loading="lazy" src="/assets/icons/star.svg" alt="Stern Icon">
                    <img loading="lazy" src="/assets/icons/star.svg" alt="Stern Icon">
                    <img loading="lazy" src="/assets/icons/star.svg" alt="Stern Icon">
                    <img loading="lazy" src="/assets/icons/star.svg" alt="Stern Icon">
                    <img loading="lazy" src="/assets/icons/star.svg" alt="Stern Icon">
                </div>
            </div>
            <p class="animate-on-scroll bottom">
            <span class="blur">Die Firma Websich war für uns der </span><span class="no-blur">perfekte Partner</span><span class="blur"> bei der Erstellung unserer neuen Homepage. Unsere Ideen wurden nicht nur </span><span class="no-blur">professionell umgesetzt</span><span class="blur">, sondern Fabian brachte auch eigene, kreative Vorschläge ein, die das Ergebnis noch besser machten. Besonders überzeugt hat uns die strukturierte und absolut </span><span class="no-blur">reibungslose Umsetzung</span><span class="blur">. Auch nach Fertigstellung werden wir erstklassig betreut – Rückfragen werden zeitnah beantwortet und Anpassungen sofort umgesetzt. Das monatliche Reporting zu allen wichtigen Zahlen rund um die Website ist für uns ein </span><span class="no-blur">echter Mehrwert</span><span class="blur"> und funktioniert tadellos. Wir sind rundum zufrieden und können Websich uneingeschränkt weiterempfehlen!</span>
            </p>
        </div>
    </section>

    <section id="contact">
        <div class="h2-heading animate-on-scroll bottom">
            <span>Kontaktieren Sie mich</span>
            <h2>Lassen Sie uns über Ihr Projekt sprechen</h2>           
        </div>

        <div id="contacts">
            <form action="src/php/contact-formular.php" method="POST" class="contact-form animate-on-scroll left">
                <div class="form-col">
                    <div class="form-row">
                        <label for="vorname">Vorname <span class="required">*</span></label>
                        <input type="text" id="vorname" name="vorname" required>
                        <span class="form-error-msg">Bitte geben Sie einen gültigen Wert ein.</span>
                    </div>

                    <div class="form-row">
                        <label for="nachname">Nachname <span class="required">*</span></label>
                        <input type="text" id="nachname" name="nachname" required>
                        <span class="form-error-msg">Bitte geben Sie einen gültigen Wert ein.</span>
                    </div>
                </div>

                <div class="form-row">
                    <label for="email">E-Mail <span class="required">*</span></label>
                    <input type="email" id="email" name="email" required>
                    <span class="form-error-msg">Bitte geben Sie einen gültigen Wert ein.</span>
                </div>

                <div class="form-row">
                    <label for="telefon">Telefonnummer <span class="required">*</span></label>
                    <input type="tel" id="telefon" name="telefon" required>
                    <span class="form-error-msg">Bitte geben Sie einen gültigen Wert ein.</span>
                </div>

                <div class="form-row">
                    <label for="nachricht">Nachricht</label>
                    <textarea id="nachricht" name="nachricht" rows="5"></textarea>
                </div>
                <input type="text" name="website" style="display:none;">
                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                <div class="form-legal">
                <label class="checkbox">
                    <input type="checkbox" name="privacy" required>
                    <span class="checkmark"></span>
                    Ich habe die Datenschutzerklärung gelesen und stimme zu.<span class="required">*</span>
                </label>
                </div>

                <button aria-label="Kontaktformular Absenden" type="submit" class="btn-submit">Absenden</button>
            </form>
            <div id="contact-elements" class="grid">
                <!-- WhatsApp -->
                <a aria-label="Per Whatsapp schreiben" class="contact-element animate-on-scroll right" href="https://wa.me/4915164466131" target="_blank" rel="noopener">
                    <img loading="lazy" src="/assets/icons/whatsapp.svg" alt="WhatsApp Icon">
                    <div class="contact-text">
                    <h3>Nachricht per WhatsApp</h3>
                    <span>0151 64466131</span>
                    </div>
                </a>

                <!-- E-Mail -->
                <a aria-label="Per E-Mail schreiben" class="contact-element animate-on-scroll right" href="mailto:info@websich.de" target="_blank" rel="noopener">
                    <img loading="lazy" src="/assets/icons/mail.svg" alt="E-Mail Icon">
                    <div class="contact-text">
                    <h3>Schreiben Sie mir eine Mail</h3>
                    <span>info@websich.de</span>
                    </div>
                </a>

                <!-- Telefon -->
                <a aria-label="Per Telefon anrufen" class="contact-element animate-on-scroll right" href="tel:+4915164466131">
                    <img loading="lazy" src="/assets/icons/phone.svg" alt="Telefon Icon">
                    <div class="contact-text">
                    <h3>Rufen Sie an</h3>
                    <span>+49 (0) 151 64466131</span>
                    </div>
                </a>

                <!-- Termin -->
                <a aria-label="Zur Terminauswahl" class="contact-element animate-on-scroll right">
                    <div class="calendlyButton overlay-div"></div>
                    <img loading="lazy" src="/assets/icons/calendar.svg" alt="Termin buchen Icon">
                    <div class="contact-text">
                    <h3>Termin aussuchen</h3>
                    <span>Jetzt Termin wählen</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section id="faq">
        <div class="h2-heading animate-on-scroll bottom">
            <span>FAQ</span>
            <h2>Häufig gestellte Fragen</h2>      
        </div>

        <div id="faq-questions">

            <!-- Ablauf -->
            <div class="faq-question animate-on-scroll left">
            <div class="question">
                <div class="question-text">
                <img loading="lazy" src="/assets/icons/faq/process.svg" alt="Zahnrad Icon">
                <h3>Wie läuft ein Projekt bei Websich ab?</h3>
                </div>
                <img loading="lazy" class="chevron" src="/assets/icons/chevron.svg" alt="Registerkarte aufklappen Icon">                  
            </div>
            <div class="answer">
                <p>
                Jedes Projekt startet mit einem unverbindlichen Erstgespräch, 
                in dem Ihre Wünsche, Ziele und Inhalte besprochen werden. 
                Danach folgt die Design- und Entwicklungsphase, bis Ihre Website 
                live geht – alles transparent und in enger Abstimmung.
                Ein ausführlicher Überblick über den genauen Ablauf steht Ihnen hier zur Verfügung:
                </p>
                <a aria-label="Mehr über den Prozess erfahren" href="#process">Mehr erfahren</a>
            </div>
            </div>

            <!-- Dauer -->
            <div class="faq-question animate-on-scroll left">
            <div class="question">
                <div class="question-text">
                <img loading="lazy" src="/assets/icons/faq/process.svg" alt="Zahnrad Icon">
                <h3>Wie lange dauert die Erstellung einer Website?</h3>
                </div>
                <img loading="lazy" class="chevron" src="/assets/icons/chevron.svg" alt="Registerkarte aufklappen Icon">               
            </div>
            <div class="answer">
                <p>
                Die Dauer hängt stark vom Umfang ab.
                Kleinere Projekte mit etwa 5 Seiten sind in rund 4 Wochen realistisch.
                Ab etwa 10 Seiten dauert die Umsetzung meist 2 Monate, und sehr umfangreiche Seiten mit mehr als 15 Unterseiten benötigen etwa 3 Monate oder mehr.
                Ich lege Wert auf Qualität und sauberen Code – lieber etwas länger, dafür dauerhaft überzeugend.
                </p>
            </div>
            </div>

            <!-- Kosten -->
            <div class="faq-question animate-on-scroll left">
            <div class="question">
                <div class="question-text">
                <img loading="lazy" src="/assets/icons/faq/money.svg" alt="Geld Icon">
                <h3>Was kostet eine Website bei Websich?</h3>
                </div>
                <img loading="lazy" class="chevron" src="/assets/icons/chevron.svg" alt="Registerkarte aufklappen Icon">                  
            </div>
            <div class="answer">
                <p>
                Die Kosten richten sich nach Umfang, Funktionsumfang und den gewünschten Zusatzleistungen.
                Kleinere Websites beginnen im vierstelligen Bereich, während größere, maßgeschneiderte Projekte individuell kalkuliert werden.
                Ich arbeite nicht mit Baukasten, sondern entwickle echte Premium-Websites – handgefertigt, modern und nachhaltig programmiert.
                </p>
            </div>
            </div>

            <!-- Bezahlung -->
            <div class="faq-question animate-on-scroll left">
            <div class="question">
                <div class="question-text">
                <img loading="lazy" src="/assets/icons/faq/money.svg" alt="Geld Icon">
                <h3>Wie wird bezahlt?</h3>
                </div>
                <img loading="lazy" class="chevron" src="/assets/icons/chevron.svg" alt="Registerkarte aufklappen Icon">                  
            </div>
            <div class="answer">
                <p>
                Für jedes Website-Projekt wird ein fester Betrag vereinbart.
                Zu Beginn werden 50 % als Anzahlung fällig, die restlichen 50 % nach dem Go-Live.
                Zusatzleistungen oder Wartungspakete werden monatlich abgerechnet,
                und für spätere Änderungen gilt eine feste Abrechnung nach tatsächlichem Aufwand.
                </p>
            </div>
            </div>

            <!-- Änderungen -->
            <div class="faq-question animate-on-scroll left">
            <div class="question">
                <div class="question-text">
                <img loading="lazy" src="/assets/icons/faq/money.svg" alt="Geld Icon">
                <h3>Was passiert, wenn ich später Änderungen möchte?</h3>
                </div>
                <img loading="lazy" class="chevron" src="/assets/icons/chevron.svg" alt="Registerkarte aufklappen Icon">                  
            </div>
            <div class="answer">
                <p>
                Kein Problem — Anpassungen oder Erweiterungen sind jederzeit möglich.
                Diese werden einfach nach Aufwand zu meinem üblichen Stundenlohn abgerechnet.
                </p>
            </div>
            </div>

            <!-- Bearbeitung -->
            <div class="faq-question animate-on-scroll left">
            <div class="question">
                <div class="question-text">
                <img loading="lazy" src="/assets/icons/faq/tools.svg" alt="Programmiercode Icon">
                <h3>Kann ich meine Website später selbst bearbeiten?</h3>
                </div>
                <img loading="lazy" class="chevron" src="/assets/icons/chevron.svg" alt="Registerkarte aufklappen Icon">                  
            </div>
            <div class="answer">
                <p>
                Ja. Sie erhalten auf Wunsch vollen Zugriff auf die Website, 
                um Inhalte anzupassen oder zu erweitern.
                Wer lieber Unterstützung möchte, kann auch auf eine laufende Betreuung
                durch mich setzen.
                </p>
            </div>
            </div>

            <!-- Wartung -->
            <div class="faq-question animate-on-scroll left">
            <div class="question">
                <div class="question-text">
                <img loading="lazy" src="/assets/icons/faq/tools.svg" alt=" Programmiercode Icon">
                <h3>Bietet Websich auch Wartung oder Betreuung nach dem Launch an?</h3>
                </div>
                <img loading="lazy" class="chevron" src="/assets/icons/chevron.svg" alt="Registerkarte aufklappen Icon">                  
            </div>
            <div class="answer">
                <p>
                Ja – auf Wunsch übernehme ich regelmäßige Wartung, Backups, IT-Sicherheit, Updates 
                und Performance-Optimierungen, damit Ihre Website dauerhaft sicher und aktuell bleibt.
                Mehr Informationen dazu finden Sie unter den optionalen Erweiterungen.
                </p>
            </div>
            </div>

            <!-- Inhalte -->
            <div class="faq-question animate-on-scroll left">
            <div class="question">
                <div class="question-text">
                <img loading="lazy" src="/assets/icons/faq/content.svg" alt="Bildbearbeitungs Icon">
                <h3>Übernimmt Websich auch Texte, Bilder oder Fotografie?</h3>
                </div>
                <img loading="lazy" class="chevron" src="/assets/icons/chevron.svg" alt="Registerkarte aufklappen Icon">                  
            </div>
            <div class="answer">
                <p>
                Professionelle Fotografie und Bildbearbeitung übernehme ich direkt selbst.
                Texte können Sie bereitstellen oder wir erarbeiten sie gemeinsam – bei Bedarf mit Unterstützung durch KI-gestützte Texterstellung.
                Ich achte bei allen Inhalten auf klare Sprache, gute Lesbarkeit und optimale SEO-Struktur.
                </p>
            </div>
            </div>

            <!-- Shops -->
            <div class="faq-question animate-on-scroll left">
            <div class="question">
                <div class="question-text">
                <img loading="lazy" src="/assets/icons/faq/content.svg" alt="Bildbearbeitungs Icon">
                <h3>Ist die Erstellung von Online-Shops auch möglich?</h3>
                </div>
                <img loading="lazy" class="chevron" src="/assets/icons/chevron.svg" alt="Registerkarte aufklappen Icon">                  
            </div>
            <div class="answer">
                <p>
                Ich konzentriere mich aktuell auf Unternehmenswebsites und Landingpages.
                Einfache Shop- oder Buchungslösungen sind jedoch auf Anfrage möglich – gerne einfach ansprechen.
                </p>
            </div>
            </div>

            <!-- Integrationen -->
            <div class="faq-question animate-on-scroll left">
            <div class="question">
                <div class="question-text">
                <img loading="lazy" src="/assets/icons/faq/tools.svg" alt="Programmiercode Icon">
                <h3>Sind Integrationen mit anderen Plattformen oder Systemen möglich?</h3>
                </div>
                <img loading="lazy" class="chevron" src="/assets/icons/chevron.svg" alt="Registerkarte aufklappen Icon">                  
            </div>
            <div class="answer">
                <p>
                Ja, Integrationen sind in der Regel kein Problem. Wenn Sie beispielsweise Daten aus Plattformen wie mobile.de, Immowelt, Google Maps oder Instagram einbinden möchten, kann ich passende Schnittstellen (APIs) oder individuelle Lösungen entwickeln.
                Dadurch bleibt ihre Website dynamisch, aktuell und auf ihrem Geschäftsmodell abgestimmt.
                Welche Systeme genau integriert werden können, hängt natürlich vom jeweiligen Anbieter und Projektumfang ab – aber sprechen sie mich einfach darauf an, ich prüfe das gerne vorab.
                </p>
            </div>
            </div>

            <!-- Zusammenarbeit -->
            <div class="faq-question animate-on-scroll left">
            <div class="question">
                <div class="question-text">
                <img loading="lazy" src="/assets/icons/faq/process.svg" alt="Zahnrad icon">
                <h3>Wie funktioniert die Zusammenarbeit, wenn ich nicht aus der Region komme?</h3>
                </div>
                <img loading="lazy" class="chevron" src="/assets/icons/chevron.svg" alt="Registerkarte aufklappen Icon">                  
            </div>
            <div class="answer">
                <p>
                Kein Problem – die gesamte Abstimmung kann online erfolgen.
                Ob Videocall, Telefon oder E-Mail: Ich arbeite mit Kundinnen und Kunden in ganz Deutschland zusammen, effizient und unkompliziert.
                </p>
            </div>
            </div>

            <!-- Unterschied -->
            <div class="faq-question animate-on-scroll left">
            <div class="question">
                <div class="question-text">
                <img loading="lazy" src="/assets/icons/faq/process.svg" alt="Zahnrad icon">
                <h3>Was unterscheidet Websich von anderen Agenturen?</h3>
                </div>
                <img loading="lazy" class="chevron" src="/assets/icons/chevron.svg" alt="Registerkarte aufklappen Icon">                  
            </div>
            <div class="answer">
                <p>
                Bei mir gibt es keine Baukastensysteme und keine Massenware.
                Ich entwickle jede Website persönlich – von der Planung bis zum Launch.
                So entstehen einzigartige, performante und individuelle Designs, die zu Ihrem Unternehmen passen und langfristig überzeugen.
                </p>
            </div>
            </div>

        </div>
    </section>

    <section id="cta-end">
        <div class="h2-heading animate-on-scroll bottom">
            <span>Bereit für den nächsten Schritt?</span>
            <h2>Starten Sie Ihr Projekt mit Websich</h2>
        </div>
        <p class="animate-on-scroll bottom">
            Lassen Sie uns gemeinsam Ihre neue Website planen – individuell, modern und technisch perfekt umgesetzt.  
            Ich freue mich auf Ihr Projekt.
        </p>
        <button aria-label="Zur Terminauswahl" class="calendlyButton primary-btn">Zum unverbindlichen Erstgespräch</button>
    </section>

</main>

<?php
    include COMPONENTS_PATH . 'footer.php';
?>
    
</body>


<script src="https://www.google.com/recaptcha/api.js?render=6LeprhIsAAAAAGkqJca9uk0UYotEJNTuLrCgqQMt"></script>
<script>
document.querySelector('.contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    grecaptcha.ready(function() {
        grecaptcha.execute('6LeprhIsAAAAAGkqJca9uk0UYotEJNTuLrCgqQMt', {action: 'submit'}).then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
            e.target.submit();
        });
    });
});
</script>
</html>
