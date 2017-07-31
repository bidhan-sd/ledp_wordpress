<?php
    class ledpCustom_Widgets extends WP_Widget{
        public function __construct(){
             parent::__construct(
                'ledpwidget','Ledp Widget',array(
                    'description' => 'This widget for ledp porject footer option',
                )
             );
        }

        public function widget($args,$value){

        }
        public function form($value){ ?>

            <label for="<?php echo $this->get_field_id('sliderID'); ?>">About Content</label>
            <input type="text" name="<?php echo $this->get_field_name('slider_id'); ?>" id="<?php echo $this->get_field_id('sliderID'); ?>" value="<?php echo $value['slider_id']; ?>" class="widefat"/>

        <?php }
    }

function ledp_andia_widget(){
    register_sidebar(array(
        'name' => 'Ledp custom sidebar',
        'id' => 'ledp_custom_sidebar'
    ));

    register_widget('ledpCustom_Widgets');
}

add_action('widgets_init','ledp_andia_widget');