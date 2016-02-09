<?php
  dpm($fields);

  $type = str_replace(" ", "-", $fields['field_npf_event_type']->content);
  $type = strtolower(str_replace(array("<span>","</span>"),"",$type));

?>

<div class="calendar-desktop">
  <a target = "blank" href ="<?php print str_replace(array("<div>", "</div>"),"", $fields['field_npf_event_url']->content); ?>">
    <div class="event-container">

      <div class="event-left">
        <img src="/sites/default/files/calendar/<?php print $type ?>.jpg" alt="<?php print str_replace(array("<div>", "</div>"),"", $fields['field_npf_event_type']->content); ?>">
      </div>

      <div class="event-middle">
      <h2><strong><?php print $fields['title']->content; ?></strong></h2>
        <h3><?php print $fields['field_npf_event_date']->content; ?><h3>

        <address><strong><?php print $fields['field_npf_event_venue_name']->content; ?></strong>
        <?php print $fields['field_npf_event_venue_address']->content; ?></address>

        <p><?php print $fields['field_npf_event_description']->content; ?></p>
      </div>
      <div class="event-right">
        <?php print $fields['field_event_location_map']->content; ?>
      </div>
  </div>
  </a>
</div>

<!-- Mobile Layout -->
<div class="calendar-mobile">
  <div class="event-mobile-container">
    <div class="mobile-left">
      <img src="/sites/default/files/calendar/<?php print $type ?>.jpg" alt="<?php print str_replace(array("<div>", "</div>"),"", $fields['field_npf_event_type']->content); ?>">
    </div>

    <div class="mobile-right">
      <h2><strong><?php print $fields['title']->content; ?></strong></h2>
      <h3><?php print $fields['field_npf_event_date']->content; ?><h3>

      <address><strong><?php print $fields['field_npf_event_venue_name']->content; ?></strong>
      <?php print $fields['field_npf_event_venue_address']->content; ?></address>
      <!-- This map link is broken and doesn't work yet! -->
      <a target = "blank" href="http://maps.google.com/?q="+"<?php print $address_string ?>">Map</a>

      <p><?php print $fields['field_npf_event_description']->content; ?></p>
      <a target = "blank" href ="<?php print str_replace(array("<div>", "</div>"),"", $fields['field_npf_event_url']->content); ?>">Learn More</a>
    </div>
  </div>
</div>

<script>
  <!-- // This just inserts "miles from" into the distance filter display. -->
  document.getElementsByClassName("geofield-proximity-origin-from")[0].textContent = 'miles from';

  <!-- //Insert placeholder attribute and "zip" text into distance origin field -->
  document.getElementById("edit-field-geofield-distance-origin").setAttribute("placeholder","Zip");
</script>
