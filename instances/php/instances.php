<?php
$instance['test'] = array_merge($instance['test'], array(
    "loader" => array(
        "minecraft_version" => "1.20.1",
        "loader_type" => "forge",
        "loader_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "test",
        "ip" => "",
        "port" => 25565
    )
));
