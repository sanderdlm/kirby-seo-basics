<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
	<meta name="description" content="<?= $site->description()->html() ?>">

	<meta property="og:title" content="<?= $site->og_title()->html() ?>" />
	<meta property="og:site_name" content="<?= $site->og_site_name()->html() ?>">
	<meta property="og:type" content="website">
	<meta property="og:description" content="<?= $site->og_description()->html() ?>" />
	<meta property="og:url" content="https://sanderdlm.be" />
	<meta property="og:image" content="<?= $site->og_image()->html() ?>" /> 

	<?= css('assets/css/style.min.css') ?>
	
	<link rel="icon" href="<?php echo url('assets/images/favicon.ico') ?>" />
	
</head>
<body>