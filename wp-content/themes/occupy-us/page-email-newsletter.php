<?php
/**
 * The template for displaying the newsletter
 *
 * Template Name: E-mail newsletter page 
 * Description: Page template for the e-newsletter
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: Jan 6, 2013
 */
$page_date  =  get_the_modified_time('Y-m-d');
$page_title = strtolower( get_the_title() );
$page_slug =  preg_replace('/\W+/', '-', $page_title ); 
while ( have_posts() ) : the_post();
     $page_intro =  get_the_content();
endwhile; // end of the loop.
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php echo get_the_title(); ?></title>
        <style type="text/css">
            /* Based on The MailChimp Reset INLINE: Yes. */  
            /* Client-specific Styles */
            #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
            body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;} 
            /* Prevent Webkit and Windows Mobile platforms from changing default font sizes.*/ 
            .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */  
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
            /* Forces Hotmail to display normal line spacing.  More on that: http://www.emailonacid.com/forum/viewthread/43/ */ 
            #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
            /* End reset */

            /* Some sensible defaults for images
            Bring inline: Yes. */
            img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;} 
            a img {border:none;} 
            .image_fix {display:block;}

            /* Yahoo paragraph fix
            Bring inline: Yes. */
            p {margin: 1em 0;}

            /* Hotmail header color reset
            Bring inline: Yes. */
            h1, h2, h3, h4, h5, h6 {color: black !important;}

            h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: #2e3e68 !important;}

            h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {
                color: red !important; /* Preferably not the same color as the normal header link color.  There is limited support for psuedo classes in email clients, this was added just for good measure. */
            }

            h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
                color: #2e3e68 !important; /* Preferably not the same color as the normal header link color. There is limited support for psuedo classes in email clients, this was added just for good measure. */
            }

            /* Outlook 07, 10 Padding issue fix
            Bring inline: No.*/
            table td {border-collapse: collapse;}

            /* Remove spacing around Outlook 07, 10 tables
            Bring inline: Yes */
            table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

            /* Styling your links has become much simpler with the new Yahoo.  In fact, it falls in line with the main credo of styling in email and make sure to bring your styles inline.  Your link colors will be uniform across clients when brought inline.
            Bring inline: Yes. */
            a { 
                color: #902e1d;
                text-decoration: none;
            }


            /***************************************************
            ****************************************************
            MOBILE TARGETING
            ****************************************************
            ***************************************************/
            @media only screen and (max-device-width: 480px) {
                /* Part one of controlling phone number linking for mobile. */
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: blue; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }

                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: orange !important;
                    pointer-events: auto;
                    cursor: default;
                }
                p { font-size: 120%; }
            }

            /* More Specific Targeting */

            @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
                /* You guessed it, ipad (tablets, smaller screens, etc) */
                /* repeating for the ipad */
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: blue; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }

                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: orange !important;
                    pointer-events: auto;
                    cursor: default;
                }
            }

            @media only screen and (-webkit-min-device-pixel-ratio: 2) {
                /* Put your iPhone 4g styles in here */ 
            }

            /* Android targeting */
            @media only screen and (-webkit-device-pixel-ratio:.75){
                /* Put CSS for low density (ldpi) Android layouts in here */
            }
            @media only screen and (-webkit-device-pixel-ratio:1){
                /* Put CSS for medium density (mdpi) Android layouts in here */
            }
            @media only screen and (-webkit-device-pixel-ratio:1.5){
                /* Put CSS for high density (hdpi) Android layouts in here */
            }
            /* end Android targeting */

            /* Specific styles */
            h1 { 
                font-family: Arial, Helvetica, sans-serif;
                line-height: 1em;
            }
            p {  
                font-family: Arial, Helvetica, sans-serif;
                line-height: 1.3em;
            }
            p.meta {
                font-size: 90%;
                font-style: italic;
            }

        </style>

        
           

        

        
    </head>
    <body style="width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0; background-color: #ececec;" bgcolor="#ececec">
        
        <table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" style="width: 100% !important; line-height: 100% !important; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;">
            <tr>
                <td valign="top" style="border-collapse: collapse;"> 
                    
                    <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                        <tr>
                            <td valign="top" style="border-collapse: collapse;">
                                <center><p style="color: rgb(150,150,150); font-size: 120%; font-family: Arial, Helvetica, sans-serif; line-height: 1.3em; margin-top: 1em; margin-right: 0; margin-bottom: 1em; margin-left: 0;"><small>You are receiving this e-mail because you subscribed to receive Occupy America.</small></p></center>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" style="border-collapse: collapse;">
                                <img src="http://occupy-us.org/emails/logo_with_text.png" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" /> 
                                <hr style="width: 80%; border-top-color: #ccc; border-top-width: 1px; border-top-style: solid;" />
<p class="intro" style="">
<?php echo $page_intro ?>
</p>
                            </td>
                        </tr>
                        
<?php $zone_query = z_get_zone_query( 'email-newsletter-features' );
if ( $zone_query->have_posts() ) :
    while ( $zone_query->have_posts() ) :
        $zone_query->the_post();
        $post_id   = get_the_ID();
?>
                        <tr>
                            <td valign="top" style="border-collapse: collapse;">
                                <div class="image_crop" style="width: 600px; overflow: hidden;">

<?php 
 if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'large');
?>
    <img src="<?php echo $large_image_url[0] ?>" class="image_fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;" /></div>
<?php  
 }
?>
                                <table class="post" width="600" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tr>
                                        <td width="10" style="border-collapse: collapse;">&nbsp;</td>
                                        <td width="580" style="border-collapse: collapse;">
                                        <h1 style="color: black !important; font-family: Arial, Helvetica, sans-serif; line-height: 1em;"><a href="http://occupy-us.org/issue-no-2/issue-two-student-power?utm_source=email-<?php echo $page_date ?>&amp;utm_medium=email&amp;utm_campaign=<?php echo $page_slug ?>" style="color: #2e3e68 !important; text-decoration: none;">
<?php echo get_the_title() ?></a></h1>
                                                    <p style="font-size: 120%; font-family: Arial, Helvetica, sans-serif; line-height: 1.3em; margin-top: 1em; margin-right: 0; margin-bottom: 1em; margin-left: 0;">
<?php echo get_the_excerpt(); ?>
</p>
                                                                                   </td> 
                                        <td width="10" style="border-collapse: collapse;">&nbsp;</td>
                                    </tr>
                                </table>
                                <hr style="width: 50%; border-top-color: #ccc; border-top-width: 1px; border-top-style: solid;" />
                            </td>
                        </tr>
<?php 
    endwhile;
endif;
wp_reset_query();
?>
<!-- footer -->
                        <tr>
                            <td valign="top" style="color: white; font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; padding-top: 20px; padding-right: 20px; padding-bottom: 20px; padding-left: 20px; background-color: #2e3e68;" bgcolor="#2e3e68"><small>
                                    <p style="font-size: 120%; font-family: Arial, Helvetica, sans-serif; line-height: 1.3em; margin-top: 1em; margin-right: 0; margin-bottom: 1em; margin-left: 0;">All views are those of their authors, and do not represent the views of Occupy America.</p>
                                    <p style="font-size: 120%; font-family: Arial, Helvetica, sans-serif; line-height: 1.3em; margin-top: 1em; margin-right: 0; margin-bottom: 1em; margin-left: 0;"><i>Occupy America</i>
                                    <br />
                                    <a style="color: white; text-decoration: none;" href="http://occupy-us.org">www.occupy-us.org</a></p>
                                    <p style="font-size: 120%; font-family: Arial, Helvetica, sans-serif; line-height: 1.3em; margin-top: 1em; margin-right: 0; margin-bottom: 1em; margin-left: 0;"><a style="color: white; text-decoration: none;" href="https://www.facebook.com/occupypaper">Find us on Facebook</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a style="color: white; text-decoration: none;" href="http://twitter.com/occupy_paper">Twitter</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a style="color: white; text-decoration: none;" href="%%FTAF%%">Forward this e-mail to a friend</a></p>
                                    <p style="font-size: 120%; font-family: Arial, Helvetica, sans-serif; line-height: 1.3em; margin-top: 1em; margin-right: 0; margin-bottom: 1em; margin-left: 0;"><a style="color: white; text-decoration: none;" href="http://occupy-us.org/subscribe">Subscribe to receive updates from Occupy America</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a style="color: white; text-decoration: none;" href="%%UNSUB_HREF%%">Unsubscribe</a></p>
                                </small>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>  
        
    
<style type="text/css">
body { width: 100% !important; -webkit-text-size-adjust: 100% !important; -ms-text-size-adjust: 100% !important; margin: 0 !important; padding: 0 !important; }
.ExternalClass { width: 100% !important; }
.ExternalClass { line-height: 100% !important; }
#backgroundTable { margin: 0 !important; padding: 0 !important; width: 100% !important; line-height: 100% !important; }
img { outline: none !important; text-decoration: none !important; -ms-interpolation-mode: bicubic !important; }
</style>
</body>
</html>
