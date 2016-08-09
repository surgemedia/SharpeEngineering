<div id="contact_map" class="col-lg-4">
  <hr>
  <h3>Postal Address</h3>
    <ul>
    <li>
      <p>PO Box 916 Roma QLD 4455</p>
    </li>
  </ul>
</div>
<div id="contact_map" class="col-lg-4 col-md-6 ">
  <hr>
  <h3>Roma Facility</h3>
  <?php
  $location = get_field('roma_map','option');
  if( !empty($location) ):
  ?>
  <div class="acf-map">
    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
  </div>
  <?php endif; ?>
  <ul>
    <li>
      <?php the_field('contact_po_box_roma','option')?>
    </li>
  </ul>
</div>
<div id="contact_map" class="col-lg-4 col-md-6 ">
  <hr>
  <h3>Zillmere Facility</h3>
  <?php
  $location = get_field('brisbane_map','option');
  if( !empty($location) ):
  ?>
  <div class="acf-map">
    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
  </div>
  <?php endif; ?>
  <ul>
    <li>
      <?php the_field('contact_po_box_brisbane','option')?>
    </li>
  </ul>
</div>
<div id="contact_map" class="col-lg-4 col-md-6 col-lg-push-8">
  <hr>
  <h3>Chinchilla Facility</h3>
  <?php
  $location = get_field('chinchilla_map','option');
  if( !empty($location) ):
  ?>
  <div class="acf-map">
    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
  </div>
  <?php endif; ?>
  <ul>
    <li>
      <?php the_field('contact_po_box_chinchilla','option')?>
    </li>
  </ul>
</div>
