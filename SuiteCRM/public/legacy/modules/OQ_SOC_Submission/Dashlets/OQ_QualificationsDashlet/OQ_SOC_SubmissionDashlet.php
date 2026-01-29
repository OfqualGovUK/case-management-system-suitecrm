<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/Dashlets/DashletGeneric.php');

class OQ_SOC_SubmissionDashlet extends DashletGeneric
{
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;

        require('modules/OQ_SOC_Submission/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'OQ_SOC_Submission');
        $this->searchFields = $dashletData['OQ_SOC_SubmissionDashlet']['searchFields'];
        $this->columns = $dashletData['OQ_SOC_SubmissionDashlet']['columns'];

        $this->seedBean = BeanFactory::newBean('OQ_SOC_Submission');
    }
}
