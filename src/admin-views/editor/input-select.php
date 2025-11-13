<?php
/**
 * Select input for Additional Ticket Field type "select".
 *
 * @var WP_Post $post
 * @var array  $field_data  The field data.
 * @var string $field_id    The field ID.
 * @var string $field_value The field value.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Optionen erwarten wir als value => label.
$options = [];
if ( ! empty( $field_data['options'] ) && is_array( $field_data['options'] ) ) {
	$options = $field_data['options'];
}
?>
<div class="tribe-ext-tickets-af-field tribe-ext-tickets-af-field--select">
	<?php if ( ! empty( $field_data['label'] ) ) : ?>
		<label
			for="<?php echo esc_attr( $field_id ); ?>"
			class="ticket_form_label ticket_form_left"
		>
			<?php echo esc_html( $field_data['label'] ); ?>
		</label>
	<?php endif; ?>

	<select
		id="<?php echo esc_attr( $field_id ); ?>"
		name="<?php echo esc_attr( $field_id ); ?>"
		class="ticket_field ticket_form_right"
	>
		<?php
		// Optional: leere Option vorne.
		if ( ! empty( $field_data['placeholder'] ) ) :
			?>
			<option value="">
				<?php echo esc_html( $field_data['placeholder'] ); ?>
			</option>
			<?php
		endif;

		foreach ( $options as $value => $label ) :
			$value = (string) $value;
			?>
			<option
				value="<?php echo esc_attr( $value ); ?>"
				<?php selected( $field_value, $value ); ?>
			>
				<?php echo esc_html( $label ); ?>
			</option>
		<?php endforeach; ?>
	</select>

	<?php if ( ! empty( $field_data['description'] ) ) : ?>
		<p class="description">
			<?php echo esc_html( $field_data['description'] ); ?>
		</p>
	<?php endif; ?>
</div>
