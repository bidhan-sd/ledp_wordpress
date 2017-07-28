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
        public function form($value){

        }
    }