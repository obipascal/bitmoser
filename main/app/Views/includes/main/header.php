<?php

/**
 * [MAIN SITE HEADER]
 * ----------------------
 * This the main site header file which contains the site links and title.
 * The title can be specified when calling this file in the controller by passing the argument to the view function like this:
 * $this->load->view('path/to/this/file/filename', ['titlte'=> 'Home Page']);
 */
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <title><?= isset($title) ? $title : '';?> - bitmoService</title>
    <meta name="description" content="<?= isset($description) ? $description : 'Do business daily with great convinience on BitmoService platform from anywhere Around Africa.';?>">
    <link rel="stylesheet" href="<?= base_url();?>/assets/bootstrap/css/bootstrap.min.css?h=e78c0948805c24bebff6e56371d59a4a">
    <link rel="stylesheet" href="<?= base_url();?>/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,80">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,400italic,300italic,700italic">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/-Login-form-Page-BS4-.css?h=8917ed24363311d6deb0e3de10c0c1d1">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/best-carousel-slide.css?h=894775746b81faa0596f6e86544b18fe">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/bs-media.css?h=d2aa80b8e5c61681bde98c2018dd45e8">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/Dashboard-layout-v11-1.css?h=34a9a0635382afb8f3a3b31c880c2074">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/Dashboard-layout-v11-2.css?h=5f5b3f6b7652e939290e5c4f00f2147b">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/Dashboard-layout-v11.css?h=c2207f6e801cea3be72bf7994f4319fe">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/Footer-Clean.css?h=458c2006b29994130bd3924e699b0a87">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/Google-Products-Accordion.css?h=ac1c7f11bcbbc0ece1cd067f0e626453">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/header-cover.css?h=722f26206dfbe893e1a98c07cabc9144">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/Highlight-Phone.css?h=1e148caf0669055c552e910be5621bdf">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/modal-dailog/ibox.css?h=600c0cdfc9f7eef9793b9cc63433a83b">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/JLX-Contact-Form-with-Placeholder-FI.css?h=ce9aebdd90d21bd946550f36098c0cd0">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/Pretty-User-List.css?h=61e44a021a0e093d333d38caefc43482">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/MUSA_product-display.css?h=55699d67c660b9704324266143d1a3c5">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/Pricing-table-3.css?h=7257f1cc61081f391ee8aa6a0ba70ebc">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/Product-Details.css?h=09351c7d3cb8c7ecdcad9253778ff891">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/semantic.min.css?h=c81da5f3a27e18162e966c4debb09aa8">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/styles.css?h=f301682eaca4fb322be0f9fee38938bd">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/TR-Form.css?h=7278483ef946f2f3520cf6c4401bc625">
    <!-- Start:  Mobile view max-width: 768ox -->
    <link rel="stylesheet" media="(max-width: 768px)" href="<?= base_url();?>/assets/css/bs-media.css" type="text/css" />
    <!-- End:  Mobile view max-width: 768ox -->

    <!-- Start:  Mobile view max-width: 507px -->
    <link rel="stylesheet" media="(max-width: 507px)" href="<?= base_url();?>/assets/css/bs-media.css" type="text/css" />
    <!-- End:  Mobile view max-width: 507px -->

    <!-- site - Icon -->
    <link rel="icon" href="<?= base_url();?>/assets/img/logo/logo-ico.png" sizes="20x20 400x400" type="image/jpg">
</head>