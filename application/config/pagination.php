<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Berisi konfigurasi default untuk pagination
$config['per_page'] = 1;
$config["uri_segment"] = 3;

$config['full_tag_open']    = '<nav><ul class="pagination justify-content-center">';
$config['full_tag_close']   = '</ul></nav>';

$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
$config['num_tag_close']    = '</span></li>';

$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
// Sesuaikan dengan blok element pagination pada Bootstrap
// https://getbootstrap.com/docs/4.0/components/pagination/#alignment
?>