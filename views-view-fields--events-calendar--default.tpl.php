<?php
  dpm($fields);

?>

<div>
  <?php print $fields['title']->content; ?>
  <?php print $fields['field_npf_event_date']->content; ?>
</div>
<div>
  <?php print $fields['field_npf_event_venue_name']->content; ?>
</div>
<div>
  <?php print $fields['field_npf_event_venue_address']->content; ?>
</div>
<div>
  <?php print $fields['field_npf_event_description']->content; ?>
</div>
<div>
  <?php print $fields['field_npf_event_venue_map']->content; ?>

  <img src="https://maps.google.com/maps/api/staticmap?center=<?php print $fields['field_npf_event_venue_map']->content; ?>&zoom=14&size=250x167&maptype=roadmap&sensor=false&language=&markers=color:0xff6600|label:none|<?php print $fields['field_npf_event_venue_map']->content; ?>">
</div>
