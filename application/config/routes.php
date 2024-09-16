<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller']                     = "Welcome";
$route['home'] 				                     ='Welcome/index';
$route['about'] 		                         ='Welcome/about_us';
$route['faq'] 		                             ='Welcome/faq_asked';
$route['terms-of-use'] 		                     ='Welcome/terms_of_use';
$route['privacy-policy'] 		                 ='Welcome/privacy_policy';
$route['refund-policy']                          ='Welcome/refund_policy';
$route['contact'] 			                     ='Welcome/contact_us';
$route['order'] 			                     ='Welcome/order_us';
$route['assignment-help'] 	                     ='Welcome/assignment_help';
$route['management-assignment-help'] 		     ='Welcome/management_assignment_help';
$route['case-study-assignment'] 			     ='Welcome/case_study_assignment';
$route['cdr-report-writers']                    ='Welcome/cdr_report_writers';
$route['cdr-writing-help']                      ='Welcome/cdr_writing_help';
$route['perdisco-accounting-assignment-help']   ='Welcome/perdisco_accounting_assignment_help';
$route['perdisco-assignment-help']              ='Welcome/perdisco_assignment_help';
$route['sage50-assignment-help']                ='Welcome/sage50_assignment_help';
$route['myob-assignment-help']                  ='Welcome/myob_assignment_help';

$route['maths-homework-help']					    ='Welcome/maths_homework_help';	
$route['pharmacology-course-help']				    ='Welcome/pharmacology_course_help';	
$route['business-assignment-help']					='Welcome/business_assignment_help';
$route['arts-architecture-assignment-help']			='Welcome/arts_architecture_assignment_help';
$route['audit-assignment-help']						='Welcome/audit_assignment_help';
$route['engineering-assignment-help']				='Welcome/engineering_assignment_help';
$route['economics-assignment-help']					='Welcome/economics_assignment_help';
$route['science-assignment-help']					='Welcome/science_assignment_help';
$route['thesis-help']								='Welcome/thesis_help';
$route['research-paper-help']						='Welcome/research_paper_help';
$route['accounting-homework-help']					='Welcome/accounting_homework_help';
$route['finance-assignment-help']					='Welcome/finance_assignment_help';
$route['humanities-assignment-help'] 			    ='Welcome/humanities_assignment_help';
$route['free-samples'] 	                             ='Welcome/free_samples';
$route['nursing-help'] 				             ='Welcome/nursing_help';
$route['dissertation-help'] 		             ='Welcome/dissertation_help';
$route['computer-assignment'] 			         ='Welcome/computer_assignment';
$route['programming-help'] 				         ='Welcome/programming_help';
$route['computer-network-assignment'] 		     ='Welcome/computer_network_assignment';
$route['essay-writing-help'] 			         ='Welcome/essay_writing_help';
$route['law-assignment-help'] 				     ='Welcome/law_assignment_help';
$route['marketing-assignment-help'] 		     ='Welcome/marketing_assignment_help';
$route['assignment-writing-help-australia'] 	 ='Welcome/assignment_writing_help_australia';
$route['assignment-writing-help-canada'] 	     ='Welcome/assignment_writing_help_canada';
$route['assignment-writing-help-uae'] 	         ='Welcome/assignment_writing_help_uae';
$route['assignment-writing-services-usa'] 	     ='Welcome/assignment_writing_services_usa';
$route['assignment-writing-help-uk']             ='Welcome/assignment_writing_help_uk';
$route['assignment-help-malaysia']               ='Welcome/assignment_help_malaysia';
$route['assignment-help-newzealand']             ='Welcome/assignment_help_newzealand';
$route['assignment-help-singapore']              ='Welcome/assignment_help_singapore';
$route['reviews'] 	                             ='Welcome/reviews';
$route['offers']                                 ='Welcome/offers';
$route['free-samples']                           ='Welcome/samples_assignment';
$route['free-samples/nursing-care-plan']                      ='Welcome/nursing_care_plan';
$route['free-samples/cross-cultural-communications']          ='Welcome/cross_cultural_communications';
$route['free-samples/strategic-change-project-plan']          ='Welcome/strategic_change_project_plan';
$route['free-samples/implementation-of-psychology-in-business']          ='Welcome/implementation_of_psychology_in_business';
$route['free-samples/managing-it-capability']          ='Welcome/managing_it_capability';
$route['free-samples/essay-on-the-challenges-of-talent']          ='Welcome/essay_on_the_challenges_of_talent';
$route['free-samples/critical-analysis-of-interplay']          ='Welcome/critical_analysis_of_interplay';
$route['free-samples/case-study']          ='Welcome/case_study';
$route['free-samples/analysis-of-case-study']          ='Welcome/analysis_of_case_study';
$route['free-samples/clinical-case-conference-report']          ='Welcome/clinical_case_conference_report';
$route['free-samples/the-effect-of-local-news-media']          ='Welcome/the_effect_of_local_news_media';
$route['free-samples/tangent-plane-and-approximation']          ='Welcome/tangent_plane_and_approximation';
$route['free-samples/finance-and-accounting']          ='Welcome/finance_and_accounting';
$route['free-samples/financial-analysis']          ='Welcome/financial_analysis';
$route['free-samples/strategic-management']          ='Welcome/strategic_management';
$route['free-samples/strategic-management']          ='Welcome/strategic_management';
$route['email_send']                             ='Welcome/send';

$route['mail_send']                                 ='Welcome/sendMail';//added by robin for test only
$route['au'] 	 ='Welcome/au';

$route['uk'] 	 ='Welcome/uk';
$route['ae'] 	 ='Welcome/ae';
$route['us'] 	 ='Welcome/us';
$route['my'] 	 ='Welcome/my';
$route['sg'] 	 ='Welcome/sg';
$route['nz'] 	 ='Welcome/nz';
$route['ca'] 	 ='Welcome/ca';