<?php

function is_logged_in()
{

    $ci = get_instance();
    $rol_id = $ci->session->userdata('role_id');
    $menu = $ci->uri->segment(1);

    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        if ($rol_id != 1) {
            if ($menu == "admin") {
                redirect('user');
            }
        }
    }
}
