<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-market
 */

if(empty(get_theme_mod( 'goldy_market_pricing_plan_content')) && !is_plugin_active('slivery-extender/slivery-extender.php')){ ?>
<?php
}else{
$goldy_fintess_plan = Kirki::get_option( 'goldy_market_pricing_plan_content' );
if(empty($goldy_fintess_plan)){
    $goldy_fintess_plan  = Kirki::get_option( 'goldy_market_pricing_plan_content' );
}
?>
<div class="market_pricing_plan_section">
    <div class="pricing_plan_section_info">
        <div class="pricing_plan_data wow fadeInUp">
            <?php
            if(!empty(get_theme_mod('goldy_market_pricing_plan_main_title', 'Pricing Plan'))){
            ?>
            <div class="pricing_plan_title heading_main_title">
                <h2><?php echo esc_html(get_theme_mod('goldy_market_pricing_plan_main_title', 'Pricing Plan'));?></h2>
                <span class="separator"></span>
            </div>
            <?php } ?>
        </div>
        <div class="pricing_plan_main_content wow animate__zoomIn">
            <div class="pricing_plan_inner_data">
                <?php 
                $x = 1;
                foreach ( $goldy_fintess_plan as $info_item ) { ?>
                    <div class="pricing-plan-inner-wrapper" id="pricing_back_id">
                        <div class="pp_inner">
                            <div class="pp_first_inner_data">
                                <div class="pp_first_content">
                                    <h2><?php echo esc_html($info_item['plan_type']); ?></h2>
                                </div>
                                <div class="pp_amount" id="goldy_pricing_amount_<?php echo $x; ?>">
                                    <h2>
                                        <span style="font-size:45px"><?php echo esc_html($info_item['price_value']); ?></span>
                                        <span style="font-size:15px"><?php echo esc_html($info_item['plan_time']); ?></span>
                                    </h2>
                                </div>
                                <div class="pp_second_content">
                                    <?php if(!empty( $info_item['image'])){ ?>
                                        <img src="<?php echo esc_url($info_item['image']); ?>" alt="The Last of us" loading="lazy">
                                    <?php }else{
                                        ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="The Last of us">
                                        <?php
                                    } 
                                    ?>
                                </div>
                            </div>
                            <div class="pp_third_inner_data">
                                <div class="pp_second_inner_data">
                                    <div class="pp_description">
                                        <p><?php echo wp_kses_post($info_item['plan_description']); ?></p>
                                    </div>
                                </div>
                                <div class="pp_button">
                                    <?php 
                                        if(!empty($info_item['link_url'])) {
                                            if(!empty($info_item['link_text'])) {?>
                                        <div class="pp_btn button">
                                            <a href="<?php echo esc_attr($info_item['link_url']); ?>" class="buttons"><?php echo esc_html($info_item['link_text']); ?></a>
                                        </div>
                                    <?php } } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                    $x++; 
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php 
}