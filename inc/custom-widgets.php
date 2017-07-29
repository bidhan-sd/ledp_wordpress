<?php
    class ledpCustomWidgets extends WP_Widget{
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

            <label for="<?php echo $this->get_field_id('sliderID'); ?>">ID</label>
            <input type="text" name="<?php echo $this->get_field_name('slider_id'); ?>" id="<?php echo $this->get_field_id('sliderID'); ?>" value="<?php echo $value['slider_id']; ?>" class="widefat"/>

        <?php }
    }