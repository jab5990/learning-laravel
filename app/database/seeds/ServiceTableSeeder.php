<?php

class ServiceTableSeeder extends Seeder
{
    public function run()
    {
        Service::create(
            array(
                'title' => 'Web Development',
                'description' => 'PHP, MySQL, Javascript and more.'
            )
        );

        Service::create(
            array(
                'title' => 'SEO',
                'description' => 'Get on the first page of search engines with out help.'
            )
        );

        Service::create(
            array(
                'title' => 'Marketing',
                'description' => 'Advertise with us.'
            )
        );

    }
}