<?php
    /*
    Plugin Name: my_plugin
    Plugin URI: http://localhost/wordpress/wp-content/plugins/my_plugin/my_plugin.php
    Description: this is wordpress my plugin
    Author: Nisha
    Version: 1.0
    Author URI: http://localhost/wordpress/wp-content/plugins/my_plugin/my_plugin.php
    */

?>
<?php

global $cookie_name,$cookie_value,$COOKIE,$key;

   $user_keys_arr_str= get_option('kvp');
   $user_keys_arr=explode(",",$user_keys_arr_str);

   if(isset($_POST)){
   $form_data=$_POST;
   $form_data_keys_arr=array_keys($form_data);

foreach ($user_keys_arr as  $value) {
        $value=trim($value);
        $key=array_search($value,$form_data_keys_arr);
        $key=$form_data_keys_arr[$key];
        $cookie_value = $form_data[$key];
        setcookie($key,$cookie_value, time() + (86400 * 30), "/",NULL,0);
}
}




function myplugin_admin_actions() {
add_menu_page("myplugin", "myplugin", "manage_options", "myplugin-info", "myplugin_admin");
}
add_action('admin_menu', 'myplugin_admin_actions');



function myplugin_admin(){?>
 <!-- <form action="http://localhost/wordpress/wp-admin/admin.php?page=myplugin-info" method="post" id="preview_form">

  name:  <input type="text" name="name" id="name" value="<?php //if(isset($_COOKIE['name'])){echo $_COOKIE['name'];}?>">
  email: <input type="email" name="email" value="<?php //if(isset($_COOKIE['email'])){echo $_COOKIE['email'];}?>" id="email">
  <input type="submit" name="submit" value="submit">
  </form> -->

<div class="wrap">
        <h2>Settings Page</h2>
        <form method="post" action="options.php">
            <?php
            settings_fields("section");
            do_settings_sections("theme-options");
            submit_button();
            ?>
        </form>
    </div>
<?php
}

function key_value_pairs()
{
    ?>
        <input type="text" name="kvp" id="kvp" value="<?php echo get_option('kvp'); ?>" />
    <?php
}

function display_theme_panel_fields()
{
    add_settings_section("section", "All Settings", null, "theme-options");
    add_settings_field("kvp", "Add comma seperated keys", "key_value_pairs", "theme-options", "section");
    register_setting("section", "kvp");
  }
add_action("admin_init", "display_theme_panel_fields");


function add_this_script_footer(){

  foreach ($_COOKIE as $key => $value){
  ?>
<script>
     var key='<?php echo $key; ?>';
     var value='<?php echo $value; ?>';
     document.getElementsByName(key)[0].value = value;
</script>
<?php } ?>


<?php }
add_action('wp_footer', 'add_this_script_footer');
?>
