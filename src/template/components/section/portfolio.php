<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php
# set portfolio fields
$projects = get_field( 'projects', 'options' ); ?>

<div class="container">
  <div class="text-center pb-5">
    <h3 class="h1"><?php echo pll__( 'portfólio' ); ?></h3>
    <p><?php echo pll__( 'mensagem de portfólio' ); ?></p>
  </div>

  <div class="gallery-wrapper grow-1">
    <div class="grid">
      <?php get_template_part( 'components/section/project_list' ); ?>
    </div>
  </div>
</div>