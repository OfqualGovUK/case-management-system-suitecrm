<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/Dashlets/DashletGeneric.php');

class OQ_QualificationsDashlet extends DashletGeneric
{
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;

        require('modules/OQ_Qualifications/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'OQ_Qualifications');

        $this->searchFields = $dashletData['OQ_QualificationsDashlet']['searchFields'];
        $this->columns = $dashletData['OQ_QualificationsDashlet']['columns'];

        $this->seedBean = BeanFactory::newBean('OQ_Qualifications');
    }
}
