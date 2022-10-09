<?php


function getjs()
{
  wp_register_script('test-js', plugins_url(__FILE__) . '/assets/js/test.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'getjs');

function purehearts_button($attributes)
{
  $default = array(
    'type' => 'danger',
    'title' => __('Button', 'purehearts'),
    'url' => '',
  );
  $button_attributes = shortcode_atts($default, $attributes);
  wp_enqueue_script('test-js');
  return sprintf(
    '<a class="btn btn-%s full-width" href="%s">%s</a>',
    $button_attributes['type'],
    $button_attributes['url'],
    $button_attributes['title'],
  );
}
add_shortcode('button', 'purehearts_button');




function purehearts_button2($attributes, $content = '')
{
  $default = array(
    'type' => 'danger',
    'title' => __('Button', 'purehearts'),
    'url' => '',
  );
  $button_attributes = shortcode_atts($default, $attributes);
  return sprintf(
    '<a class="btn btn-%s full-width" href="%s">%s</a>',
    $button_attributes['type'],
    $button_attributes['url'],
    do_shortcode($content)
  );
}
add_shortcode('button2', 'purehearts_button2');

// nested shortcode er jonne always do_shortcode use korte hobe allow korar jonno
function purehearts_uppercase($attributes, $content = '')
{
  return strtoupper(do_shortcode($content));
}
add_shortcode('uc', 'purehearts_uppercase');


function purehearts_gmap($attributes)
{
  $default = array(
    'place' => 'Dhaka Museum',
    'width' => '400',
    'height' => '300',

  );
  $params = shortcode_atts($default, $attributes);

  $map = <<<EOD
    <div>
    <div>
    <iframe src="https://www.google.com/maps/embed??q={$params['place']}&&pb=!1m18!1m12!1m3!1d3618.609081107129!2d91.84775645060111!3d24.911312583951545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375055443c0cd123%3A0x545150da142e1402!2sAppifylab!5e0!3m2!1sen!2sbd!4v1664276608838!5m2!1sen!2sbd" width={$params['width']} height={$params['height']} style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>
    EOD;
  return $map;
}
add_shortcode('gmap', 'purehearts_gmap');



function purehearts_form1($attributes)
{
  $default = array();
  $button_attributes = shortcode_atts($default, $attributes);
  return sprintf(
    '<form class="registration" method="post">
  <h1>👋 Welcome!</h1>

  <label class="pure-material-textfield-outlined">
     <input placeholder=" " type="email" required>
      <span>Email</span>
  </label>

  <label class="pure-material-textfield-outlined">
    <input placeholder=" " type="password" required>
    <span>Password</span>
  </label>

  <label class="pure-material-radio">
    <input type="radio" name="type" required>
    <span>Personal Account</span>
  </label>

  <label class="pure-material-radio">
    <input type="radio" name="type" required>
    <span>Business Account</span>
  </label>

  <label class="pure-material-checkbox">
    <input type="checkbox" required>
    <span>I agree to the <a href="https://codepen.io/collection/nZKBZe/" target="_blank" title="Actually not a Terms of Service">Terms of Service</a></span>
  </label>

  <button class="pure-material-button-contained" type="submit">Sign Up</button>

  <div class="done">
    <h1>👌 You\'re all set!</h1>
    <a class="pure-material-button-text" href="javascript:window.location.reload(true)">Again</a>
  </div>
  <div class="progress">
    <progress class="pure-material-progress-circular" />
  </div>
</form>

<div class="left-footer">
  Created by Ben Szabo (finnhvman)<br/>
  <a href="https://twitter.com/finnhvman" target="_top">Twitter</a> &nbsp; | &nbsp;
  <a href="https://www.linkedin.com/in/finnhvman/" target="_top">LinkedIn</a> &nbsp; | &nbsp;
  <a href="https://codepen.io/finnhvman/" target="_top">CodePen</a>
</div>
<div class="right-footer">
  Check out<br/>
  <a href="https://github.com/finnhvman/matter" target="_top">Matter (Pure CSS Material)</a>
</div>'

  );
}
add_shortcode('form1', 'purehearts_form1');
