<!DOCTYPE html>
<html lang="en" class="<?= str_replace('.', ' ', Route::currentRouteName()) ?>" ng-app="main">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pharos</title>

    <link href="/packages/definitely246/pharos/css/pharos.min.css" rel="stylesheet">

    <script>window.appPageData = <?= $javascriptData ?></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">

        <?= render('pharos::layouts.nav') ?>

        <div id="page-wrapper"><?= $content ?></div>

    </div>

    <script async src="/packages/definitely246/pharos/js/pharos.js"></script>

</body>
</html>
