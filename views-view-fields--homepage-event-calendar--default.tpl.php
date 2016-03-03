<?php
  // dpm($fields);

  $url = str_replace(array("<div>", "</div>"),"", $fields['field_npf_event_url']->content);
  $title = $fields['title']->content;
  //Short title is truncated at x characters to fit in desktop layout.
  // $short_title = mb_strimwidth($title, 0, 24, "...")."</span>";
  //Longer title is truncated at x characters to fit in mobile layout.
  $state = str_replace(array("<div>", "</div>"),"", $fields['field_npf_event_venue_address_administrative_area']->content);
  $city = str_replace(array("<div>", "</div>"),"", $fields['field_npf_event_venue_address_locality']->content);
  $date = $fields['field_npf_event_date']->content;

 ?>

<!-- Minipanel content pane layout -->
<div class="homepage-calendar-feed-container">
  <a target="blank" href="<?php print $url; ?>">
    <div class="homepage-calendar-feed-title-loc">
      <div class="event-title"><?php print $title; ?></div>
      <div class="event-loc"><?php print $city; ?>, <?php print $state; ?></div>
    </div>
    <div class="homepage-calendar-feed-date"><?php print $date; ?></div>
  </a>
</div>
