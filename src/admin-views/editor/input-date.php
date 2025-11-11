<?php
/**
 * Date input for Additional Ticket Field type "date".
 *
 * @var WP_Post $post
 * @var array   $field_data  The field data.
 * @var string  $field_id    The field ID.
 * @var string  $field_value The field value.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

?>
<div class="tribe-ext-tickets-af-field tribe-ext-tickets-af-field--date">
	<?php if ( ! empty( $field_data['label'] ) ) : ?>
		<label for="<?php echo esc_attr( $field_id ); ?> class="ticket_form_label ticket_form_left"">
		<?php echo esc_html( $field_data['label'] ); ?>
		</label>
	<?php endif; ?>

	<input
		id="<?php echo esc_attr( $field_id ); ?>"
		class="regular-text ticket_field ticket_form_right"
		type="date"
		name="<?php echo esc_attr( $field_id ); ?>"
		value="<?php echo esc_attr( $field_value ); ?>"
		placeholder="YYYY-MM-DD"
	/>

	<?php if ( ! empty( $field_data['description'] ) ) : ?>
		<p class="description"><?php echo esc_html( $field_data['description'] ); ?></p>
	<?php endif; ?>
</div>
