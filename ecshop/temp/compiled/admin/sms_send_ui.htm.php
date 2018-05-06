<!-- $Id: sms_send_ui.htm 16697 2009-09-24 03:57:47Z liuhui $ -->
<?php echo $this->fetch('pageheader.htm'); ?>

<div class="main-div" id="sms-send">
<form method="POST" action="sms.php?act=send_sms" name="sms-send-form" onsubmit="return validate();">
<table >
  <tr>
    <td class="label"><?php echo $this->_var['lang']['phone']; ?>:</td>
    <td><input name="send_num" type="text" size="35" />
        <?php echo $this->_var['lang']['phone_notice']; ?>
    </td>
  </tr>
    <tr>
    <td class="label"><?php echo $this->_var['lang']['user_rand']; ?>:</td>
    <td><select name="send_rank">
        <option value='0'><?php echo $this->_var['lang']['please_select']; ?></option>
          <?php echo $this->html_options(array('options'=>$this->_var['send_rank'])); ?>
        </select></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['msg']; ?>:</td>
    <td><textarea name="msg" rows="6" cols="32" id="sms_content"></textarea><?php echo $this->_var['lang']['require_field']; ?> <?php echo $this->_var['lang']['msg_notice']; ?></td>
  </tr>

  <tr>
    <td class="label"></td>
    <!-- <td style="color:red;"><?php echo $this->_var['lang']['msg_forbidden']; ?></td> -->
    <td><?php echo $this->_var['lang']['notice0']; ?><span style="font-size:18px;font-style:italic;color:blue;" id="notice-word">0</span><?php echo $this->_var['lang']['notice1']; ?> <b id="sms_num" style="font-size:18px;font-style:italic;color:red;">0</b> <?php echo $this->_var['lang']['notice2']; ?> </td>
  </tr>

  <tr>
    <td class="label"><?php echo $this->_var['lang']['sms_preview']; ?>：</td>
    <td id="preview"></td>
  </tr>

  <tr>
    <td><input type="hidden" name="sms_type" value="fan-out" /></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">
      <input type="submit" name="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
      <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
    </td>
  </tr>
</table>
</form>
</div>

<script type="text/javascript" language="JavaScript">


function  validate() {
  var f = document['sms-send-form'];
  var phone = f.elements['send_num'].value;
  var msg = f.elements['send_rank'].value;
  var sms_content = f.elements['msg'].value;

  if(phone==''&&msg==0)
	{
		alert(send_empty_error);
		return false;
	}
  else if(sms_content.length < 1){
    alert(sms_empty_error);
    return false;
  }
	else
	{
	  return true;
	}
}


window.onload = function(){

  var sms = document.getElementById('sms_content');
  var preview = document.getElementById('preview');
  sms.onkeyup = function(){
    msg = this.value;
    if (msg.length > 0) {
      msg += '退订回N【' + '<?php echo $this->_var['default_sms_sign']; ?>' + '】';
      preview.setAttribute('style','border:1px solid #d8d8d8;background-color:cornsilk;margin:0 5px');
    }
    document.getElementById('notice-word').innerHTML = this.value.length;
    document.getElementById('sms_num').innerHTML = Math.ceil(msg.length/67);
    preview.innerText = msg;
  }
}

</script>
<?php echo $this->fetch('pagefooter.htm'); ?>