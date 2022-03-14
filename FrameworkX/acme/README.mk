composer.json
{
    "autoload": {
        "psr-4": {
            "Acme\\Todo\\": "src/"
        }
    }
}

composer dump-autoload
php public/index.php