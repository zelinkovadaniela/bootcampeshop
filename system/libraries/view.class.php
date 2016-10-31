<?php
 class view {

   public static function smarty() {
     
      $smarty = new Smarty();

      $smarty->setTemplateDir (config::get('smarty_template_dir'));
      $smarty->setCompileDir (config::get('smarty_compile_dir'));
      $smarty->setConfigDir (config::get('smarty_config_dir'));
      $smarty->setCacheDir (config::get('smarty_cache_dir'));
      $smarty->default_modifiers = array('escape');

      return $smarty;
   }
 }