<?php

namespace Deployer;

require 'recipe/common.php';

if (PHP_SAPI !== 'cli') {
    echo 'Must be run as a CLI script';
    exit(1);
}

set('application', 'The Shop');
set('repository', 'https://github.com/PacktPublishing/Mastering-Magento-2');

host('shop.foggyline.net')
    ->configFile('~/.ssh/config')
    ->set('deploy_path', '/var/www');

set('shared_files', [
    'app/etc/env.php',
    'app/etc/config.php',
    'var/.maintenance.ip',
]);

set('shared_dirs', [
    'var/composer_home',
    'var/log',
    'var/cache',
    'var/export',
    'var/report',
    'var/import_history',
    'var/session',
    'var/importexport',
    'var/backups',
    'var/tmp',
    'pub/sitemaps',
    'pub/media'
]);

set('writable_dirs', [
    'var',
    'pub/static',
    'pub/media',
    'generated'
]);

set('clear_paths', [
    'generated/*',
    'pub/static/_cache/*',
    'var/generation/*',
    'var/cache/*',
    'var/page_cache/*',
    'var/view_preprocessed/*'
]);

desc('Magento 2 deployment');
task('deploy:magento', function () {
    run("{{bin/php}} {{release_path}}/bin/magento deploy:mode:set production");
});

desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
    'deploy:clear_paths',
    'deploy:magento',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success',
]);
