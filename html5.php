<?php
include "header_inc.html";
?>
 <title>Tutoriels HTML5</title>
  </head>
  <body class="homepage">
    <!-- Header Wrapper -->
    <div id="header-wrapper" class="wrapper">
      <div class="container">
        <div class="row">
          <div class="12u">
            <?php include "menu_princ_inc.html" ?> </div>
        </div>
      </div>
    </div>
    <!-- /Header Wrapper -->
   <!-- Main Wrapper -->
			<div class="wrapper wrapper-style2">
				<div class="title">HTML5</div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Main -->
								<div id="main">
									<div>
										<div class="row">
											<div class="4u">
												
												<!-- Sidebar -->
													<div id="sidebar">
													<?php include "menu_html_inc.html";?>
													</div>
												<!-- /Sidebar -->
												
											</div>
											<div class="8u skel-cell-important">
											
												<!-- Content -->
													<div id="content">
														<article class="is is-post">
															<header class="style1">
																<h2 class="titre">Présentation</h2>
																<span class="byline">Le langage HTML intervient pour la création de site web. C'est un langage facile à apprendre qui permet de définir le contenu des pages web </span>
															</header>
														 <p> HTML est devenu un langage incontournable pour internet. Le HTML est simple, et vous permet de mettre en place un site internet gratuitement.</p>
															
															
																<h2 class="titre">Comment ça fonctionne</h2>
																
															
															<p>Le HTML fournir au navigateur des instructions sur le contenu à afficher (texte, images..). Il utilise des <a href="balise-html.php">balises</a>. La balise HTML permet de décrire plus exactement le contenu qu'elle contient. Dans l'exemple ci-dessous, la balise &lt;p&gt; spécifie que la section de texte est un bloc paragraphe </p>
															<!-- <div style="padding:3px;border:1px solid silver;margin:1em 0">
															<div data-height="120" data-theme-id="0" data-slug-hash="EHlat" data-default-tab="html" class='codepen'><pre><code>&lt;p&gt;Cette commande permet d&#x27;éditer un paragraphe dans le document HTML&lt;/p&gt;</code></pre>
<p>See the Pen <a href='http://codepen.io/salsacobo/pen/EHlat/'>Base html</a> by salsacobo (<a href='http://codepen.io/salsacobo'>@salsacobo</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="http://codepen.io/assets/embed/ei.js"></script> -->

<pre class="brush: xml">
&lt;p&gt;Cette commande permet d&#x27;éditer un paragraphe dans le document HTML&lt;/p&gt;
</pre>	
<p>Affichage sur la page :  </p>
 <div style="padding:3px;border:1px solid silver;margin:1em 0">
<p data-height="120" data-theme-id="0" data-slug-hash="EHlat" data-default-tab="result" class='codepen'>See the Pen <a href='http://codepen.io/salsacobo/pen/EHlat/'>Base html</a> by salsacobo (<a href='http://codepen.io/salsacobo'>@salsacobo</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div>
<h2 class="titre">Créér une page HTML</h2>
<p>Pour créer une page HTML, il faut commencer par créer la <a href='page-html.php'>structure</a> de la page (voir l'exemple visuel ci-dessous). Le <em>doctype</em> spécifie la version du langage html qui sera utilisée pour le site. La balise &lt;html&gt; représente tout le document et englobe tous les autres éléments. La balise &lt;head&gt; représente l'entête de page et fournit des informations au navigateur. La balise &lt;body&gt; contiendra tous les éléments à afficher dans la page </p>
<pre class="brush: xml">&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
  &lt;title&gt;Titre de la page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
  Mon premier contenu
&lt;/body&gt;
&lt;/html&gt;</pre>
       <p> Voici le resultat </p>
        <div style="padding:3px;border:1px solid silver;margin:1em 0">
		<p data-height="100" data-theme-id="0" data-slug-hash="zJFdl" data-default-tab="result" class='codepen'>See the Pen <a href='http://codepen.io/salsacobo/pen/zJFdl/'>Doctype</a> by salsacobo (<a href='http://codepen.io/salsacobo'>@salsacobo</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//codepen.io/assets/embed/ei.js"></script>
</div> 
<h2 class="titre">Version HTML</h2>
<p>Au fil des années le langage html a beaucoup évolué, il y a eu donc plusieurs versions de ce langage.</p>
<ul> 
<li>- HTML (1991) : HTML a été inventé pour pouvoir écrire des documents hypertextuels (pages web) liant les différentes ressources d’Internet avec des hyperliens</li>
<li>- HTML+ (1993) : le terme HTML+ est utilisé pour désigner la version future de HTML, avec l'apparition des images et des formulaires</li>	
<li>- HTML 4.01 (1999) : HTML 4.01 finalise le HTML 4.0 qui introduit trois variantes du format, le <em>strict</em>, le <em>transitional</em> et le <em>frameset</em></li>
<li>- XHTML (2000) : le développement de HTML en tant qu’application du Standard Generalized Markup Language (SGML) est officiellement abandonné au profit de XHTML, application de Extensible Markup Language (XML).</li>
<li>- HTML5 : Les travaux du WHATWG ont été formellement adoptés en mai 2007 comme point de départ d’une nouvelle spécification HTML5</li>
</ul>
<h2 class="titre">Navigateurs Web</h2>
<p>Le but d'un navigateur web (comme Google Chrome, Internet Explorer, Firefox, Safari) est de lire des documents HTML et de les afficher sous forme de pages Web.</p>

<p>Le navigateur n'affiche pas les balises HTML, mais utilise les balises pour déterminer comment le contenu de la page HTML doit être affiché à l'internaute</p>	
<hr>
<div id="disqus_thread"></div>
											
</article>
														<!-- <h3>Remarque :</h3>
														<ul> 
														<li>Les commandes HTML sont écrites en minuscules.</li>
														<li>Un fichier rédigé en HTML doit être enregistré avec l'extension <strong>.html </strong> : ex,<em> accueil.html</em>
														</ul>														
														
														<div>
															<div class="row">
																<div class="6u">
																	<section class="is is-pair-one">
																		<header>
																			<h2 class="titre">Magna pulvinar tempus</h2>
																		</header>
																		<a href="http://fav.me/d5uvswq" class="image image-full"><img src="images/pic05.jpg" alt="" /></a>
																		<p>Rutrum bibendum. Proin pellentesque diam non ligula commodo tempor. Vivamus 
																		eget urna nibh. Curabitur non fringilla nisl. Donec accumsan interdum nisi, quis 
																		tempus.</p>
																		<a href="#" class="button button-style1">More</a>
																	</section>
																</div>
																<div class="6u">
																	<section class="is is-pair-two">
																		<header>
																			<h2 class="titre">Magna pulvinar tempus</h2>
																		</header>
																		<a href="http://fav.me/d5qdf2o" class="image image-full"><img src="images/pic06.jpg" alt="" /></a>
																		<p>Rutrum bibendum. Proin pellentesque diam non ligula commodo tempor. Vivamus 
																		eget urna nibh. Curabitur non fringilla nisl. Donec accumsan interdum nisi, quis 
																		tempus.</p>
																		<a href="#" class="button button-style1">More</a>
																	</section>
																</div>
															</div>
														</div> -->
													</div>
												<!-- /Content -->
											
											</div>
										</div>
									</div>
								</div>
							<!-- /Main -->
							
						</div>
					</div>
					
				</div>
			</div>
		<!-- /Main Wrapper -->
    <div id="copyrightg"> <span> © Untitled. Design by <a href="http://html5up.net/">HTML5UP</a>.</span>
    </div>
     <script type="text/javascript" src="js/shCore.js"></script>
    <script type="text/javascript" src="js/shBrushXml.js"></script> 
	<!-- DC Syntax Highligher Settings -->
<script type="text/javascript">SyntaxHighlighter.all();</script>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://tutovisuel.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  </body>
</html>
