<?php

use function Pest\Laravel\get;

it('gives back succesfull respose for home page', function () {
  get(route('home'))
  ->assertOk();
});
