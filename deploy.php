<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'RadarMile');

// Project repository
set('repository', 'https://github.com/devnechi/radarmile.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts

host('radarmile.com')
->identityFile('~/.ssh/deployerkey')
->set('deploy_path', '/var/www/radarmile.com/public_html/rd/');
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

//before('deploy:symlink', 'artisan:migrate');

