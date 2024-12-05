<?php

namespace App\Enum;

enum PermissionEnum:string
{
    case ManageFeatures='managerFeatures';
    case ManageUser='manageUser';
    case ManageComments='manageComments';
    case UpvoteDownvote='upvoteDownvote';

}
