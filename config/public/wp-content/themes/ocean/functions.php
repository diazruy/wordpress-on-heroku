<?php
if ( function_exists('register_sidebar') ){
	register_sidebars(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<b>',
        'after_title' => '</b>',
    ));
}
?>
<?php
function addit(){
echo '<div style="padding:15px 0;text-align:center;"><a href="http://www.homehost.com.br">Hospedagem</a></div>';
}
?>