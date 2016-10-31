<?php
$smarty = new Smarty();
$smarty->setTemplateDir('../views');
$smarty->setCompileDir(__DIR__ . '/templates_c');
$smarty->default_modifiers = array('escape');