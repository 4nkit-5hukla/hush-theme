<?php
add_action( 'user_register', 'hush_user_register' );
    function hush_user_register( $user_id ) {
        if ( ! empty( $_POST['first_name'] ) ) {
            update_user_meta( $user_id, 'first_name', trim( $_POST['first_name'] ) );
            update_user_meta( $user_id, 'last_name', trim( $_POST['last_name'] ) );
            update_user_meta( $user_id, 'dob', trim( $_POST['dob'] ) );
        }
    }