<?php
//define the link field in the Cases module to relate to Qualifications
$dictionary['Case']['fields']['soc_submission_complete'] = array(
    'name' => 'soc_submission_complete',
    'type' => 'bool',
    'virtual' => true,
    'source' => 'non-db',
    'audited' => true,
    'reportable' => true,
    'vname' => 'LBL_SOC_SUBMISSION_COMPLETE',
);

$dictionary['Case']['fields']['soc_missing_sections'] = array(
    'name' => 'soc_missing_sections',
    'type' => 'text',
    'virtual' => true,
    'source' => 'non-db',
    'audited' => true,
    'reportable' => true,
    'vname' => 'LBL_SOC_MISSING_SECTIONS',
);

$dictionary['Case']['fields']['soc_triage_notes'] = array(
    'name' => 'soc_triage_notes',
    'type' => 'text',
    'virtual' => true,
    'source' => 'non-db',
    'audited' => true,
    'reportable' => true,
    'vname' => 'LBL_SOC_TRIAGE_NOTES',
);

$dictionary['Case']['fields']['soc_review_considerations'] = array(
    'name' => 'soc_review_considerations',
    'type' => 'text',
    'virtual' => true,
    'source' => 'non-db',
    'audited' => true,
    'reportable' => true,
    'vname' => 'LBL_SOC_REVIEW_CONSIDERATIONS',
);

$dictionary['Case']['fields']['soc_review_meeting_date'] = array(
    'name' => 'soc_review_meeting_date',
    'type' => 'datetime',
    'virtual' => true,
    'source' => 'non-db',
    'audited' => true,
    'reportable' => true,
    'vname' => 'LBL_SOC_REVIEW_MEETING_DATE',
);

$dictionary['Case']['fields']['soc_event_notifications'] = array(
    'name' => 'soc_event_notifications',
    'type' => 'text',
    'virtual' => true,
    'source' => 'non-db',
    'vtype' => 'json',
    'audited' => true,
    'reportable' => true,
    'vname' => 'LBL_SOC_EVENT_NOTIFICATIONS',
);

$dictionary['Case']['fields']['soc_has_risks'] = array(
    'name' => 'soc_has_risks',
    'type' => 'bool',
    'virtual' => true,
    'source' => 'non-db',
    'audited' => true,
    'reportable' => true,
    'vname' => 'LBL_SOC_HAS_RISKS',
);

$dictionary['Case']['fields']['soc_risks_list'] = array(
    'name' => 'soc_risks_list',
    'type' => 'text',
    'virtual' => true,
    'source' => 'non-db',
    'vtype' => 'json',
    'audited' => true,
    'reportable' => true,
    'vname' => 'LBL_SOC_RISKS_LIST',
);

$dictionary['Case']['fields']['soc_has_ao_enquiry'] = array(
    'name' => 'soc_has_ao_enquiry',
    'type' => 'bool',
    'virtual' => true,
    'audited' => true,
    'reportable' => true,
    'source' => 'non-db',
    'vname' => 'LBL_SOC_HAS_AO_ENQUIRY',
);

$dictionary['Case']['fields']['soc_ao_enquiries_list'] = array(
    'name' => 'soc_ao_enquiries_list',
    'type' => 'text',
    'virtual' => true,
    'source' => 'non-db',
    'audited' => true,
    'reportable' => true,
    'vtype' => 'json',
    'vname' => 'LBL_SOC_AO_ENQUIRIES_LIST',
);
$dictionary['Case']['fields']['soc_has_cwm_cases'] = array(
    'name' => 'soc_has_cwm_cases',
    'type' => 'bool',
    'virtual' => true,
    'audited' => true,
    'reportable' => true,
    'source' => 'non-db',
    'vname' => 'LBL_SOC_HAS_CWM_CASES',
);

$dictionary['Case']['fields']['soc_cwm_cases_list'] = array(
    'name' => 'soc_cwm_cases_list',
    'type' => 'text',
    'virtual' => true,
    'audited' => true,
    'reportable' => true,
    'source' => 'non-db',
    'vtype' => 'json',
    'vname' => 'LBL_SOC_CWM_CASES_LIST',
);
$dictionary['Case']['fields']['soc_has_meeting_notes'] = array(
    'name' => 'soc_has_meeting_notes',
    'type' => 'bool',
    'virtual' => true,
    'audited' => true,
    'reportable' => true,
    'source' => 'non-db',
    'vname' => 'LBL_SOC_HAS_MEETING_NOTES',
);

$dictionary['Case']['fields']['soc_meeting_notes_list'] = array(
    'name' => 'soc_meeting_notes_list',
    'type' => 'text',
    'virtual' => true,
    'source' => 'non-db',
    'audited' => true,
    'reportable' => true,
    'vtype' => 'json',
    'vname' => 'LBL_SOC_MEETING_NOTES_LIST',
);

$dictionary['Case']['fields']['soc_ccgr_rating'] = array(
    'name' => 'soc_ccgr_rating',
    'type' => 'varchar',
    'virtual' => true,
    'audited' => true,
    'reportable' => true,
    'source' => 'non-db',
    'vname' => 'LBL_SOC_CCGR_RATING',
);
$dictionary['Case']['fields']['soc_has_ccgr_intel'] = array(
    'name' => 'soc_has_ccgr_intel',
    'type' => 'bool',
    'virtual' => true,
    'audited' => true,
    'reportable' => true,
    'source' => 'non-db',
    'vname' => 'LBL_SOC_HAS_CCGR_INTEL',
);
$dictionary['Case']['fields']['soc_ccgr_intel_outline'] = array(
    'name' => 'soc_ccgr_intel_outline',
    'type' => 'text',
    'virtual' => true,
    'audited' => true,
    'reportable' => true,
    'source' => 'non-db',
    'vname' => 'LBL_SOC_CCGR_INTEL_OUTLINE',
);
$dictionary['Case']['fields']['soc_agree_current_compliance'] = array(
    'name' => 'soc_agree_current_compliance',
    'type' => 'bool',
    'virtual' => true,
    'audited' => true,
    'reportable' => true,
    'source' => 'non-db',
    'vname' => 'LBL_SOC_AGREE_CURRENT_COMPLIANCE',
);
$dictionary['Case']['fields']['soc_current_compliance_rationale'] = array(
    'name' => 'soc_current_compliance_rationale',
    'type' => 'text',
    'virtual' => true,
    'audited' => true,
    'reportable' => true,
    'source' => 'non-db',
    'vname' => 'LBL_SOC_CURRENT_COMPLIANCE_RATIONALE',
);
$dictionary['Case']['fields']['soc_agree_future_compliance'] = array(
    'name' => 'soc_agree_future_compliance',
    'type' => 'bool',
    'virtual' => true,
    'audited' => true,
    'reportable' => true,
    'source' => 'non-db',
    'vname' => 'LBL_SOC_AGREE_FUTURE_COMPLIANCE',
);
$dictionary['Case']['fields']['question_responses'] = array(
    'name' => 'question_responses',
    'type' => 'link',
    'relationship' => 'oq_case_question_responses_cases',
    'source' => 'non-db',
    'vname' => 'LBL_QUESTION_RESPONSES',
);

$dictionary['Case']['fields']['question_multirow_responses'] = array(
    'name' => 'question_multirow_responses',
    'type' => 'link',
    'relationship' => 'oq_case_question_multirow_cases',
    'source' => 'non-db',
    'vname' => 'LBL_QUESTION_RESPONSES',
);

$dictionary['Case']['fields']['oq_case_reviewers_user'] = array(
    'name' => 'oq_case_reviewers_user',
    'type' => 'link',
    'relationship' => 'oq_case_reviewers_user',
    'source' => 'non-db',
    'vname' => 'LBL_OQ_CASE_REVIEWERS_USER',
);
