<?php
/**
 * setup.php
 * -------------------------------------------------------------
 * Central website configuration for The Golden Nancy House.
 * Include this file (via header.php) on every page and use the
 * helper functions below instead of hard-coded values.
 * -------------------------------------------------------------
 */

// Global site settings – edit these values to reconfigure the site.
$GLOBALS['site_config'] = array(
    // General
    'site_name'        => 'The Golden Nancy House',
    'site_tagline'     => 'Fine Antique & Custom Jewelry',
    'company_name'     => 'The Golden Nancy House LLC',

    // Address
    'address_street'   => '123 Main Street, Suite 4B',
    'address_city'     => 'New York',
    'address_state'    => 'NY',
    'address_zip'      => '10001',
    'address_country'  => 'United States',

    // Contact
    'email'            => 'info@thegoldennancyhouse.com',
    'support_email'    => 'support@thegoldennancyhouse.com',
    'phone'            => '+1 (555) 123-4567',
    'fax'              => '+1 (555) 123-4568',

    // Web
    'site_url'         => 'https://www.thegoldennancyhouse.com',
    'default_page'     => 'index.php',
    'favicon'          => 'https://static.parastorage.com/client/pfavico.ico',

    // Social media
    'facebook'         => 'https://www.facebook.com/thegoldennancyhouse',
    'instagram'        => 'https://www.instagram.com/thegoldennancyhouse',
    'pinterest'        => 'https://www.pinterest.com/thegoldennancyhouse',
    'youtube'          => 'https://www.youtube.com/@thegoldennancyhouse',

    // SEO / meta defaults
    'meta_description' => 'The Golden Nancy House - bespoke engagement rings, investment-grade gemstones, antique watch collections and heirloom restoration services.',
    'meta_keywords'    => 'jewelry, antique jewelry, engagement rings, gemstones, gold jewelry, heirloom restoration',
    'og_site_name'     => 'The Golden Nancy House',

    // Localization
    'language'         => 'en',
    'timezone'         => 'America/New_York',
    'currency'         => 'USD',

    // Business hours
    'business_hours'   => 'Mon-Fri: 10am - 6pm | Sat: 11am - 4pm | Sun: Closed',

    // Legal
    'copyright_year'   => date('Y'),
    'privacy_policy'   => 'privacy.php',
    'terms_of_service' => 'terms.php',

    // Debug / development
    'debug'            => false,
);

if (!empty($GLOBALS['site_config']['debug'])) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
    ini_set('display_errors', '0');
}

date_default_timezone_set($GLOBALS['site_config']['timezone']);

/**
 * Return a single configuration value by key (or null when missing).
 */
function site_config($key = null)
{
    if ($key === null) {
        return $GLOBALS['site_config'];
    }
    return isset($GLOBALS['site_config'][$key]) ? $GLOBALS['site_config'][$key] : null;
}

/**
 * Echo-safe getter: returns an HTML-escaped configuration value.
 */
function site_config_escaped($key)
{
    $value = site_config($key);
    return $value === null ? '' : htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/**
 * Build the full formatted one-line address.
 */
function site_address($separator = ', ')
{
    $c = $GLOBALS['site_config'];
    $parts = array(
        $c['address_street'],
        $c['address_city'] . ' ' . $c['address_state'] . ' ' . $c['address_zip'],
        $c['address_country'],
    );
    return implode($separator, $parts);
}

/**
 * Absolute URL helper – prefixes a path with the configured site URL.
 */
function site_url($path = '')
{
    return rtrim(site_config('site_url'), '/') . '/' . ltrim($path, '/');
}

/**
 * Obfuscated e-mail link (mailto) to reduce spam harvesting.
 */
function site_email_link($key = 'email', $text = null)
{
    $email = site_config($key);
    if (!$email) {
        return '';
    }
    $text = $text === null ? $email : $text;
    return '<a href="mailto:' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '">'
         . htmlspecialchars($text, ENT_QUOTES, 'UTF-8') . '</a>';
}
