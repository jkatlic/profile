<!doctype html>
<html>
<head>
    <title>Jeremy Katlic | Profile</title> 
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="plugins/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/profile-main.css" />
    <link rel="stylesheet" type="text/css" href="css/font-styles.css" />
    <link rel="stylesheet" type="text/css" href="css/hover.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive-styles.css" />
    <link rel="shortcut icon" href="img/treeIcon.ico">
    
    <script>
    <!-- just some google analytics stuff -->
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
    ga('create', 'UA-48204019-3', 'auto');
    ga('send', 'pageview');
  </script>
    <!--
      If you are here than you are worthy of this!  --( www.jeremykatlic.com/beta )--
        
        Enjoy watching this site grow :)
        
        P.S. I love easter eggs.. good luck hunting haha
    -->
    
    <?php
        $pathMod = "/dev";
    ?>
</head>

<body>
  <div id="contain-all">
        <div id="header-logo">
            <h1>Jeremy Katlic</h1>
        </div>
        
        <!-- Start Menu Container -->
        <div id="menu-container"> <!-- This acts as a "ghost" so that no content jumps when the menu becomes fixed. -->  
            <div class="navbar-wrapper">
              <div class="container open">
                <div class="navbar navbar-inverse" role="navigation">
                  <div class="container open">
                    <div class="smooth-scroll navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#header-logo"></a>
                    </div>
                   <div class="navbar-collapse collapse">
                      <ul class="smooth-scroll nav navbar-nav">
                        <li class="active"><a id="home-button" href="#header-logo"><i class="fa fa-desktop"></i> Home</a></li>
                        <li><a id="about-button" href="#about"><i class="fa fa-user"></i> About Me</a></li>
                        <li> <a id="code-button" href="#code"><i class="fa fa-code"></i> Websites</a></li>
                        <li><a id="resume-button" href="#resume"><i class="fa fa-cube"></i> Resume</a></li>
                        <li><a id="contact-button" href="#contact"><i class="fa fa-envelope"></i> Contact</a></li>
                      </ul>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Menu Container -->
        <div id="site-controls">
          <div id="home-controls">
            <i data-task="down" class="fa fa-angle-double-down fa-5x"></i>
        </div>
            <div id="other-controls" class="hidden">
              <i data-task="down" class="fa fa-angle-double-down fa-5x"></i>
                <i data-task="up" class="fa fa-angle-double-up fa-5x"></i>
            </div>
        </div>
        
        <div class="profile-section smooth-scroll" id="home">
        </div>
        
        
        <div class="profile-section" id="about">
          <h2>About Me</h2>
          <div class="profile-content">
                <p class="first-line">When I got out of High School I went straight to the Art Institute of Pittsburgh to study graphic design. I found that graphic design wasn't exactly my "thing," but I had gained a better understanding of modern digital design, techniques, and some of the tools they use. Some of my favorite classes at AIP were color theory, perspective drawing, typography, and Photoshop. My education there has helped me a lot in my pursuit of becoming a web/mobile application developer.
                </p>
                <p class="first-line">
                After I left the Art Institute of Pittsburgh my only choice was to enter the workforce. A few years, and a handful of labor positions later I realized I needed to go back to school. I have always enjoyed the technology field, and wanted to find my place in it. I set out to learn networking and servers, but ended up falling in love with programming after my intro to programming course. Since starting at South Hills I have taken 7 different programming language classes that include: PHP, HTML5, CSS3, SQL, Java, Python, and C#. My favorite classes at South Hills were PHP, Web Design I and II, Python, Java, and Android application development. Whether it be through helping them reach their customers, or developing tools that make it easier for others to express themselves, my plans are to use this education to help people.
                </p>
                <p class="first-line">
                I am all about the open source world, and try to help contribute to it all of the time. Places like GitHub, StackOverflow, and JsFiddle help to make my contributing easier. There is a simple joy in people joining together to help one another accomplish amazing feats. It also allows for new technology and ideas to be enjoyed by everyone rich and poor, and I am eager to start making my mark!
                </p>
          </div>
        </div>
        
        <div class="profile-section" id="code">
          <h2>Websites</h2>
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                    <a class="iframe"  href="http://www.jeremykatlic.com/favorite-movies/">
                        <img src="img/design/movie site.PNG" alt="Movie Site" />
                    </a>
                    <div class="carousel-caption">
                        <h3>First site!!!</h3>
                        <p>A site to showcase some of my favorite movies.</p>
                    </div>
                </div>
                
                <!--<div class="item ">
                   <a class="iframe"  href="http://www.jeremykatlic.com/hiking-joe/">
                     <img src="img/design/hiking site landing page.PNG" alt="Hiking Site"/>
                   </a>
                   <div class="carousel-caption">
                        <h3>Hiking Joe</h3>
                        <p>I was experimenting with creating a realistic user interface.</p>
                    </div>
                </div>-->
                
                <div class="item ">
                   <a class="iframe"  href="http://www.jeremykatlic.com/class-profile/">
                     <img src="img/design/class-profile.PNG" alt="My class profile site"/>
                   </a>
                   <div class="carousel-caption">
                        <h3>Class Profile</h3>
                        <p>A profile site I created as a final for one of my web design classes.</p>
                    </div>
                </div>
               
                <div class="item ">
                   <a class="iframe"  href="http://www.jeremykatlic.com/word-grinder/">
                     <img src="img/design/word-grinder.PNG" alt="Word Grinder Screenshot"/>
                   </a>
                   <div class="carousel-caption">
                        <h3>Word Grinder!!</h3>
                        <p>A small, but fun, website that takes in text, and spits out a count of duplicate words.</p>
                    </div>
                </div>
                
                 <div class="item ">
                   <a class="iframe"  href="http://www.jeremykatlic.com/dvrc/">
                     <img src="img/design/dvrc.PNG" alt="DVRC Screenshot"/>
                   </a>
                   <div class="carousel-caption">
                        <h3>DVRC (Local Non-Profit)</h3>
                        <p>I Re-designed their website for a school project.</p>
                    </div>
                </div>
              </div>
            
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div> 
        </div>
        
        <div class="profile-section"  id="resume">
          <h2>Resume</h2>
            <div class="profile-content" id="resume-holder">
                <object data="<?php echo $pathMod; ?>/files/jeremy-katlics-resume.pdf" type="application/pdf" width="100%" height="100%">
                    alt : <a href="<?php echo $pathMod; ?>/files/jeremy-katlics-resume.pdf" target="_blank">View My Resume!</a>
                </object>
            </div>
        </div>
        
        <div class="profile-section"  id="contact">
          <div class="profile-content" id="contact-button-container">
                <div class="stretchy-wrapper">
                  <a href="http://www.linkedin.com/pub/jeremy-katlic/6b/347/998" target="_blank">
                        <div class="contact-button hollow" id="ln">
                            <i class="fa fa-linkedin fa-5x"></i>
                        </div>
                    </a>
                </div>
                <div class="stretchy-wrapper">
                    <a href="https://twitter.com/Th1ngOne" target="_blank">
                        <div class="contact-button hollow" id="tw">
                            <i class="fa fa-twitter fa-5x"></i>
                        </div>
                    </a>
                </div>
                <div class="stretchy-wrapper">
                    <a href="http://www.instagram.com/jk4tlic" target="_blank">
                        <div class="contact-button hollow" id="ig">
                            <i class="fa fa-instagram fa-5x"></i>
                        </div>
                    </a>
                </div>
                <div class="stretchy-wrapper">
                    <a href="http://www.jsfiddle.net/user/jBeardFace/fiddles/" target="_blank">
                        <div class="contact-button hollow" id="jf">
                            <i class="fa fa-jsfiddle fa-5x"></i>
                        </div>
                    </a>
                </div>
                <div class="stretchy-wrapper">
                    <a href="https://github.com/jkatlic" target="_blank">
                        <div class="contact-button hollow" id="gh">
                            <i class="fa fa-github-alt fa-5x"></i>
                        </div>
                    </a>
                </div>
                 <div class="stretchy-wrapper">
                    <a href="mailto:jk4tlic@gmail.com?subject=Hey">
                        <div class="contact-button hollow" id="em">
                            <i class="fa fa-envelope fa-5x"></i>
                        </div>
                    </a>
                </div>
          </div>
        </div>
        
        <div id="footer">
          <p>&copy; 2016 Jeremy Katlic</p>
        </div>
  </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="js/profile-functions.js" type="text/javascript"></script>
    <script src="js/profile-main.js" type="text/javascript"></script>
</body>
</html>
