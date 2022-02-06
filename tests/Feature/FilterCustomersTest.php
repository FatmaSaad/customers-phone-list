<?php

namespace Tests\Feature;

use Tests\TestCase;

class FilterCustomersTest extends TestCase
{
    function test_can_apply_filter_by_country_id()
    {

        $response = $this->json('GET','/api/customers?country_id=2');
        $response->assertStatus(200);
        $this->assertEquals($response['data'][0]['country_id'],'2');
        $this->assertEquals($response['data'][0]['code'],'+251');

        $response->assertJsonStructure(['data']);
    }

    function test_can_apply_filter_by_state()
    {

        $response = $this->json('GET','/api/customers?state=valid');
        $response->assertStatus(200);
        $this->assertEquals($response['data'][0]['state'],'valid');
        $response->assertJsonStructure(['data']);
    }



}
