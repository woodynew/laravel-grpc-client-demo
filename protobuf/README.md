protoc --php_out=protobuf/compile --grpc_out=generate_server:protobuf/compile --plugin=protoc-gen-grpc=protobuf/grpc_php_plugin protobuf/protos/GrpcDemo.proto
