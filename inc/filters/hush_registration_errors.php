<?php
add_filter( 'registration_errors', 'hush_registration_errors', 10, 3 );
    function hush_registration_errors( $errors, $sanitized_user_login, $user_email ) {
        if ( empty( $_POST['first_name'] ) || ! empty( $_POST['first_name'] ) && trim( $_POST['first_name'] ) == '' ) {
            $errors->add( 'first_name_error', __( '<strong>ERROR</strong>: You must include a first name.', 'mydomain' ) );
        }
        if ( empty( $_POST['last_name'] ) || ! empty( $_POST['last_name'] ) && trim( $_POST['last_name'] ) == '' ) {
            $errors->add( 'last_name_error', __( '<strong>ERROR</strong>: You must include a last name.', 'mydomain' ) );
        }
        if ( empty( $_POST['dob'] ) || ! empty( $_POST['dob'] ) && trim( $_POST['dob'] ) == '' ) {
            $errors->add( 'dob_error', __( '<strong>ERROR</strong>: You must include a Date of Birth.', 'mydomain' ) );
        }
        return $errors;
    }