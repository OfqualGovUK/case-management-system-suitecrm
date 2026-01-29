<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/Dashlets/DashletGeneric.php');

class OQ_SOC_ConditionsComplianceDashlet extends DashletGeneric
{
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;

        require('modules/OQ_SOC_ConditionsCompliance/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'OQ_SOC_ConditionsCompliance');
        $this->searchFields = $dashletData['OQ_SOC_ConditionsComplianceDashlet']['searchFields'];
        $this->columns = $dashletData['OQ_SOC_ConditionsComplianceDashlet']['columns'];

        $this->seedBean = BeanFactory::newBean('OQ_SOC_ConditionsCompliance');
    }
}
