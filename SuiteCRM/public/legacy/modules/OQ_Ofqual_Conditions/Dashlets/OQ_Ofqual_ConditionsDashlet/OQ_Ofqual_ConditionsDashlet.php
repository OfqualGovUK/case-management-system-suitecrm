<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/Dashlets/DashletGeneric.php');

class OQ_Ofqual_ConditionsDashlet extends DashletGeneric
{
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;

        require('modules/OQ_Ofqual_Conditions/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'OQ_Ofqual_Conditions');
        $this->searchFields = $dashletData['OQ_Ofqual_ConditionsDashlet']['searchFields'];
        $this->columns = $dashletData['OQ_Ofqual_ConditionsDashlet']['columns'];

        $this->seedBean = BeanFactory::newBean('OQ_Ofqual_Conditions');
    }
}
