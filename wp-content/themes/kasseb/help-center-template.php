<?php 
/*
 * Template Name: Help Center Template
 * description: Page Template for Help Center Page
 */
get_header();
$questions = get_field('questions');
?>
<!-- Contenido de página -->
<div class="container-fluid">
    <div class="row">
        <div class="kasseb-content help-center col-xs-12 col-sm-10 offset-sm-1">
            <?php get_template_part( 'title', '', array('title'=>get_the_title()) ); ?>
            <div class="tab d-none d-sm-none d-md-block">
                <?php foreach( $questions as $key => $question ){ ?>
                    <li class="tablinks li" data-id="<?php echo $key; ?>">
                        <?php echo $question['question']; ?>
                    </li>
                <?php } ?>
            </div>
            <div class="tab-blue d-block d-sm-block d-md-none">
                <li class="nav-link dropdown-toggle li-log" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Questions</li>
                <div class="blue-menu dropdown-menu " aria-labelledby="navbarDropdown">
                    <?php foreach( $questions as $key => $question ){ ?>
                    <li class="tablinks li" data-id="<?php echo $key; ?>">
                        <?php echo $question['question']; ?>
                    </li>
                    <?php } ?>
                </div>
            </div>

            <?php foreach( $questions as $key => $question ){ ?>
            <div id="answer_<?php echo $key; ?>" class="tabcontent" style="display:none;">
                <ul style="list-style: none;">
                    <li><?php echo $question['answer']; ?></li>
                </ul>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>