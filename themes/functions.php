<?php
/**
 * Helpers for theming, available for all themes in their template files and functions.php.
 * This file is included right before the themes own functions.php
 */
 

/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $ly = CLydia::Instance(); 
  $html = null;
  if(isset($ly->config['debug']['db-num-queries']) && $ly->config['debug']['db-num-queries'] && isset($ly->db)) {
    $html .= "<p>Database made " . $ly->db->GetNumQueries() . " queries.</p>";
  }   
  if(isset($ly->config['debug']['db-queries']) && $ly->config['debug']['db-queries'] && isset($ly->db)) {
    $html .= "<p>Database made the following queries.</p><pre>" . implode('<br/><br/>', $ly->db->GetQueries()) . "</pre>";
  }   
  if(isset($ly->config['debug']['lydia']) && $ly->config['debug']['lydia']) {
    $html .= "<hr><h3>Debuginformation</h3><p>The content of CLydia:</p><pre>" . htmlent(print_r($ly, true)) . "</pre>";
  }   
  return $html;
}


/**
 * Prepend the base_url.
 */
function base_url($url) {
  return $ly->request->base_url . trim($url, '/');
}


/**
 * Return the current url.
 */
function current_url() {
  return $ly->request->current_url;
}