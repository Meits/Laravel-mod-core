<?php
/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 27.10.2019
 * Time: 18:34
 */

namespace App\Modules\Admin\User\Models\Filters;


use App\Modules\Common\Filters\Classes\Filter;
use Illuminate\Database\Eloquent\Builder;

class Status implements Filter
{

    /**
     * Apply a given search value to the builder instance.
     *
     * @param Builder $builder
     * @param mixed $value
     * @return Builder $builder
     */
    public static function apply(Builder $builder, $value)
    {
        return  $builder->where('status',$value);
    }
}