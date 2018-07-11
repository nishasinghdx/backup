<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>


<!-- Footer Starts -->

<footer role="contentinfo">

    <div class="container-fluid page">
        <div class="row footer">
            <div class="col-md-3 col-lg-2 left hidden-xs hidden-sm">
                <ul>
                    <li><a href="/students/" aria-describedby="site_heading">Students</a></li>
                    <li><a href="/faculty/" aria-describedby="site_heading">Faculty</a></li>
                    <li><a href="/staff/" aria-describedby="site_heading">Staff</a></li>
                    <li><a href="https://alumniandfriends.uchicago.edu/" aria-describedby="site_heading">Alumni</a></li>
                    <li><a href="https://parents.uchicago.edu/" aria-describedby="site_heading">Parents</a></li>
                    <li><a href="https://visit.uchicago.edu/" aria-describedby="site_heading">Visit</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-lg-2 left hidden-xs hidden-sm">
                <ul>
                    <li><a href="https://directory.uchicago.edu/" aria-describedby="site_heading">Directory</a></li>
                    <li><a href="https://maps.uchicago.edu/" aria-describedby="site_heading">Maps</a></li>
                    <li><a href="/quicklinks/" aria-describedby="site_heading">Quick Links</a></li>
                    <li><a href="/notices/" aria-describedby="site_heading">Campus Notices</a></li>
                    <li><a href="https://my.uchicago.edu/" aria-describedby="site_heading">My.UChicago</a></li>
                    <li><a href="https://www.kintera.org/site/c.8gKMJYMvF9LWG/b.9202493/k.913F/Donation_Form__UChicago_Campaign_Main/apps/ka/sd/donorcustom.asp" aria-describedby="site_heading">Make a Gift</a></li>
                </ul>
            </div>

            <div class="col-sm-12 col-md-2 col-lg-4 shield">
                <a href="/">The University of Chicago</a>
            </div>

            <div class="col-xs-6 col-md-2 col-lg-2 right phone">
                <ul>
                    <li><a href="/jobs/" aria-describedby="site_heading">Job Opportunities</a></li>
                    <li><a href="https://safety-security.uchicago.edu/emergency_management/" aria-describedby="site_heading">Emergency Info</a></li>
                    <li><a href="https://portal.office.com/" aria-describedby="site_heading">Office365</a></li>
                    <li><a href="https://csl.uchicago.edu/get-help/title-ix" aria-describedby="site_heading">Title IX</a></li>
                    <li><a href="/about/non_discrimination_statement/" aria-describedby="site_heading">Non-discrimination Statement</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-2 right">
                <p class="vcard">
                    <span class="url fn org">The University of Chicago</span>
                    <br><span class="adr"><span class="street-address">Edward H. Levi Hall<br>5801 South Ellis Avenue</span>
                    <br><span class="locality">Chicago</span>, <span class="region">Illinois</span> <span class="postal-code">60637</span></span>
                    <br><a class="tel" href="tel:1-773-702-1234">773.702.1234</a>
                    <br>
                    <a href="/contact/" aria-describedby="site_heading">Contact Us</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul id="social">
                    <li><a href="https://www.facebook.com/uchicago" title="Facebook" class="ss-social ss-icon">Facebook</a></li>
                    <li><a href="https://twitter.com/UChicago" title="Twitter" class="ss-social ss-icon">Twitter</a></li>
                    <li><a href="https://www.youtube.com/user/UChicago" title="YouTube" class="ss-social ss-icon">YouTube</a></li>
                    <li><a href="https://itunes.apple.com/us/institution/the-university-of-chicago/id391163685" title="iTunes U" class="ss-social ss-icon">Apple</a></li>
                    <li id="fut"><a href="http://www.futurity.org/university/university-of-chicago/" title="Futurity">Futurity</a></li>
                    <li><a href="https://instagram.com/uchicago" title="Instagram" class="ss-social ss-icon">Instagram</a></li>
                    <li id="yk"><a href="http://i.youku.com/UChicago" title="Youku">Youku</a></li>
                </ul>
                <p class="copyright">&#169;2018 The University of Chicago</p>
            </div>
        </div>
    </div>
</footer>

<script src="<?php bloginfo('template_url'); ?>/assets/js/modernizr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    window.jQuery || document.write('<script src="/js/libs/jquery/3.3.1/jquery.min.js"><\/script><script src="/js/libs/jqueryui/1.12.1/jquery-ui.min.js"><\/script>');
</script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/core.min.js"></script>
<!--[if lte IE 7]><script src="/js/ie_fixes/update_png.js"></script><script src="/js/libs/respond.min.js"></script><![endif]-->
<!--[if lte IE 8]><script src="/js/libs/selectivizr.js"></script><![endif]-->
<!--[if lte IE 9]><script src="/js/ie_fixes/symbolset.js"></script><![endif]-->
<!-- Google Analytics -->
<?php wp_footer(); ?>
</body>
</html>
