<!DOCTYPE HTML>
<!--
Stellar by HTML5 UP
html5up.net | @ajlkn
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Stellar by HTML5 UP</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->


    <?php

    function get_from_github_wiki($filename){
        $url="https://raw.github.com/wiki/rutd/RUTD/".$filename;
        echo file_get_contents($url);
    }
    ?>


</head>
<body>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <span class="logo">
                <img width="40%" src="images/logo2.svg" alt="" />
                <h1>Planet Formation Witnesses and Probes: Transition Disks</h1>
            </span>
            <p><a href="https://www.dfg.de">DFG</a> Research Unit: FOR 2634/1</p>
        </header>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#motivation">Motivation</a></li>
                <li><a href="#members">Members</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#publications">Publications</a></li>
                <li><a href="#footer">Contact</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">

            <!-- HOME -->
            <section id="home" class="main">
                <div class="spotlight">
                    <div class="content">
                        <header class="major">
                            <h2>Transition Disks ...</h2>
                        </header>
                        <p>... are planet forming disks with inner holes. The origins of those structures are still
                        unknown. They might be caused directly by planets or be formed by dynamical processes linked
                        to the formation of planets. As such, they represent witnesses and probes to the formation of planets.</p>
                            <ul class="actions">
                                <li><a href="#motivation" class="button">Learn More</a></li>
                            </ul>
                        </div>
                        <span class="image"><img src="images/HD100453.png" alt="" /></span>
                    </div>
                </section>

                <!-- First Section -->
                <section id="motivation" class="main special">
                    <header class="major">
                        <h2>Motivation</h2>
                    </header>
                    <p class="content">
                        Recent surveys have shown an overwhelming diversity of extrasolar planetary systems, prompting the question of how did they form, and whether some may end up looking like our own and being able to sustain life. Hints to answer such fundamental questions may be hidden in the many trends that are slowly emerging from the data. An example are the deserts and peaks in the distribution of giant exoplanets, with clear implications for habitability of systems, given the role played by giants on the delivery of volatiles to terrestrial planets (e.g., Quintana & Lissauer 2014).

                        The environment in which planets form plays a major role in understanding both the variety of exoplanets and the emerging trends. Planets are born out of the dust and gas left over whenever a new star forms: the protoplanetary disk. The initial conditions for planet formation are thus determined by the protoplanetary disks, which evolve and disperse as they give birth to planets. Interestingly, the timescales of disk dispersal are comparable to those of planet formation, suggesting that the dispersal mechanism dominates disk evolution right at the time at which planets form. Conversely, the planet formation process also strongly affects the disk, making the combined problem of planet formation and disk evolution a strongly coupled and complex problem.

                        Disks on the verge of dispersal, so-called “Transition Disks” (TDs), are thus particularly important witnesses of the planet formation process, and they can be used as probes of the different mechanisms at play at this crucial time of disk evolution. Latest research has shown, however, that TDs, which are usually identified as disks showing evidence of an (at least partially) evacuated inner dust hole, are in reality a diverse class of objects. Some TDs have relatively small dust holes (a few AUs) and are weakly accreting, if at all. On the other hand an apparently distinct population of TDs show evidence for much larger inner dust cavities (several to many tens of AU) and vigorous accretion, signifying that a large amount of gas is present inside the dust cavity. Different physical processes may be at play for the formation of different TD types (e.g. photoevaporation, MHD processes, dust evolution, planet-disk interactions), each being a piece of the complex planet formation puzzle.
                    </p>
                    <span class="image"><img width="50%" src="images/eso1325d.jpg" alt="" /></span>
                    <footer class="major">
                        <p class="content">

                            Until recently, observations of protoplanetary disks provided very few constraints on our understanding of disk evolution and planet formation. That was in part due to the lack of spatial resolution of telescope facilities at infrared and (sub-)millimetre wavelengths, but also in part because protoplanetary disks tend to be opaque, and therefore much of the planet formation process is hidden from view. Both these obstacles impede an unobstructed view of the physical processes happening inside these planetary nurseries. Both problems may now start to be overcome with the enormous recent advances in the observational facilities. At near infrared wavelengths and at millimetre wavelengths we now start to obtain extraordinarily detailed images of these disks. They turn out to feature complex (often non-axisymmetric) structures that challenge our theoretical understanding of these disks. In particular, many TDs show spectacular structures including lopsided blobs, rings, spirals etc. It is suspected that some of these complex structures may be caused by newly formed giant planets that gravitationally perturb the disk, but exciting new alternative explanations, which not always involve planets are also emerging.

                            In our Research Unit we aim at studying various aspects of TDs, leading to a better understanding of the different formation mechanisms of this very diverse class of objects. TDs are only now really becoming spatially resolvable thanks to facilities like ALMA and VLT - SPHERE, making their study a timely and urgent task. Only understanding the disk evolution and the planet-disk interactions allow the large body of existing and planned observations to be exploited to answer more complex questions like the formation of planetary systems capable to host life. This requires a focussed effort from several communities to devise a multi-pronged strategy to approach to tackle the problem. Specifically, multiwavelength observations of disks at different stages of evolution together with exoplanet and disk statistics should be used to constrain a concerted theoretical modelling effort including the hydrodynamics of the dust and gas component of disks, with and without planets, joint to chemical and radiative transfer calculations, particularly of the surface layers and winds of disks in (or just before) the transition phase. This is the motivation for the Research Unit.

                        </p>
                    </footer>
                </section>



                <!-- Second Section -->
                <section id="members" class="main special">
                    <header class="major">
                        <h2>Members</h2>
                    </header>
                    <?php get_from_github_wiki('members.md');?>

                    <ul class="statistics">
                        <li class="style1">
                            <img src="images/lmu.svg" alt="" />
                        </li>
                        <li class="style2">
                            <img src="images/hd.png" alt="" width="100%"/>
                        </li>
                        <li class="style3">
                            <img src="images/eso.jpg" alt=""  width="70%"/>
                        </li>
                        <li class="style4">
                            <img src="images/MPE.png" alt=""  width="100%"/>
                        </li>
                        <li class="style5">
                            <img src="images/tuebingen.png" alt=""  width="100%"/>
                        </li>
                    </ul>

                </section>

                <!-- EVENTS -->
                <section id="events" class="main special">
                    <header class="major">
                        <h2>Events</h2>
                        <p>Kick-Off Meeting:<br/>
                            Munich 5th and 6th of February 2018
                        </p>
                    </header>
                    <footer class="major">
                        <ul class="actions">
                            <li><a href="generic.html" class="button special disabled">more info soon</a></li>
                        </ul>
                    </footer>
                </section>

                <!-- Get Started -->
                <section id="publications" class="main special">
                    <header class="major">
                        <h2>Publications</h2>
                        <p>A list of publication will be posted here soon</p>
                    </header>
                    <footer class="major">
                        <ul class="actions">
                            <li><a href="generic.html" class="button special disabled">ADS Link coming soon</a></li>
                        </ul>
                    </footer>
                </section>

            </div>

            <!-- Footer -->
            <footer id="footer">
                <section>
                    <h2>Questions?</h2>
                    <p>Please Direct All Enquiries about our Research Unit<br/>
                        to Ms Gudrun Niggl (gniggl .at. usm.lmu.de)</p>
                    </section>
                    <section>
                        <h2>Contact</h2>
                        <dl class="alt">
                            <dt>Address</dt>
                            <dd>Scheinerstr. 1 &bull; 81679 Munich &bull; Germany</dd>
                            <dt>Phone</dt>
                            <dd>+49 (0) 89 2180 6001</dd>
                            <dt>Email</dt>
                            <dd><a href="#">information@untitled.tld</a></dd>
                        </dl>
                    </section>
                    <p class="copyright">&copy; Til Birnstiel. Design based on <a href="https://html5up.net">HTML5 UP</a>.</p>
                </footer>

            </div>

            <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>

        </body>
        </html>
