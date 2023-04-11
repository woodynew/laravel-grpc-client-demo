<?php
// GENERATED CODE -- DO NOT EDIT!

namespace GrpcDemo;

/**
 */
class hiStub {

    /**
     * @param \GrpcDemo\HiUser $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \GrpcDemo\HiReply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function sayHello(
        \GrpcDemo\HiUser $request,
        \Grpc\ServerContext $context
    ): ?\GrpcDemo\HiReply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    public final function getMethodDescriptors(): array
    {
        return [
            '/GrpcDemo.hi/sayHello' => new \Grpc\MethodDescriptor(
                $this,
                'sayHello',
                '\GrpcDemo\HiUser',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
