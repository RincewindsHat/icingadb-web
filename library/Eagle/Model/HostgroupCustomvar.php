<?php

namespace Icinga\Module\Eagle\Model;

use ipl\Orm\Model;
use ipl\Orm\Relations;

class HostgroupCustomvar extends Model
{
    public function getTableName()
    {
        return 'hostgroup_customvar';
    }

    public function getKeyName()
    {
        return 'id';
    }

    public function getColumns()
    {
        return [
            'hostgroup_id',
            'customvar_id',
            'environment_id'
        ];
    }

    public function createRelations(Relations $relations)
    {
        $relations->belongsTo('environment', Environment::class);
        $relations->belongsTo('hostgroup', Hostgroup::class);
        $relations->belongsTo('customvar', Customvar::class);
        $relations->belongsTo('customvar_flat', CustomvarFlat::class)
            ->setCandidateKey('customvar_id');
    }
}
