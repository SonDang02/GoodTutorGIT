<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/field_behavior.proto

namespace GPBMetadata\Google\Api;

class FieldBehavior
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
‚
google/api/field_behavior.proto
google.api google/protobuf/descriptor.proto*¶
FieldBehavior
FIELD_BEHAVIOR_UNSPECIFIED 
OPTIONAL
REQUIRED
OUTPUT_ONLY

INPUT_ONLY
	IMMUTABLE
UNORDERED_LIST
NON_EMPTY_DEFAULT

IDENTIFIERBp
com.google.apiBFieldBehaviorProtoPZAgoogle.golang.org/genproto/googleapis/api/annotations;annotations¢GAPIbproto3'
        , true);

        static::$is_initialized = true;
    }
}

