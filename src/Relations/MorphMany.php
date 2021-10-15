<?php

namespace Andreisizyi\EloquentEagerLimit\Relations;

use Illuminate\Database\Eloquent\Relations\MorphMany as Base;

class MorphMany extends Base
{
    use HasLimit;
}
