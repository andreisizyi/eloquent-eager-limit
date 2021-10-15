<?php

namespace Andreisizyi\EloquentEagerLimit\Relations;

use Illuminate\Database\Eloquent\Relations\MorphOne as Base;

class MorphOne extends Base
{
    use HasLimit;
}
