<?php

/**
 * @file
 * Contains \geo0000\drupal_code_check\GitHooks.
 */

namespace geo0000\drupal_code_check;

use Composer\Script\Event;
use Symfony\Component\Filesystem\Filesystem;

class GitHooks {
  
  public static function create(\Composer\Script\Event $event) {
    $fs = new Filesystem();

    $composer = $event->getComposer();
    $vendorPath = $composer->getConfig()->get('vendor-dir');

    $origin_dir = $vendorPath . '/geo0000/drupal-code-check/git-hooks';
    $target_dir = getcwd() . '/.git/hooks';

    $git_hooks = [
      'pre-commit',
      'pre-commit.php',
    ];

    foreach ($git_hooks as $git_hook) {
      $origin_file = $origin_dir . '/' . $git_hook;
      $target_file = $target_dir . '/' . $git_hook;

      if ($fs->exists($origin_file)) {
        // Symlink the target to origin (force copy on Windows).
        $fs->symlink($origin_file, $target_file, TRUE);
        // Make the file executable.
        $fs->chmod($target_file, 0775);

        $event->getIO()->write("Create a symbolic link for Git Hook: " . $git_hook);
      }
    }
  }

}
