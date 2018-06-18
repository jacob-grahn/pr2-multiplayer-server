<?php

// env
require_once __DIR__ . '/../../config.php';

require_once QUERIES_DIR . '/servers/servers_select.php';
require_once COMMON_DIR . '/manage_socket/socket_manage_fns.php';

// connect
$pdo = pdo_connect();

// log start
$date = date('r');
output("Starting server checks at $date...");

// tests all game servers (+ policy server)
check_servers($pdo);

// log end
output('Server checks complete.');