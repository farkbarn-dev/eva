<?php include "header.php" ?>
  <section class="sec2">
    <p class="ppro">Productos destacados</p>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $class='element'; ?>
    	<article <?php post_class($class);?>>
        <?php
        if ( has_post_thumbnail() )
          {
            the_post_thumbnail();
          } ?>
        <p class="productotit"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        <p class="val"><?php echo '€ '; the_field('valor'); ?></p>
    	</article>

    <?php endwhile; else: ?>
    	<article>
    		<p>No hay contenido a mostrar </p>
    	</article>
    <?php endif; ?>

  </section>

  <section class="sec3">
    <section class="QuiSom">
      <p class="PQui">Quiénes sómos</p>
      <p class="plor">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
      <p class="pine">In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus, Vivamus elementum semper misi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus</p>
      <p class="pleer"><a class="aleermas" href="#">Leer más</a></p>
    </section>
    <section class="ImgQuiSom">
      <img src="<?php echo get_template_directory_uri(); ?>/img/orunla.png" alt="">
    </section>
  </section>

  <section class="sec4">
    <section class="left">
      <p class="pdat">Datos de ubicación</p>
      <section class="item1">
	<section class="itemcir">
        	<img class="imgstar" src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="">
	</section>
        <p>Calle de Isaac Peral, 9, 28814</p>
        <p>Daganzo de Arriba, Madrid, España</p>
      </section>
      <section class="item2">
	<section class="itemcir">
        	<img class="imgphone" src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt="">
	</section>
        <p>608 43 19 90</p>
      </section>
      <section class="item3">
	<section class="itemcir">
        	<img class="imgmail" src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="">
	</section>
        <p>info@ejemplo.com</p>
      </section>
    </section>
    <section class="right">
      <p class="pfor">Formulario de contacto</p>
      <section class="left">
        <p class="pnom">Nombre</p><input class="txtnom" type="text" name="" value="">
      </section>
      <section class="right">
        <p class="pema">E-mail</p><input class="txtema" type="text" name="" value="">
      </section>
      <section class="left">
        <p class="ptel">Teléfono</p><input class="txttel" type="text" name="" value="">
      </section>
      <section class="left leftcon">
        <p class="pcon">Consulta</p>
        <textarea class="txtcon" rows="10" cols="20" wrap="soft"></textarea>
      </section>
      <a class="aenv" href="#">enviar</a>
    </section>
  </section>

  <section class="itemsdir">
    <section class="secdir">
      <p class="phis">His rebum prompta ea, suas<br>verear in vix, mea esse salutandi<br>scriptorem te. Semper ornatus</p>
    </section>
    <section class="secitems">
      <section class="secitemglo"><section class="globo"><img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt=""></section><p class="pinfo">info@ejemplo.com <br>608 43 19 90</p></section>
      <section class="secitemglo"><section class="globo"><img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt=""></section><p class="pcall">Calle de Isaac Peral, 9, 28814 <br>Daganzo de Arriba, Madrid, España</p> </section>
    </section>
    <section class="secsig"><p class="psig">Síguenos</p><br> <a href="#"><img class="imgsigfac" src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a> <a href="#"><img class="imgsigfac" src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt=""></a> </section>
  </section>
<?php include "footer.php" ?>
