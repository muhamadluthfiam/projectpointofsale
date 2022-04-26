<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/node_modules/font-awesome/css/font-awesome.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/public/template/node_modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/template/assets/css/style.css">
    <link rel="stylesheet" href="/template/assets/css/components.css">
</head>

<body>


    <?= $this->renderSection('Auth'); ?>
    <?= $this->renderSection('Content'); ?>


    <script src="/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/template/node_modules/popper.js/dist/popper.min.js"></script>
    <script src="/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/template/node_modules/nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="/template/node_modules/moment/min/moment.min.js"></script>
    <script src="/public/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="/MyAssets/Auth.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>