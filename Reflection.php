<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest;
$request->username = "username";
$request->password = "password";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest {
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest;
$register->name = "Jonatan";
$register->address = "Medan";
$register->email = "jo@gmail.com";

ValidationUtil::validateReflection($register);