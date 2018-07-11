<?php
/**
 * The template for displaying the footer.
 *
 * @package QuicoIn
 */

?>






<!---                 Footer Starts Here  -------------------->


    <section class="feedback">
        <div class="wrap">
            <a href="#" id="contactus"></a>
            <h2>Contact&nbsp;us</h2>
            <form id="contact_form" action="/wp-content/themes/icobox/mail-contact.php" method="post">
                <div class="container">
                    <div class="grid-d-6 grid-m-12">
                        <input type="text" name="name" placeholder="Full Name">
                    </div>
                    <div class="grid-d-6 grid-m-12">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="container">
                    <div class="grid-d-6 grid-m-12">
                        <input type="text" name="project" placeholder="Project Name">
                    </div>
                    <div class="grid-d-6 grid-m-12">
                        <input type="text" name="phone" placeholder="Telephone">
                    </div>

                </div>
                <div class="container">
                    <div class="grid-d-12 grid-m-12">
                        <input type="text" name="comment" placeholder="Message">
                    </div>
                </div>
            
                <div class="error-msg"></div>
                <br>
                <input type="hidden" name="lang" value="en">
                <div class="cPos">
                    <button type="submit">Send</button>
                </div>
                <br>
                <div style="text-align:center;">
                    <a href="https://icos.icobox.io/projects/create" style="color: white;text-decoration: none;">
                        Or apply for basic 35 BTC package for free!</a></div>


            </form>
        </div>
    </section>



    <footer>
        Copyright quico.in &copy; 2017
    </footer>
</div>


<script>
    function refreshCaptcha() {
        $("#captcha_code").attr('src','/captcha_code.php');
    }
    function refreshCaptcha2() {
        $("#captcha_code2").attr('src','/captcha_code2.php');
    }
</script>

<!--out-wrap-->

<div class="modal-box contact-modal">
    <div class="modal-boy">
        <a href="#" class="close-modal"></a>
        <div class="title">Contact us</div>
        <form id="app_form" action="/wp-content/themes/icobox/mail-app.php" method="post">
            <div class="container">
                <div class="grid-d-6 grid-t-6 grid-m-12">
                    <input type="text" name="name" placeholder="Full Name">
                </div>
                <div class="grid-d-6 grid-t-6 grid-m-12">
                    <input type="text" name="email" placeholder="Email">
                </div>
            </div>
            <div class="container">
                <div class="grid-d-6 grid-t-6 grid-m-12">
                    <input type="text" name="project" placeholder="Project Name">
                </div>
                <div class="grid-d-6 grid-t-6 grid-m-12">
                    <input type="text" name="phone" placeholder="Telephone">
                </div>
            </div>
            <div class="container">
                <div class="grid-d-12 grid-t-12 grid-m-12">
                    <input type="text" name="comment" placeholder="Message">
                </div>
            </div>

            <div class="error-msg"></div>
            <br>
            <div class="cPos outer-btn">
                <button type="submit" class="gradient-btn">Send</button>
            </div>
        </form>
    </div>
</div>

<div class="modal-box confirm-modal">
    <div class="modal-boy">
        <img src="<?php echo bloginfo('template_directory'); ?>/img/ico_confirm.svg" alt="">
        <p>Thanks!<br>Your message has been sent</p>
    </div>
</div>

<div class="modal-box confirm-modal2">
    <div class="modal-boy">
        <img src="<?php echo bloginfo('template_directory'); ?>/img/ico_confirm.svg" alt="">
        <p>Thanks!<br>Your application has been sent</p>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){

        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });

        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });

    });
</script>
<a href="#" class="scrollup">&#1053;&#1072;&#1074;&#1077;&#1088;&#1093;</a>



<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/832600383/?guid=ON&amp;script=0"/>
</div>
</noscript>
<?php wp_footer(); ?>
</body>
</html>
