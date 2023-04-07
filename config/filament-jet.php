<?php

use Mstfkhazaal\FilamentJet\Features;

return [
    'auth_middleware' => 'auth',
    'features' => [Features::accountDeletion()],
    'profile_photo_disk' => 'public',
    'profile_photo_directory' => 'profile-photos',
];
