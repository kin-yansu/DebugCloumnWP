<?php

namespace DeliciousBrains\WP_Offload_Media\Aws3;

// This file was auto-generated from sdk-root/src/data/codeguru-reviewer/2019-09-19/waiters-2.json
return ['version' => 2, 'waiters' => ['RepositoryAssociationSucceeded' => ['description' => 'Wait until a repository association is complete.', 'operation' => 'DescribeRepositoryAssociation', 'delay' => 10, 'maxAttempts' => 30, 'acceptors' => [['state' => 'success', 'matcher' => 'path', 'argument' => 'RepositoryAssociation.State', 'expected' => 'Associated'], ['state' => 'failure', 'matcher' => 'path', 'argument' => 'RepositoryAssociation.State', 'expected' => 'Failed'], ['state' => 'retry', 'matcher' => 'path', 'argument' => 'RepositoryAssociation.State', 'expected' => 'Associating']]], 'CodeReviewCompleted' => ['description' => 'Wait until a code review is complete.', 'operation' => 'DescribeCodeReview', 'delay' => 10, 'maxAttempts' => 180, 'acceptors' => [['state' => 'success', 'matcher' => 'path', 'argument' => 'CodeReview.State', 'expected' => 'Completed'], ['state' => 'failure', 'matcher' => 'path', 'argument' => 'CodeReview.State', 'expected' => 'Failed'], ['state' => 'retry', 'matcher' => 'path', 'argument' => 'CodeReview.State', 'expected' => 'Pending']]]]];
