<?php

class SocialMedia {
    public string $name;
}

// Final Class 
final class Facebook extends SocialMedia {}

// ini akan error karena class facebook menggunakann kata kunci final 
// class FacebookLite extends Facebook {}

// Final Function 
class Instagram extends SocialMedia {
    final function login (string $username, string $password): bool {
        return true;
    }
}

class InstagramLite extends Instagram {
    // ini akan error karena function login menggunakan kata kunci final

    // function login (string $username, string $password): bool {
    //     return true;
    // }
}
