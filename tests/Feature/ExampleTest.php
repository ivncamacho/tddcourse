<?php


it('gives back succesfull respose for home page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
