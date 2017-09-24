<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function admin_logged_in()
{
    $CI =& get_instance();
    $is_logged_in = $CI->session->userdata('admin_user');
    if(!isset($is_logged_in) || $is_logged_in != true)
    {
        redirect('C_Main/logout');
    }       
}

function nota_logged_in()
{
    $CI =& get_instance();
    $is_logged_in = $CI->session->userdata('nota');
    if(!isset($is_logged_in) || $is_logged_in != true)
    {
        redirect('C_Main/logout');
    }
}

function teknisi_logged_in()
{
    $CI =& get_instance();
    $is_logged_in = $CI->session->userdata('teknisi_user');
    if(!isset($is_logged_in) || $is_logged_in != true)
    {
        redirect('C_Main/logout');
    }
}

function pm_logged_in()
{
    $CI =& get_instance();
    $is_logged_in = $CI->session->userdata('pm_user');
    if(!isset($is_logged_in) || $is_logged_in != true)
    {
        redirect('C_Main/logout');
    }
}
