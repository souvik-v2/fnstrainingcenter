<?php
class subMenu extends Walker_Nav_Menu
{
    function end_el(&$output, $item, $depth = 0, $args = array())
    {

        if ('Home' == $item->title) {
            $output .= '<i class="fa fa-angle-down"></i>
                    <div class="header_navbar__dropdown">
                        <a href=""> OUR MISSION AND VISION</a>
                        <a href="">OWNER AND FOUNDER</a>
                        <a href="">TESTIMONIALS</a>
                        <a href="">CAREERS</a>
                        <a href="">THE TEAM</a>
                    </div>';
        }
    }
}
