<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check which button was clicked
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'start') {
            // Handle Save action
            Session::loadTemplate('machine/start');
            // Your save logic here
        } elseif ($_POST['action'] === 'create') {
            // Handle Delete action
            Session::loadTemplate('machine/create');
            // Your delete logic here
        }
    }
}