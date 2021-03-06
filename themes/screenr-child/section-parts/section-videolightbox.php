<?php

$video_url =  get_theme_mod( 'videolightbox_video', '#' );
$title =  get_theme_mod( 'videolightbox_title', __( 'Parallax & Video Lightbox - Perfected', 'screenr' ) );

if ( ! screenr_is_selective_refresh() ) {
    $parallax_url = get_theme_mod( 'videolightbox_parallax_img' );
    $parallax_url =  apply_filters( 'video_parallax_bg', $parallax_url );

    $classes = 'section-videolightbox section-padding section-padding-larger section-inverse onepage-section';
    if ( $parallax_url ) {
    ?>
    <div id ="video-transcript">
        <a href="/video-transcript">Read Transcript of the video "Can You Read My Lips?"</a>
    </div>
    <div class="parallax-videolightbox parallax-window" data-over-scroll-fix="true" data-z-index="1" data-speed="0.3" data-image-src="<?php echo esc_url( $parallax_url ); ?>" data-parallax="scroll" data-position="center" data-bleed="0">
    <?php } ?>
    <section id="<?php echo esc_attr( get_theme_mod( 'videolightbox_id', 'video' ) ); ?>" class="<?php echo esc_attr( apply_filters( 'screenr_section_class', $classes, 'videolightbox' ) ); ?>">
<?php } ?>
        <div class="container">
            <?php if ( $title ){ ?>
            <h2 class="videolightbox__heading"><?php echo wp_kses_post( balanceTags( $title ) ) ; ?></h2>
            <?php } ?>
            <div class="videolightbox__icon">
                <a href="<?php echo esc_url( $video_url ); ?>" class="popup-video" title="Pop-up Video: Can You Read My Lips?" aria-describedby="Pop-up Video">
                    <span class="video_icon" aria-hidden="true"><i class="fa fa-play"></i></span>
                </a>
            </div>
        </div>
<?php if ( ! screenr_is_selective_refresh() ) { ?>
    </section>

    <?php
    if ( $parallax_url ) { ?>
        </div>
        <?php
    }
}
