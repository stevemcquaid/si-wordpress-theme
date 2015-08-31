<?php
/**
 * Template Name: team
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package SI
 */

get_header(); ?>

<header class="header">
  <nav class="site-nav">
    <div class="container">
      <div class="col-md-4">
        <a href="/"><img class="logo" src="<?php echo get_template_directory_uri();?>/img/SensoryLogo.jpg" alt="Sensory Interative" /></a>
      </div>
      <ul class="col-md-8">
        <li><a href="#what-we-do" title="">What we do</a></li>
        <li><a href="#clients" title="">Clients</a></li>
        <li><a href="#services" title="">Services</a></li>
        <li><a href="#blog" title="">Blog</a></li>
        <li><a href="#teams" title="">Team</a></li>
        <li><a href="#contact" title="">Contact</a></li>
      </ul>
    </div>
  </nav>
</header><!-- /header -->
<article class="container">
  <header class="">
    <h2>Case study</h2>
    <h1>UCSF Donor Wall</h1>
    <div class="row">
    <div class="col-md-3">
      <p>Sensory Interactive worked with UCSF Medical Center at Mission Bay to develop a dramatic installation that combines donor recognition with education, entertain- ment, and placemaking to create a compelling experi- ence for hospital supporters, patients, families, and staff.</p>
    </div>
    <div class="col-md-9">
      <p>To help the UCSF Medical Center at Mission Bay express its gratitude to the donors who have contributed nearly $600 million for the construction of UCSF Medical Center's new $1.5 billion children’s, women’s, and cancer hospital complex, we created a unique and highly immersive interactive installation.</p>
      <p>The centerpiece of the installation is a 4’ by 13’ interactive wall, utilizing display hardware manu- factured by Prysm, Inc. of San Jose, California. The wall features a gesture-controlled “attract mode” that captures the attention of visitors walking past the installation. Then, with their curiosi- ty piqued, visitors can use the wall’s touch-screen capabilities to learn more about donors, and also explore engaging, interactive content about the institution’s hospitals, faculty, staff, and pro- grams. The wall’s sophisticated hardware and software allow it to accommodate multiple simul- taneous users along its 13-foot length.
</p>
    </div>
    </div>
  </header><!-- /header -->
  <div class="col-md-12">
    <h1>Team</h1>
  </div>
</article>

<?php get_footer(); ?>