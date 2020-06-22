<?php
/**
 * Include REDCap header.
 */
require_once APP_PATH_DOCROOT . "ProjectGeneral/header.php";

/**
 * Create instsance of Custom Template Engine, and display template
 * filled with REDcap data on Fill Template page.
 */
$customTemplateEngine = new \BCCHR\CustomTemplateEngine\CustomTemplateEngine();

if(isset($_POST["single"])){
  $customTemplateEngine->generateFillTemplatePage();
}
elseif(isset($_POST["all"])){
  $customTemplateEngine->generateFillAllTemplatesPage();
}


/**
 * Include REDCap footer.
 */
require_once APP_PATH_DOCROOT . "ProjectGeneral/footer.php";
