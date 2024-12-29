<?php

if ( ! isset( $appointment ) ) {
	return;
}

$date = $appointment['date'];
$title = $appointment['title'];
$timeslot = $appointment['timeslot'];
$timeslot_parts = explode( '-', $timeslot );
$timestamp = strtotime($date.' '.$timeslot_parts[0]);
$this_timeslot_timestamp = ( isset($this_timeslot_timestamp) ? $this_timeslot_timestamp : false );

$appt_date_time_before = apply_filters('booked_fe_appt_form_date_time_before', '', $this_timeslot_timestamp, $timeslot, $calendar_id );
$appt_date_time_after = apply_filters( 'booked_fe_appt_form_date_time_after', '', $this_timeslot_timestamp, $timeslot, $calendar_id );

$date_format = get_option('date_format');
$time_format = get_option('time_format');

$only_titles = get_option('booked_show_only_titles', false);
$hide_end_titles = get_option('booked_hide_end_times');
$all_day_text = esc_html__( 'طوال اليوم', 'booked' );

if ( $only_titles && ! $title || ! $only_titles ) {
    if ( $timeslot_parts[0] === '0000' && $timeslot_parts[1] === '2400' ) {
        $timeslotText = $all_day_text;
    } else {
        $start_time = date_i18n( 'g:i', strtotime( $timeslot_parts[0] ) ); // صيغة الوقت بدون AM/PM
        $end_time = date_i18n( 'g:i', strtotime( $timeslot_parts[1] ) ); // صيغة الوقت بدون AM/PM

        $start_period = ( date( 'H', strtotime( $timeslot_parts[0] ) ) < 12 ) ? 'صباحًا' : 'مساءً';
        $end_period = ( date( 'H', strtotime( $timeslot_parts[1] ) ) < 12 ) ? 'صباحًا' : 'مساءً';

        $timeslotText = $start_time . ' ' . $start_period;

        if ( ! $hide_end_titles ) {
            $timeslotText .= ' &ndash; ' . $end_time . ' ' . $end_period;
        }
    }
}


if (!empty($calendar_id)): $calendar_term = get_term_by('id',$calendar_id,'booked_custom_calendars'); $calendar_name = '<p class="calendar-name">' . $calendar_term->name . '</p>'; else: $calendar_name = false; endif;
$appt_title = $title ? '<p class="appointment-title">' . $title . '</p>' : '';
$appt_timeslot = $timeslotText ? $timeslotText : '';
$appt_date_name = date_i18n( $date_format, strtotime( $date ) );

?><div class="booked-appointment-details" data-appt-key="<?php echo $appointment_key; ?>"><?php

	echo $appt_date_time_before;
	echo $appt_title;
	echo $calendar_name;

	if ( $appt_timeslot == $all_day_text ):
		?><p class="appointment-info"><i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;&nbsp;<?php echo sprintf( esc_html__( '%s في %s','booked' ), $appt_timeslot, $appt_date_name ); ?></p><?php
	else:
		if ( get_option('booked_show_only_titles') && $appt_title ):
			?><p class="appointment-info"><i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;&nbsp;<?php echo $appt_date_name; ?></p><?php
		else:
			?><p class="appointment-info"><i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;&nbsp;<?php echo sprintf( esc_html__( '%s عند %s','booked' ), $appt_date_name, $appt_timeslot ); ?></p><?php
		endif;
	endif;


	echo $appt_date_time_after;

	?><input type="hidden" name="appoinment[]" value="<?php echo $appointment_counter; ?>" />
	<input type="hidden" name="appoinment_index[]" value="<?php echo $appointment_key; ?>" />
	<input type="hidden" name="calendar_id[]" value="<?php echo intval($calendar_id); ?>" />
	<input type="hidden" name="title[]" value="<?php echo esc_attr( $title ); ?>" />
	<input type="hidden" name="date[]" value="<?php echo date_i18n( 'Y-m-j', strtotime( $date ) ); ?>" />
	<input type="hidden" name="timestamp[]" value="<?php echo $timestamp; ?>" />
	<input type="hidden" name="timeslot[]" value="<?php echo $timeslot; ?>" />

</div>
