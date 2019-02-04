<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 */

    if(is_mobile()) {
        $footer_text = "התקשרו אלינו - <a href=\"tel:09-7711260\">09-7711260</a>";
    } else {
        $footer_text = "השאירו לנו פרטים או פשוט תתקשרו אלינו - 09-7711260<br>פותחים יומן? מתי נפגשים לקפה אצנו?";
    }
?>
	</div><!-- .site-content -->
	<footer id="bottom">
            <h3><?php echo $footer_text; ?></h3>
            <form id="signup" method="post">
                <input type="hidden" name="action" value="send_to_mailchimp"/>
                <div>
                    <input name="fname" id="fname" type="text" placeholder="שם" required="required"/>
                </div>
                <div>
                    <input name="phone" id="phone" type="text" placeholder="טלפון"/>
                </div>
                <div>
                    <input name="email" id="email" type="email" placeholder="דוא''ל" required="required"/>
                </div>
                <div>
                    <input name="company" id="company" type="text" placeholder="חברה"/>
                </div>
                <div class="text">
                    <textarea name="message" id="textarea" placeholder="תוכן ההודעה"></textarea>
                </div>
                <div class="image">
                </div>

                <div class="submit">
                    <article class="lds-ring"><article></article><article></article><article></article><article></article></article>
                    <input type="submit" title="Send" value="שלח לדואטון!"/>
                </div>
                <span id="response"></span>
            </form>

            <?php include_once ('images/man_lineart.svg');?>
            <a href="#top" class="up">
                <img src="<?php echo get_stylesheet_directory_uri().'/images/icon_errow.svg'; ?>" alt="arrow"/>
            </a>
            <div class="copy">
                <span>עיצוב דואטון</span>
                <span>כל הזכויות שמורות לסטודיו דואטון Duaton&copy; </span>
            </div>
	</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>