<?php

namespace App\Http\Controllers;

use GrpcDemo\hiClient;
use GrpcDemo\HiUser;

class AppController extends Controller
{
    public function testGrpc(){
        $grpcClient = new hiClient("127.0.0.1:9503",[
            'credentials' => null,
        ]);

        $request = new HiUser();
        $request->setName('hyperf');
        $request->setSex(1);

        list($reply,$status) = $grpcClient->sayHello($request)->wait();
        $message = $reply->getMessage();
        $user = $reply->getUser();

        var_dump($message);
        var_dump($status);

        var_dump(memory_get_usage(true));
        return $message;
    }
}
