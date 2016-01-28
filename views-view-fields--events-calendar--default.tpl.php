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
</div>
