<?php
//function for shortcode view
function email_message_callback(){
    //it can be set with many more field and can be created like a contact us or leave feedback form
    $content = '';
    $content .= '<form method="post" action="http://localhost/wordpress/sample-page/">';

    $content .= '<input type="text" name="message">';
    $content .= '</br>';

    $content .= '<label for="message">Type your message for admin</label>';
    $content .= '</br>';

    $content .= '<input type="submit" name="send_email" value="Send" />';

    $content .= '</form>';


    return $content;
}

add_shortcode( 'email_message', 'email_message_callback' );


function get_data(){
    if(isset($_POST['send_email'])){
        $to = 'hossaintamzeed012@gmail.com';
        $subject = 'test';
        $message = sanitize_text_field( 'message' );
        //message to show 
        echo '<pre> A message: ';print_r($_POST['message']);echo', has been sent to admin email</pre>';
        //wp_mail may not work due to local host and not setting up stmp 
        wp_mail( $to, $subject, $message );
    }
}


add_action( 'wp_head','get_data' );
