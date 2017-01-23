<?php
namespace application\Models;

use application\Core\Model;

class Portfolio extends Model
{

    public function getData()
    {
        return array(

            array(
                'Year' => '2016',
                'Site' => 'https://vk.com/mrdyachenko'
            ),
            // todo
        );
    }
}
