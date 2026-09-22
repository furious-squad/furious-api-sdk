<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class UserApplySkills
 *
 * Represents a candidate skills resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class UserApplySkills extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Candidate Skills";
    protected const CATEGORY_NAME   = "RH";
    protected const GRAPH_API_NAME  = "CandidateSkills";

    protected const API_URI         = "candidate-skills";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE ];
}
