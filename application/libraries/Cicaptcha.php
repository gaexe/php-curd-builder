<?php 

class Cicaptcha 
{
  function __construct() {
    $this->ci =& get_instance();
    $this->ci->load->helper('cicaptcha');
  }  

  function show() {

    $vals = array(
        'img_path'	=> FCPATH.'sximo/captcha/',
        'img_url'	=> base_url('sximo/captcha').'/',
        'font_path'	=> FCPATH.'sximo/fonts/calibri.ttf',
        'img_width'	=> 100,
        'img_height' => 25,
        'expiration' => 7200,
        'word_length' => 5 ,
    );

    $cap = create_captcha($vals);

    $data = array(
        'captcha_time'	=> $cap['time'],
        'ip_address'	=> $this->ci->input->ip_address(),
        'word'	=> $cap['word']
        );

    $query = $this->ci->db->insert_string('captcha', $data);
    $this->ci->db->query($query);

    return '
      <div class="input-group input-group-lg">
        <input name="cicaptcha" type="text" class="form-control" placeholder="Enter captcha value">
        <span class="input-group-addon">'.$cap['image'].'</span>
      </div>    ';
  
  }
  
  function validate() {
    
    // First, delete old captchas
    $expiration = time()-7200; // Two hour limit
    $this->ci->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);	

    // Then see if a captcha exists:
    $sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
    $binds = array($_POST['cicaptcha'], $this->ci->input->ip_address(), $expiration);
    $query = $this->ci->db->query($sql, $binds);
    $row = $query->row();

    if ($row->count == 0)
    {
      return false;
    }else{
      return true;
    }

  }  
  
  
  
}


?>