<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/Dashlets/DashletGeneric.php');

class OQ_Case_Question_ResponsesDashlet extends DashletGeneric
{
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;

        require('modules/OQ_Case_Question_Responses/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'OQ_Case_Question_Responses');
        $this->searchFields = $dashletData['OQ_Case_Question_ResponsesDashlet']['searchFields'];
        $this->columns = $dashletData['OQ_Case_Question_ResponsesDashlet']['columns'];

        $this->seedBean = BeanFactory::newBean('OQ_Case_Question_Responses');
    }
}
