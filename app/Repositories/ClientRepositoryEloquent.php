<?php
/**
 * Created by PhpStorm.
 * User: Sergio
 * Date: 19/10/2015
 * Time: 11:41
 */

namespace Larang\Repositories;


use Larang\Models\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Client::class;
    }
}