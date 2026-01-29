<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/Dashlets/DashletGeneric.php');

class OQ_Case_Question_MultiRowDashlet extends DashletGeneric
{
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;

        require('modules/OQ_Case_Question_MultiRow/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'OQ_Case_Question_MultiRow');
        $this->searchFields = $dashletData['OQ_Case_Question_MultiRowDashlet']['searchFields'];
        $this->columns = $dashletData['OQ_Case_Question_MultiRowDashlet']['columns'];

        $this->seedBean = BeanFactory::newBean('OQ_Case_Question_MultiRow');
    }
}
