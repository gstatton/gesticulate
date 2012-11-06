<?php
/**
 * Responsive CSS
 *
 * Contains style overrides for screen sizes narrower than specific pixel widths.
 *
 * @package WordPress
 * @subpackage Launch_Effect
 * 
 */
?>

<style type="text/css">

@media screen and (max-width: 780px) {

	body#inner-page {
	<?php if(leimg('lefx_pages_container_bgimg','lefx_pages_container_bgimg_disable', 'pages_options')) { ?>
		background-image:url('<?php echo leimg('lefx_pages_container_bgimg','lefx_pages_container_bgimg_disable', 'pages_options'); ?>'); 
		background-color:transparent !important;
	<?php } else { ?>
		<?php if(ler('lefx_pages_container_bgcolor')) { ?>
		background-color: <?php echo '#' . ler('lefx_pages_container_bgcolor'); ?> !important; 
		background-image: none;
		<?php } ?>
	<?php } ?>		
	}
	
	body#inner-page #supersized-loader,
	body#inner-page #supersized,
	body#inner-page #supersized img { 
		opacity:0; 
	}
	
}
	
<?php if(ler('container_width') == 'large') { ?>

@media screen and (max-width: 740px) {

<?php } else if(ler('container_width') == 'medium') { ?>

@media screen and (max-width: 590px) {
	
<?php } else { ?>
	
@media screen and (max-width: 420px) {
	
<?php } ?>

	body { 
		background-color:<?php echo '#' . ler('container_background_color'); ?> !important;

		<?php if(leimg('background','background_disable', 'launchmodule_options')) { ?>
		background-image:url('<?php echo leimg('background','background_disable', 'launchmodule_options'); ?>'); 
		background-color:transparent !important;
		<?php } else { ?><?php if(ler('container_background_color')) { ?>
		background-color: <?php echo '#' . ler('container_background_color'); ?> !important; <?php } ?><?php } ?>
	}


	/* CONTAINER */
	
	#signup-page-wrapper {
		height:auto;
	}
	
	#signup-page {
		vertical-align: baseline;
	}
		
	#signup,
	#signup.large,
	#signup.medium,
	#signup.small,
	#signup.large .signup-left,
	#signup.large .signup-right {	
		display:table-cell;
		padding:40px !important;
		width: 100% !important;
		margin:0 !important;
		border:none !important;
		box-sizing:border-box;
		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
		-webkit-box-shadow: none; 
		-moz-box-shadow: none;
		box-shadow: none;
	}
	
	#signup.large .signup-left,
	#signup.large .signup-right {
		display:block;
		padding:0 !important;
	}
	
	#signup.large #presignup-content.signup-left,
	#signup.large #success-content.signup-left {
		margin:0 0 30px 0 !important;
	}
	
	#signup.nocf ul#form-layout li.first {
		width:auto;
		max-width:300px;
	}

	#signup-page header {
		overflow:hidden;
	}
	
	<?php if(ler('heading_size') > 5) { ?>
	
	#signup-page header {
		font-size: 0.8em;
	}
	
	<?php } ?>
	
	
	a#reusertip {
		display:inline-block;
		float:none;
		margin-left:10px;
	}
	
	
	/* CONTAINER: MEDIUM */
	
	#signup.medium.hascf #error, 
	#signup.medium .error {
		left:10px;
		right:auto;
		bottom:0px;
	}
	
	#signup.medium.hascf label {
		float:none;
		margin:8px 0;	
		width:auto;
	}
	
	#signup.medium.hascf ul#form-layout,
	#signup.medium.hascf ul#form-layout li {
		border:none;
		text-align:left !important;	
	}
	
	#signup.medium.hascf ul#form-layout li {
		margin:0 0 24px 0;
		padding:0;
	}
	
	#signup.medium.hascf ul#form-layout li.hascf-submit-button {
		padding:0;
	}
	
	#signup.medium.hascf input[type=text], 
	#signup.medium.hascf input[type=email], 
	#signup.medium.hascf textarea,
	#signup.medium.hascf .radio-group,
	#signup.medium.hascf .checkbox-group,
	#signup.medium.hascf select {
		float:none;
	}
	
	#signup.medium.hascf ul#form-layout li.last {
		padding-left:0;	
	}
	
	
	/* CONTAINER: LARGE */
	
	#signup.large .signup-left,
	#signup.large .signup-right {
		float:none !important;
		width:auto !important;
	}
	
	#signup.large .signup-left h2,
	#signup.large .signup-left p,
	#signup.large .signup-left div {
		margin-right:0;
	}
	
	
	/* THEME - LEARN MORE TAB */
	
	#learn-more-tab {
		margin:0px auto;
		width: auto;
		float:none;
	}
	
	a#learn-more {
		width:auto;
		margin-right:0;
		float:none;
	}
	
	
	/* INNER FOOTER */
	
	ul#inner-footer li.inner-footer_icon.facebooklike {	
		float: left;
		display: block;
		width: 100%;
		margin-top: 10px;
		margin-bottom:30px;
	}
	

	/* CREDIT FOOTER */
	
	ul#footer {
		width:100%;
		right:auto;
		left:auto;
		padding:0;
		margin-top:30px; 
	}
	
	ul#footer li {
		padding:2px 40px;
	}

	
	/* SUPERSIZED PLUGIN */
			
	#supersized-loader,
	#supersized,
	#supersized img { 
		opacity:0;
	}
	
	
	/* JQMODAL */
	
	.jqmWindow {
	    margin-left: -160px;
	    width: 240px;
	}
	
}

/* 
	IPHONE4 

*/
@media only screen and (-webkit-min-device-pixel-ratio: 2) {

	a#learn-more,
	#signup-page #signup label,
	#signup input[type=text], 
	#signup input[type=email], 
	#signup textarea,
	#signup select {
		font-size:1.6em !important;
	}
	
	#signup input[type=text], 
	#signup input[type=email], 
	#signup textarea,
	#signup select,
	#signup .radio-group,
	#signup .checkbox-group {
		width:100%;
		max-width:280px;
		min-width:280px;
	}
	
	#email-layout #emailinput input#email {
		width:100% !important;
		max-width:inherit !important;
		min-width:inherit !important;
	}
	
	a#learn-more,
	#signup,
	#signup.large,
	#signup.medium,
	#signup.small,
	#signup.large .signup-left,
	#signup.large .signup-right {	
		padding:20px !important;
	}
	
	#signup.large .signup-left,
	#signup.large .signup-right {
		display:block;
		padding:0 !important;
	}
	
	#signup.large #presignup-content.signup-left,
	#signup.large #success-content.signup-left {
		margin:0 0 30px 0 !important;
	}
	
	ul#footer li {
		padding:2px 20px;
	}

	#signup input#submit-button {
		height:40px;
	}
	
}

</style>