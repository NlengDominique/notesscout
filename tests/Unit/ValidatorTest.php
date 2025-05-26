<?php

use Core\Validator;

it('validates a string', function(){

    $result = Validator::string('foobar');

    expect($result)->toBeTrue();

});

it('validates a string with a minimum length',function(){

     $result = Validator::string('foobar',20);

     expect($result)->toBeFalse();
});


it('validates an email', function(){

     $result = Validator::email('foobar@example.com');

     expect($result)->toBeTrue();
});