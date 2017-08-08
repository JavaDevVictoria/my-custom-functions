<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab
 *
 * @since 4.5
 */
?>
    <!-- SIDEBAR -->
    <div class="inner-sidebar">
        <div id="side-sortables" class="meta-box-sortabless ui-sortable">

            <div class="postbox about">
                <h3 class="title"><?php _e( 'About', $text ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'This plugin allows you to easily and safely add your custom functions (PHP code) directly out of your WordPress Admin area, without the need to have an external editor.', $text ); ?></p>
                </div>
            </div>

            <div class="postbox banner">
                <h3 class="title"><?php _e( 'Upgrade', $text ); ?></h3>
                <div class="inside">
                    <a href="https://www.spacexchimp.com/plugins/my-custom-functions-pro.html" target="_blank">
                        <img src="https://www.spacexchimp.com/assets/dynamic-content/images/plugin-upgrade.png" alt="PRO">
                    </a>
                </div>
            </div>

            <div class="postbox support">
                <h3 class="title"><?php _e( 'Support', $text ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', $text ); ?></p>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', $text ); ?></a>
                    <p><?php _e( 'Thanks for your support!', $text ); ?></p>
                </div>
            </div>

            <div class="postbox help">
                <h3 class="title"><?php _e( 'Help', $text ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'If you have a question, please read the information in the FAQ section.', $text ); ?></p>
                </div>
            </div>

            <div class="include-banner"></div>

        </div>
    </div>
    <!-- END-SIDEBAR -->

    <!-- FORM -->
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( MCFUNC_SETTINGS . '_settings_group' ); ?>

                    <?php
                        // Get options from the database
                        $options = get_option( MCFUNC_SETTINGS . '_settings' );

                        // Set default value if option is empty
                        $content = !empty( $options['anarcho_cfunctions-content'] ) ? $options['anarcho_cfunctions-content'] : '/* Enter your custom functions here */';
                        $enable = ( !empty( $options['enable'] ) && $options['enable'] == "on" ) ? 'checked' : ' ';
                    ?>

                    <div class="postbox">
                        <h3 class="title">
                            <label for="anarcho_cfunctions_settings[anarcho_cfunctions-content]" ><?php _e( 'Functions (PHP code)', $text ); ?></label>
                            <div class="trigger">
                                <input type="checkbox" name="anarcho_cfunctions_settings[enable]" id="anarcho_cfunctions_settings[enable]" <?php echo $enable; ?> >
                                <label for="anarcho_cfunctions_settings[enable]"></label>
                            </div>
                        </h3>
                        <div class="inside">
                            <textarea name="anarcho_cfunctions_settings[anarcho_cfunctions-content]" id="anarcho_cfunctions_settings[anarcho_cfunctions-content]" ><?php echo htmlentities( $content ); ?></textarea>
                        </div>
                    </div>

                    <?php submit_button( __( 'Save changes', $text ), 'primary', 'submit', true ); ?>

                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', $text ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', $text ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', $text ); ?></a>
                            <p><?php _e( 'Thanks for your support!', $text ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- END-FORM -->
<?php