<?php if ( $_POST['publisher_desk_hidden'] == 'yes' ): ?>

  <?php $id = $_POST['publisher_desk_id']; ?>
  <?php update_option( 'publisher_desk_id', $id ); ?>

  <?php $bidderId = $_POST['publisher_desk_bidder_id']; ?>
  <?php update_option( 'publisher_desk_bidder_id', $bidderId ); ?>

  <?php $contextual = $_POST['publisher_desk_contextual']; ?>
  <?php update_option( 'publisher_desk_contextual', $contextual ); ?>

  <?php $test = $_POST['publisher_desk_test']; ?>
  <?php update_option( 'publisher_desk_test', $test ); ?>

  <?php $adblockOverlay = $_POST['publisher_desk_adblock_overlay']; ?>
  <?php update_option( 'publisher_desk_adblock_overlay', $adblockOverlay ); ?>

  <?php $framebusters = $_POST['publisher_desk_framebusters']; ?>
  <?php update_option( 'publisher_desk_framebusters', $framebusters ); ?>

  <?php $attr = $_POST['publisher_desk_script_attributes']; ?>
  <?php update_option( 'publisher_desk_script_attributes', $attr ); ?>

  <div class="updated"><p><strong><?php _e( 'Settings updated.' ); ?></strong></p></div>

<?php else: ?>

  <?php $id = get_option( 'publisher_desk_id' ); ?>

  <?php $bidderId = get_option( 'publisher_desk_bidder_id' ); ?>

  <?php $contextual = get_option( 'publisher_desk_contextual' ); ?>

  <?php $adblockOverlay = get_option( 'publisher_desk_adblock_overlay' ); ?>

  <?php $test = get_option( 'publisher_desk_test' ); ?>
  
  <?php $framebusters = get_option( 'publisher_desk_framebusters' ); ?>

  <?php $attr = get_option( 'publisher_desk_script_attributes' ); ?>

<?php endif; ?>

<div class="wrap">
  <?php screen_icon(); ?>
  <?php echo '<h2>' . __( 'The Publisher Desk', 'publisher_desk_dom' ) . '</h2>'; ?>
  <form name="publisher_desk_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI'] ); ?>">
    <input type="hidden" name="publisher_desk_hidden" value="yes">
    <table class="form-table">
      <tr valign="top">
        <th scope="row"><label><?php _e( 'Publisher ID' ); ?></label></th>
        <td>
          <input type="text" name="publisher_desk_id" value="<?php echo $id; ?>" size="50">
          <p class="description"><?php _e( 'Your account manager will provide this value.' ); ?></p>
        </td>
      </tr>
      <tr valign="top">
        <th scope="row"><label><?php _e( 'Bidder ID (Optional)' ); ?></label></th>
        <td>
          <input type="text" name="publisher_desk_bidder_id" value="<?php echo $bidderId; ?>" size="50">
          <p class="description"><?php _e( 'Your account manager will provide this value.' ); ?></p>
        </td>
      </tr>
      <tr valign="top">
        <th scope="row"><label><?php _e( 'Third-Party Framebusters' ); ?></label></th>
        <td>
          <?php if ( $framebusters == 1 ): ?>
            <input type="checkbox" name="publisher_desk_framebusters" value="1" checked="checked">
          <?php else: ?>
            <input type="checkbox" name="publisher_desk_framebusters" value="1">
          <?php endif; ?>
          <?php _e( 'Enable third-party framebusters' ); ?>
        </td>
      </tr>
      <tr valign="top">
        <th scope="row"><label><?php _e( 'Contextual Ads' ); ?></label></th>
        <td>
          <?php if ( $contextual == 1 ): ?>
            <input type="checkbox" name="publisher_desk_contextual" value="1" checked="checked">
          <?php else: ?>
            <input type="checkbox" name="publisher_desk_contextual" value="1">
          <?php endif; ?>
          <?php _e( 'Insert contextual ads below posts' ); ?>
        </td>
      </tr>
      <tr valign="top">
        <th scope="row"><label><?php _e( 'Ads Blocked Overlay' ); ?></label></th>
        <td>
          <?php if ( $adblockOverlay == 1 ): ?>
            <input type="checkbox" name="publisher_desk_adblock_overlay" value="1" checked="checked">
          <?php else: ?>
            <input type="checkbox" name="publisher_desk_adblock_overlay" value="1">
          <?php endif; ?>
          <?php _e( 'Block viewing site if ads blocked by client. <span style="color: red">! This will render your site unviewable to uncompliant visitors !</span>' ); ?>
        </td>
      </tr>
      <tr valign="top">
        <th scope="row"><label><?php _e( 'Test Site' ); ?></label></th>
        <td>
          <?php if ( $test == 1 ): ?>
            <input type="checkbox" name="publisher_desk_test" value="1" checked="checked">
          <?php else: ?>
            <input type="checkbox" name="publisher_desk_test" value="1">
          <?php endif; ?>
          <?php _e( 'Is this a test site?' ); ?>
        </td>
      </tr>
      <tr valign="top">
        <th scope="row"><label><?php _e( 'Script Tag Attributes' ); ?></label></th>
        <td>
          <input type="text" name="publisher_desk_script_attributes" value="<?php echo $attr; ?>" size="50">
          <p class="description"><?php _e( 'Append any additional attributes to our &lt;script&gt; tags.' ); ?></p>
          <p class="description"><?php _e( 'Format: key1=value1&amp;key2=value2' ); ?></p>
        </td>
      </tr>
    </table>
    <?php submit_button(); ?>
  </form>
</div>
