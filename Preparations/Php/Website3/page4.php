<?php
    $user = array(
        'name' => 'John',
        'email' => 'test@test.com',
        'age' => 35
    );

    // Serialized array
    $user_serialize = serialize($user);
    print_r($user_serialize);

    echo '<br>';
    $user_deserialized = unserialize($user_serialize);
    print_r($user_deserialized);