<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 */
?>
	</div><!-- .site-content -->
	<footer>
            <h3>השאירו לנו פרטים או פשוט תתקשרו אלינו - 09-7711260<br>פותחים יומן? מתי נפגשים לקפה אצנו?</h3>
            <form id="signup" method="post">
                <input type="hidden" name="action" value="send_to_mailchimp"/>
                <div>
                    <input name="fname" id="fname" type="text" placeholder="שם" />
                </div>
                <div>
                    <input name="phone" id="phone" type="text" placeholder="טלפון"/>
                </div>
                <div>
                    <input name="email" id="email" type="email" placeholder="דוא''ל"/>
                </div>
                <div>
                    <input name="company" id="company" type="text" placeholder="חברה"/>
                </div>
                <div>
                    <textarea name="message" id="textarea" placeholder="תוכן ההודעה"></textarea>
                </div>
                <div id="response"></div>
                <div>
                    <input type="submit" title="Send" value="שלח לדואטון"/>
                </div>
            </form>
	</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>