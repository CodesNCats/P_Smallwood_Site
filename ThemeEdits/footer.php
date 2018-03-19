<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
    
    <style>
	/*Center main menu, left align drop downs*/
			nav.main-navigation div.nav-menu ul:first-child{
				text-align:center;
			}
			nav.main-navigation div.nav-menu ul li{
				text-align:left;
			}
			ul.children li{
				text-align:left;
			}
			
			#colophon{
				margin:0px 0px 50px 0px;
			}
			
/*Social Media button Css*/
/* Psmallwood Green = #32450 */
			.socialM {
				float: right;
				height: 40px;
				width: 40px;
				margin-left:25px;
				margin-top:-5px;
				background-color: grey;
				background-size: 40px 40px;
				display: block;
				cursor: pointer;
				-webkit-transition: background-color .5s;
    			transition: background-color .5s;
			}
			.socialM:hover {
				background-color:#32450E;
			}
			@media only screen and (max-device-width: 480px){
				.socialM {
					clear:left;
					display: inline-block;
					float:none;
					text-align:center;
				}
			}
			
/*Mailing list Css*/
			.es_lablebox{
				display:none;
				clear:left;
				width:45px;
			}
			.mail_labelbox{
				clear:left;
				width:200px; 
				display:block; 
				margin-left:10px; 
				text-align:center;
			}
			.es_shortcode_form div{
				float:left;
			}
			
			.es_textbox{
				margin-left:10px;
			}
			.es_shortcode_form_email{
				display:block;
			}
			.es_shortcode_form_name{
				display:block;
			}
			
			.es_button{
				margin-top:-10px;
				margin-left:10px;
				
			}
			input#es_txt_button_pg{
				background:gray;
				border-radius:0px;
				box-shadow:0px 0px 0px;
				color:white;
				border: none;
				outline: none;
				margin-top:2px;
				-webkit-transition: background-color .5s;
    			transition: background-color .5s;
			}
			input#es_txt_button_pg:hover{
					background-color:#32450e;
			}
			
			@media only screen and (max-device-width: 480px){
				div.site-info{
					text-align:center;
				}
				div.site-info div{
					text-align:center;
				}
				div.es_lablebox{
					display:none !important;
				}
				.es_shortcode_form_email{
					display:none !important;
				}
				.mail_labelbox{
				display:inline-block; 
				margin-left:0px; 
				margin-bottom:10px;
			}
				.es_shortcode_form div{
					float:none;
					display:inline-block;
					text-align:center;
				}
			
				.es_textbox{
					margin-left:10px;
				}
				.es_shortcode_form_email{
					display:inline-block;
				}
				.es_shortcode_form_name{
					display:inline-block;
				}
				
				.es_button{
					display:inline-block;
					text-align:center;	
				}
				input#es_txt_button_pg{
					background:gray;
					border-radius:0px;
					box-shadow:0px 0px 0px;
					color:white;
					border: none;
					outline: none;
					margin-top:2px;
					margin-bottom:20px;
					display:inline-block;
					text-align:center;
					-webkit-transition: background-color .5s;
    				transition: background-color .5s;
				}
				input#es_txt_button_pg:hover{
					background-color:#32450e;
				}
			}
			</style>
            
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
            
            <div class="mail_labelbox">MAILING LIST SIGN UP</div>
            
        	<?php es_subbox($namefield = "NO", $desc = "", $group = "Public"); ?>
            
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a style="display:none;" href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
            
            <a class="socialM" style="background-image:url(http://psmallwood.com/customImgs/mailClear.png)"></a>
            
            <a class="socialM" style="background-image:url(http://psmallwood.com/customImgs/indeedClear.png)"></a>
            
            <a class="socialM" style="background-image:url(http://psmallwood.com/customImgs/igClear.png)"></a>
            
            <a class="socialM" style="background-image:url(http://psmallwood.com/customImgs/fbClear.png)"></a>
            
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

	<script>
	document.getElementById("es_txt_email_pg").setAttribute("placeholder", "Enter Your Email Address");
	</script>

<?php wp_footer(); ?>
</body>
</html>
