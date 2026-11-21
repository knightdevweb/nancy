<?php
/**
 * header.php
 * -------------------------------------------------------------
 * Site-wide header, included at the top of EVERY page.
 * Pages set $pageTitle / $pageDescription before including it.
 * It loads setup.php (website configuration) automatically.
 * -------------------------------------------------------------
 */

require_once __DIR__ . '/setup.php';

$__root      = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/'); // e.g. "/category"
$__home      = ($__root === '' || $__root === '/') ? '/' : $__root . '/';
$pageTitle   = isset($pageTitle) ? $pageTitle : site_config('site_name');
$pageDescription = isset($pageDescription) ? $pageDescription : site_config('meta_description');
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars(site_config('language'), ENT_QUOTES, 'UTF-8'); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?> | <?php echo site_config_escaped('site_name'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="keywords" content="<?php echo site_config_escaped('meta_keywords'); ?>">
  <meta property="og:site_name" content="<?php echo site_config_escaped('og_site_name'); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:type" content="website">
  <link rel="icon" sizes="192x192" href="<?php echo site_config_escaped('favicon'); ?>" type="image/x-icon"/>
  <style>
    /* ---- Golden Nancy House shared chrome (header / footer) ---- */
    :root { --gnh-gold:#c9a24b; --gnh-ink:#1c1a17; --gnh-paper:#faf7f0; }
    .gnh-header{background:var(--gnh-ink);color:var(--gnh-paper);font-family:Georgia,'Times New Roman',serif;}
    .gnh-header .gnh-inner{max-width:1200px;margin:0 auto;padding:18px 24px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;}
    .gnh-brand a{color:var(--gnh-gold);text-decoration:none;font-size:1.6rem;letter-spacing:.06em;}
    .gnh-brand small{display:block;color:#bdb4a4;font-size:.75rem;letter-spacing:.18em;text-transform:uppercase;}
    .gnh-nav a{color:var(--gnh-paper);text-decoration:none;margin-left:22px;font-size:.95rem;}
    .gnh-nav a:hover,.gnh-nav a.active{color:var(--gnh-gold);}
    .gnh-contact-bar{background:#141210;color:#9b917f;font-size:.8rem;text-align:center;padding:6px 12px;font-family:Arial,sans-serif;}
    .gnh-contact-bar a{color:var(--gnh-gold);text-decoration:none;}
    .gnh-footer{background:var(--gnh-ink);color:#bdb4a4;font-family:Arial,sans-serif;font-size:.85rem;margin-top:48px;}
    .gnh-footer .gnh-inner{max-width:1200px;margin:0 auto;padding:32px 24px;display:flex;flex-wrap:wrap;gap:32px;justify-content:space-between;}
    .gnh-footer h4{color:var(--gnh-gold);margin:0 0 10px;font-size:.95rem;letter-spacing:.08em;text-transform:uppercase;}
    .gnh-footer a{color:#bdb4a4;text-decoration:none;}
    .gnh-footer a:hover{color:var(--gnh-gold);}
    .gnh-footer ul{list-style:none;margin:0;padding:0;line-height:1.8;}
    .gnh-copy{border-top:1px solid #33302a;text-align:center;padding:14px;font-size:.75rem;color:#7d7466;}
  </style>
</head>
<body>
<div class="gnh-contact-bar">
  &#9742; <?php echo site_config_escaped('phone'); ?> &nbsp;&bull;&nbsp;
  &#9993; <?php echo site_email_link('email'); ?> &nbsp;&bull;&nbsp;
  <?php echo htmlspecialchars(site_address(' — '), ENT_QUOTES, 'UTF-8'); ?>
</div>
<header class="gnh-header">
  <div class="gnh-inner">
    <div class="gnh-brand">
      <a href="<?php echo $__home; ?>"><?php echo site_config_escaped('site_name'); ?></a>
      <small><?php echo site_config_escaped('site_tagline'); ?></small>
    </div>
    <nav class="gnh-nav">
      <a href="<?php echo $__home; ?>index.php">Home</a>
      <a href="<?php echo $__home; ?>portfolio.php">Portfolio</a>
      <a href="<?php echo $__home; ?>category/all-products.php">Shop</a>
      <a href="<?php echo $__home; ?>book-online.php">Book Online</a>
      <a href="<?php echo site_config_escaped('facebook'); ?>" target="_blank" rel="noopener">Facebook</a>
      <a href="<?php echo site_config_escaped('instagram'); ?>" target="_blank" rel="noopener">Instagram</a>
    </nav>
  </div>
</header>
<main id="content">
