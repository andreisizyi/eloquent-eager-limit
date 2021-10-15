<?php

namespace Andreisizyi\EloquentEagerLimit\Relations;

use Illuminate\Database\Eloquent\Relations\MorphToMany as Base;

class MorphToMany extends Base
{
    use BelongsOrMorphToMany;
}
