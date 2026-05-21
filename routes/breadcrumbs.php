<?php

// Home
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Home', route('dashboard'));
});
