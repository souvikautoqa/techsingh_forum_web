<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Base Site URL
 *   Make sure to include the trailing slash exactly as you browse.
 *   If you still use port 8080, include “:8080” here.
 */
$config['base_url'] = getenv('BASE_URL') ?: 'https://dev-forum.techsingh123.com/';

/**
 * Index file
 *   We use “pretty URLs” so leave this blank.
 */
$config['index_page'] = '';
$config['subclass_prefix'] = 'MY_';
/**
 * URI PROTOCOL
 */
$config['uri_protocol'] = 'REQUEST_URI';

/**
 * Default Character Set
 */
$config['charset'] = 'UTF-8';

/**
 * Enable/Disable System Hooks
 */
$config['enable_hooks'] = FALSE;

/**
 * Encryption Key
 *   Required for sessions, CSRF, etc. Generate a random string in production.
 */
$config['encryption_key'] = 'SOME_RANDOM_ENCRYPTION_KEY';

/**
 * Session Variables
 */
$config['sess_driver']            = 'files';
$config['sess_cookie_name']       = 'ci_session';
$config['sess_expiration']        = 7200;
$config['sess_save_path']         = sys_get_temp_dir();
$config['sess_match_ip']          = FALSE;
$config['sess_time_to_update']    = 300;
$config['sess_regenerate_destroy'] = FALSE;

/**
 * Cookie Related Variables
 */
$config['cookie_prefix']    = '';
$config['cookie_domain']    = '';
$config['cookie_path']      = '/';
$config['cookie_secure']    = FALSE;
$config['cookie_httponly']  = FALSE;

/**
 * Logging
 */
$config['log_threshold'] = 0;
$config['log_path'] = '';
$config['log_file_extension'] = '';
$config['log_file_permissions'] = 0644;
$config['log_date_format'] = 'Y-m-d H:i:s';

/**
 * Cache Directory Path
 */
$config['cache_path'] = '';

/**
 * Global XSS Filtering
 */
$config['global_xss_filtering'] = FALSE;

/**
 * CSRF Protection
 */
$config['csrf_protection'] = FALSE;

/**
 * Output Compression
 */
$config['compress_output'] = FALSE;

/**
 * Time Reference
 */
$config['time_reference'] = 'local';

/**
 * Rewrite PHP Short Tags
 */
$config['rewrite_short_tags'] = FALSE;

/**
 * Reverse Proxy IPs
 */
$config['proxy_ips'] = '';

