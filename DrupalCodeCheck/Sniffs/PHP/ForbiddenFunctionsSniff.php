<?php
/**
 * DrupalCodeCheck_Sniffs_PHP_ForbiddenFunctionsSniff.
 *
 * Discourages the use blacklisted PHP functions.
 * Can be used to forbid the use of any function.
 *
 * @see Generic_Sniffs_PHP_ForbiddenFunctionsSniff
 */
class DrupalCodeCheck_Sniffs_PHP_ForbiddenFunctionsSniff extends Generic_Sniffs_PHP_ForbiddenFunctionsSniff {

  /**
   * {@inheritdoc}
   */
  public $supportedTokenizers = array(
    'PHP',
  );

  /**
   * {@inheritdoc}
   */
  public $forbiddenFunctions = array(
    // PHP Blacklisted functions.
    'die'                 => null,
    'print_r'             => null,
    'var_dump'            => null,
    // Drupal's build-in debugging functions.
    'debug'               => null,
    // Devel module debugging functions.
    'dargs'               => null,
    'dcp'                 => null,
    'dd'                  => null,
    'ddebug_backtrace'    => null,
    'dfb'                 => null,
    'dfbt'                => null,
    'dpm'                 => null,
    'dpq'                 => null,
    'dpr'                 => null,
    'dprint_r'            => null,
    'drupal_debug'        => null,
    'dsm'                 => null,
    'dvm'                 => null,
    'dvr'                 => null,
    'kdevel_print_object' => null,
    'kpr'                 => null,
    'kprint_r'            => null,
    'krumo'               => null,
    'sdpm'                => null,
    // Functions which are not available on all
    // PHP builds.
    'fnmatch'             => null,
  );

  /**
   * {@inheritdoc}
   */
  public $error = true;

}//end class