<?php
/**
 * Intro admin template
 *
 * @package    optimization
 * @subpackage optimization/admin
 * @author     Optimization.Team <info@optimization.team>
 */

if (!defined('ABSPATH')) {
    exit;
}

$module_name = $view->module->name();
$module_version = $view->module->version();

?>
<div class="wrap">

	<div class="metabox-prefs">
		<div class="wrap about-wrap" style="position:relative;">
			<div style="float:right;">
				<a href="https://httpd.apache.org/docs/2.4/howto/htaccess.html" target="_blank" rel="noopener"><img src="<?php print $view->module->dir_url(); ?>admin/images/htaccess-logo.png" alt="Apache .htaccess" width="180" height="118" border="0" style="float:right;"></a>
			</div>
			<h1><?php print $module_name; ?> <?php print $module_version; ?></h1>

			<p class="about-text" style="min-height:inherit;">Thank you for using the <?php print $module_name; ?> plugin by <a href="https://github.com/o10n-x/" target="_blank" rel="noopener" style="color:black;text-decoration:none;">Optimization.Team</a></p>
			
			<p class="about-text" style="min-height:inherit;">This plugin is a Apache .htaccess editor for WordPress.</p>

			

			<p class="about-text" style="min-height:inherit;">Getting started? <a href="https://encrypted.google.com/search?q=htaccess+optimization" target="_blank">Search Google</a> for guides to optimize your webserver.</p>

			<p class="about-text" style="min-height:inherit;">If you are happy with the plugin, please consider to <span class="star" style="display:inline-block;vertical-align:middle;"><a class="github-button" data-manual="1" data-size="large" href="https://github.com/o10n-x/wordpress-htaccess-editor" data-icon="octicon-star" data-show-count="true" aria-label="Star o10n-x/wordpress-htaccess-editor on GitHub">Star</a></span> on Github.</p>
			
			<hr />

			<h3>WordPress WPO Collection</h3>

			<img src="<?php print O10N_CORE_URI; ?>admin/images/google-lighthouse.png" alt="Google Lighthouse" height="50" border="0">
			
			<p class="about-text" style="min-height:inherit;">This plugin is part of a <a href="https://github.com/o10n-x/" target="_blank">WPO plugin collection</a> that is designed to achieve perfect <a href="https://developers.google.com/web/tools/lighthouse/" target="_blank">Google Lighthouse</a> scores.</p>
			


		</div>
	</div>

</div>