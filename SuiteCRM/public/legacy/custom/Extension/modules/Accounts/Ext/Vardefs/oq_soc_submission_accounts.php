<?php
//define the link field in the Accounts module to relate to SOC Submissions
$dictionary['Account']['fields']['oq_soc_submission_accounts'] =
    array(
        'name' => 'oq_soc_submission_accounts',
        'vname' => 'LBL_OQ_SOC_SUBMISSIONS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'type' => 'link',
        'relationship' => 'oq_soc_submission_accounts',
        'module' => 'OQ_SOC_Submission',
        'bean_name' => 'OQ_SOC_Submission',
        'side' => 'right',
        'source' => 'non-db',
    );
