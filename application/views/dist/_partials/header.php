<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $title; ?> &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
<?php
if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/owlcarousel2/dist/assets/backend/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/owlcarousel2/dist/assets/backend/owl.theme.default.min.css">
<?php
}elseif ($this->uri->segment(2) == "index_0") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/weather-icon/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/summernote/summernote-bs4.css">
<?php
}elseif ($this->uri->segment(2) == "bootstrap_card") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/chocolat/dist/css/chocolat.css">
<?php
}elseif ($this->uri->segment(2) == "bootstrap_modal") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/prism/prism.css">
<?php
}elseif ($this->uri->segment(2) == "components_gallery") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/chocolat/dist/css/chocolat.css">
<?php
}elseif ($this->uri->segment(2) == "components_multiple_upload") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/dropzonejs/dropzone.css">
<?php
}elseif ($this->uri->segment(2) == "components_statistic") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/flag-icon-css/css/flag-icon.min.css">
<?php
}elseif ($this->uri->segment(2) == "components_user") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/owlcarousel2/dist/assets/backend/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/owlcarousel2/dist/assets/backend/owl.theme.default.min.css">
<?php
}elseif ($this->uri->segment(2) == "forms_advanced_form") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
<?php
}elseif ($this->uri->segment(2) == "forms_editor") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/codemirror/theme/duotone-dark.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/jquery-selectric/selectric.css">
<?php
}elseif ($this->uri->segment(2) == "modules_calendar") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/fullcalendar/fullcalendar.min.css">
<?php
}elseif ($this->uri->segment(2) == "modules_datatables") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<?php
}elseif ($this->uri->segment(2) == "modules_ion_icons") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/ionicons/css/ionicons.min.css">
<?php
}elseif ($this->uri->segment(2) == "modules_owl_carousel") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/owlcarousel2/dist/assets/backend/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/owlcarousel2/dist/assets/backend/owl.theme.default.min.css">
<?php
}elseif ($this->uri->segment(2) == "modules_toastr") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/izitoast/css/iziToast.min.css">
<?php
}elseif ($this->uri->segment(2) == "modules_vector_map") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/izitoast/css/iziToast.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/flag-icon-css/css/flag-icon.min.css">
<?php
}elseif ($this->uri->segment(2) == "modules_weather_icon") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/weather-icon/css/weather-icons-wind.min.css">
<?php
}elseif ($this->uri->segment(2) == "auth_login") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/bootstrap-social/bootstrap-social.css">
<?php
}elseif ($this->uri->segment(2) == "auth_register") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/jquery-selectric/selectric.css">
<?php
}elseif ($this->uri->segment(2) == "features_post_create") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
<?php
}elseif ($this->uri->segment(2) == "features_posts") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/jquery-selectric/selectric.css">
<?php
}elseif ($this->uri->segment(2) == "features_profile") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/summernote/summernote-bs4.css">
<?php
}elseif ($this->uri->segment(2) == "features_setting_detail") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/codemirror/theme/duotone-dark.css">
<?php
}elseif ($this->uri->segment(2) == "features_tickets") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modules/chocolat/dist/css/chocolat.css">
<?php
} ?>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<?php
if ($this->uri->segment(2) == "layout_transparent") {
  $this->load->view('dist/_partials/layout-2');
  $this->load->view('dist/_partials/sidebar-2');
}elseif ($this->uri->segment(2) == "layout_top_navigation") {
  $this->load->view('dist/_partials/layout-3');
  $this->load->view('dist/_partials/navbar');
}elseif ($this->uri->segment(2) != "auth_login" && $this->uri->segment(2) != "auth_forgot_password"&& $this->uri->segment(2) != "auth_register" && $this->uri->segment(2) != "auth_reset_password" && $this->uri->segment(2) != "errors_503" && $this->uri->segment(2) != "errors_403" && $this->uri->segment(2) != "errors_404" && $this->uri->segment(2) != "errors_500" && $this->uri->segment(2) != "utilities_contact" && $this->uri->segment(2) != "utilities_subscribe") {
  $this->load->view('dist/_partials/layout');
  $this->load->view('dist/_partials/sidebar');
}
?>
