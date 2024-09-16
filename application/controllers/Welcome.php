<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(['form_validation','bcrypt','email','session','zip']);
        $this->load->helper(['html','form','url','security','string','file','directory']);
		//$this->load->library('email', $config);
 
		//$this->load->helper("url");
		error_reporting(0);
	}
	
	//============= SMTP credential function ===========//
public function smtpCredential(){
	
	      $config = Array(
						'protocol' => 'smtp',							
						'smtp_host' => 'mail.privateemail.com',//'taylor.mxrouting.net',
						'smtp_port' => 465,							
						'smtp_user' => 'info@globalassignmentexpert.com',//'sales@globalassignmentexpert.com',							
						'smtp_pass' => 'Gae@#123',//'9n7ktj8ohu',						
						'mailtype'  => 'html', 
						'charset'   => 'iso-8859-1'
						);	
		return $config;				
	
}

//===== Mail check code ============//
public function sendMail($email,$subject,$messageHtml){	          
			
			$config = $this->smtpCredential();				
			//$body = $this->load->view('mailer/ordermail', $email,true );
            $this->load->library('email');
            $this->email->initialize($config);
            $this->email->set_mailtype("html");
            $this->email->set_newline("\r\n");
            //To Admin
            $this->email->from('globalassignmentexpert@gmail.com', 'Global Assignment Expert');
            $this->email->to($email);
            $this->email->subject($subject);
            $this->email->message($messageHtml);			
			if($this->email->send()){				
					   return true;	
					}else{
						echo 'hii' .$this->email->print_debugger();
						echo 'mail send error';
						return false;
					}
}


	
	public function about_us(){ 
		$this->load->view('header',['title'=>"Learn About Our Services - GlobalAssignmentExpert",'description'=>"We as a best choice among students of AUS, UK, USA, SG, NZ and leading towards globe to become top Assignment Writing Service Company over the world. Consult our team for highly-qualified and experienced writers to attain academic excellence.",'keywords'=>"About us | GlobalAssignmentexpert.com",'canonical'=>"https://globalassignmentexpert.com/about"]);
		$this->load->view('about');
		$this->load->view('footer');
	}
	
	public function assignment_help(){ 
		$this->load->view('header',['title'=>"Assignment Help Experts Australia | Assignment Help Expert Writers",'description'=>"Get Top Quality Assignment help from GlobalAssignmentexpert.com available at affordable price. Guaranteed better grades with plagiarism free work by 6000+ PhD Assignment helpers in UK, Australia, USA and many others country. Order Now.",'keywords'=>"online assignment help,assignment writing company,academic assignment help,online assignment writing service,assignment help services",'canonical'=>"https://globalassignmentexpert.com/assignment-help"]);
		$this->load->view('assignment-help');
		$this->load->view('footer');
	}
	public function management_assignment_help(){ 
		$this->load->view('header',['title'=>"Management Assignment Help Services - GlobalAssignmentExpert",'description'=>"Need management assignments help? Hire us for highly skilled and qualified management assignment writers to get all your management assignment help at best price.",'keywords'=>"online management assignment help management assignment help online,help with management assignment,management assignment experts,management assignment helper,management assignment writer",'canonical'=>"https://globalassignmentexpert.com/management-assignment-help"]);
		$this->load->view('management-assignment-help');
		$this->load->view('footer');
	}
	public function case_study_assignment(){ 
		$this->load->view('header',['title'=>"#1 Case Study Help Service from 5500+ Expert PhD Professionals",'description'=>"Need help with case study writing? Our Top case study experts provide quality case study help online. Get 100% plagiarism free content & score A+ grade. On-Time Delivery, 24 X 7 Support's, Order Now!",'keywords'=>"case study help,online case study help,case study assignments,online assignment help,management case study,case study assignment essays,case study assignment sample",'canonical'=>"https://globalassignmentexpert.com/case-study-assignment"]);
		$this->load->view('case-study-assignment');
		$this->load->view('footer');
	}
	public function nursing_help(){ 
		$this->load->view('header',['title'=>"Nursing Assignment Help & Writing Services by Top Australian Experts",'description'=>"Get  nursing assignment writing services online by 4500+ Native nursing writers availabe at affordable price.  Secure A+ Grade. 100% Plagiarism Free, Best Price, 24/7 support. Order Now!",'keywords'=>"Nursing Assignment Help,Nursing Assignment Help online,Nursing Assignment Help Australia,Online Nursing Assignment Help ",'canonical'=>"https://globalassignmentexpert.com/nursing-help"]);
		$this->load->view('nursing-help');
		$this->load->view('footer');
	}
		public function cdr_report_writers(){ 
		$this->load->view('header',['title'=>"CDR Report Writers & CDR Writing Help Services For Immigration Australia",'description'=>"CDR Report Writers & CDR Writing Services For immigration australia avail best CDR report writing services by the best CDR report writers  EA approval guaranteed. 6000+ Experts,100% Unique, Delivery within Deadlines.",'keywords'=>"CDR Report Writers, Online CDR Report Writers, CDR Report writing service, Help with CDR Report writing",'canonical'=>"https://globalassignmentexpert.com/cdr-report-writers"]);
		$this->load->view('cdr-report-writers');
		$this->load->view('footer');
	}
		public function cdr_writing_help(){ 
		$this->load->view('header',['title'=>"CDR writing Help by #1 CDR Writing Service | 100% Approval",'description'=>"Need CDR Writing Help in Australia? Hire best cdr writing service provider to get quality & 100% plagiarism free CDR report. 24/7 assistance, affordable Price, On-Time Delivery.",'keywords'=>"CDR writing service, online CDR writing service, CDR writing service experts, Help with CDR writing",'canonical'=>"https://globalassignmentexpert.com/cdr-writing-help"]);
		$this->load->view('cdr-writing-help');
		$this->load->view('footer');
	}
	public function perdisco_accounting_assignment_help(){ 
		$this->load->view('header',['title'=>"Perdisco Accounting Assignment Help | Get Perdisco Accounting Help Online",'description'=>"Get help with perdisco accounting assignment help from GlobalAssignmentExpert at affordable price to excel in your academia. Our team of perdisco accounting assignment experts are best in the World.",'keywords'=>"Perdisco Accounting Assignment Help, Online Perdisco Accounting Assignment Help, Perdisco Accounting Assignment Help experts",'canonical'=>"https://globalassignmentexpert.com/perdisco-accounting-assignment-help"]);
		$this->load->view('perdisco-accounting-assignment-help');
		$this->load->view('footer');
	}
		public function perdisco_assignment_help(){ 
		$this->load->view('header',['title'=>"Best Perdisco Assignment Writing Services | Perdisco Assignment Help by #1 Perdisco Experts",'description'=>"Global Assignment Expert is a prominent company to assist you with effective online perdisco assignment help services. Any time and from anywhere you can connect with us.",'keywords'=>"myob assignment help, Perdisco Practice Sets, Perdisco Accounting Assignment, perdisco assignment help, perdisco assignment experts",'canonical'=>"https://globalassignmentexpert.com/perdisco-assignment-help"]);
		$this->load->view('perdisco-assignment-help');
		$this->load->view('footer');
	}
		public function sage50_assignment_help(){ 
		$this->load->view('header',['title'=>"Sage 50 Assignment Writing Help | Get Help With Sage 50 Assignment Help by Top Sage 50 Assignment Experts ",'description'=>"Are you finding it troublesome writing perdisco sage 50 assignment? Global assignment Expert provides best Sage 50 perdisco assignment help. Avail Sage 50 assignment help from Global assignment Expert at low price to excel in your course.",'keywords'=>"Sage 50 assignment help, Sage 50 practice set help, help with Sage 50 assignment help, online writing, helping with Sage 50, online practice set",'canonical'=>"https://globalassignmentexpert.com/sage50-assignment-help"]);
		$this->load->view('sage50-assignment-help');
		$this->load->view('footer');
	}
		public function myob_assignment_help(){ 
		$this->load->view('header',['title'=>"MYOB Assignment Help for Students | MYOB Perdisco Assignment Help Online",'description'=>"Perdisco MYOB Assignment- Need best quality MYOB assignments to make an impresson before your professors? Avail MYOB Assignment help from our Perdisco MYOB assignment experts",'keywords'=>"MYOB assignment help, MYOB practice set, MYOB helpers, online experts, MYOB assignment, Help with MYOB assignment, Online experts",'canonical'=>"https://globalassignmentexpert.com/myob-assignment-help"]);
		$this->load->view('myob-assignment-help');
		$this->load->view('footer');
	}
	
	
	
	public function dissertation_help(){ 
		$this->load->view('header',['title'=>"Dissertation Help Online - Global Assignment Expert",'description'=>"Get all your dissertation help online at affordable price. Most of Customer Satisfied, High Quality work,100% Plagiarism Free, Guaranteed better Grades, On Time Delivery, Privacy, Chat Now!",'keywords'=>"dissertation help online,dissertation online help ,online dissertation help ,assignment   dissertation help,dissertation assignment help ,Dissertation Help Australia",'canonical'=>"https://globalassignmentexpert.com/dissertation-help"]);
		$this->load->view('dissertation-help');
		$this->load->view('footer');
	}
		public function computer_assignment(){ 
		$this->load->view('header',['title'=>"Computer Assignment Help by Expert in Australia - USA - UK",'description'=>"Best Computer science assignment help offered by GlobalAssignmentexpert.com. Hire our Computer Science experts & reduce your academic pressure.",'keywords'=>"computer assignment help,computer science assignment writer,information technology writing services,computer assignment expert,help with computer science assignment",'canonical'=>"https://globalassignmentexpert.com/computer-assignment"]);
		$this->load->view('computer-assignment');
		$this->load->view('footer');
	}
	public function programming_help(){ 
		$this->load->view('header',['title'=>"Programming Help | Programming Assignment Help by Top Programmer in USA",'description'=>"We provide all type of programming assignment help like C programming help, programming help Java, UML programming help, Perl, SAS programming help etc. at best price. We have a Team of trusted and professional programming experts. 24*7 Support,Timely Delivery. Chat Now!",'keywords'=>"online programming help ,programming help UK,programming assignment help ,programming assignment help Australia",'canonical'=>"https://globalassignmentexpert.com/programming-help"]);
		$this->load->view('programming-help');
		$this->load->view('footer');
	}
	public function computer_network_assignment(){ 
		$this->load->view('header',['title'=>"Computer Network Assignment Help by Top Expert in Australia - USA - UK",'description'=>"Looking for Get Expert Assistance on All Network Security and Computer Networking Assignment Online at affordable price. On-Time Delivery,24*7 Support.",'keywords'=>"Computer Network assignment help,Computer Network assignment ,Computer Network thesi,Computer Network homework help,Computer Network Programme",'canonical'=>"https://globalassignmentexpert.com/computer-network-assignment"]);
		$this->load->view('computer-network-assignment');
		$this->load->view('footer');
	}
	public function essay_writing_help(){ 
		$this->load->view('header',['title'=>"Essay Writing Help By Top USA Essay Writers - 50% Discount",'description'=>"Need quality Essay writing help? Hire for best essay helpers from Australia, UK, USA to get essay writing help from any topic & secure better Grade. 6000+ Experts, High Quality Work,24/7 live Support.",'keywords'=>"essay writing  help,essay help Australia,essay writing helper,essay helper Australia,essay helper online",'canonical'=>"https://globalassignmentexpert.com/essay-writing-help"]);
		$this->load->view('essay-writing-help');
		$this->load->view('footer');
    
	}
	public function law_assignment_help(){ 
		$this->load->view('header',['title'=>"Law Assignment Help Australia - UK - USA & Writing Services",'description'=>"Need Law Assignment Help? GlobalAssignmentexpert.com offers 100% Unique Law Assignment Help online by Law writers from Australia, UK, USA. Affordable Price,Best Quality Work,Guaranteed top Grades,Order Now!",'keywords'=>"law assignment help Australia,online law assignment help,help with law assignment,law assignment help,law assignment writers",'canonical'=>"https://globalassignmentexpert.com/law-assignment-help"]);
		$this->load->view('law-assignment-help');
		$this->load->view('footer');
	}
  
  
  public function free_samples(){ 
		$this->load->view('header',['title'=>"free samples",'description'=>"",'keywords'=>"free-samples",'canonical'=>"https://globalassignmentexpert.com/free-samples"]);
		$this->load->view('free-samples');
		$this->load->view('footer');
	}
  
	public function marketing_assignment_help(){ 
		$this->load->view('header',['title'=>"Marketing Assignment Help for Management Assignment by 5000+ Experts",'description'=>"Get marketing assignment help from our business management assignment writing experts from Australia, USA, UK. Maximum students who have received online marketing assignment service from our experts have come up with a growth oriented career.",'keywords'=>"marketing assignment help,marketing assignment help online,online marketing assignment help,marketing management assignment help",'canonical'=>"https://globalassignmentexpert.com/marketing-assignment-help"]);
		$this->load->view('marketing-assignment-help');
		$this->load->view('footer');
	}
	
	 public function maths_homework_help(){ 
		$this->load->view('header',['title'=>"Math Homework Help Online | Math Assignment Help Australia | Global Assignment Expert ",'description'=>"The complexity of the mathematics subject stream may not lead all scholars to the edge of smoothing.  Our math homework help online always helps in achieving impressive grades.",'keywords'=>"maths homework help, maths assignment help, mathematical homework help australia, mathematical assignment help australia",'canonical'=>"https://globalassignmentexpert.com/maths-homework-help"]);
		$this->load->view('maths-homework-help');
		$this->load->view('footer');
	}
	
	 public function pharmacology_course_help(){ 
		$this->load->view('header',['title'=>"Pharmacology Course Help Online | Top Experts for Pharmacology Course Help ",'description'=>"Looking for pharmacology course help? Get online pharmacology course help from Top PhD experts at GlobalassignmentExpert. Best quality & plagiarism free work.",'keywords'=>"pharmacology course help,medical assignment help,medical assignment writing,medical  assignment Australia,medical science assignment help",'canonical'=>"https://globalassignmentexpert.com/pharmacology-course-help"]);
		$this->load->view('pharmacology-course-help');
		$this->load->view('footer');
	}
	
	 public function business_assignment_help(){ 
		$this->load->view('header',['title'=>"Business Assignment Help For Students | Business Report Writing Help | GlobalAssignmentexpert.com ",'description'=>"Get Zero Plagiarism business assignment writing help from us. Our experts are committed to deliver top quality Business assignment help solutions. We offer writing a business report solution.",'keywords'=>"business assignment help,online business assignment help,help my business assignment,help with business assignment",'canonical'=>"https://globalassignmentexpert.com/business-assignment-help"]);
		$this->load->view('business-assignment-help');
		$this->load->view('footer');
	}
	
	 public function arts_architecture_assignment_help(){ 
		$this->load->view('header',['title'=>"Arts & Architecture Assignment Help Done to Perfection | GlobalAssigmentExpert.com ",'description'=>"Avail the high-quality online Arts & Architecture assignment writing help & services with the top professionals respective to your specified guidelines. 24*7 Assistance. Order now.",'keywords'=>"arts architecture assignment help,arts and architecture assignment help,architecture essay,architecture thesis",'canonical'=>"https://globalassignmentexpert.com/arts-architecture-assignment-help"]);
		$this->load->view('arts-architecture-assignment-help');
		$this->load->view('footer');
	}
	
	 public function audit_assignment_help(){ 
		$this->load->view('header',['title'=>" Audit Assignment Help | Auditing Assignment Writing Service - GlobalAssignmentExpert",'description'=>"Our audit assignment help online provide students top-quality auditing assignments. Avail auditing assignment writing services. Better Grade at Affordable Price.",'keywords'=>"audit assignment,auditing assignment,auditing assignments,auditing assignment help,auditing assignment help online",'canonical'=>"https://globalassignmentexpert.com/audit-assignment-help"]);
		$this->load->view('audit-assignment-help');
		$this->load->view('footer');
	}
	
	 public function engineering_assignment_help(){ 
		$this->load->view('header',['title'=>"Engineering Assignment Help Online | Engineering Assignment Writing Services | Get A+ Grade ",'description'=>"We deliver exclusive engineering assignment help online and engineering homework help to students at Cheap Price,100% unique, Guaranteed Good Grades, On-Time Delivery.",'keywords'=>"engineering assignment help,online engineering assignment help,do my engineering assignment,engineering assignment writer",'canonical'=>"https://globalassignmentexpert.com/engineering-assignment-help"]);
		$this->load->view('engineering-assignment-help');
		$this->load->view('footer');
	}
	
	 public function economics_assignment_help(){ 
		$this->load->view('header',['title'=>" Economics Assignment Writing Help Service | A+ Quality by Best Economics Experts",'description'=>"Get best economics assignment writing help online at Globalassignmentexpert.com. 100 % Unique & Secure. 4500+ Phd Experts, On-time Delivery, Best Price. Order Now",'keywords'=>"economics assignment help,economics assignment answers,online economics assignment help,do my economics assignment",'canonical'=>"https://globalassignmentexpert.com/economics-assignment-help"]);
		$this->load->view('economics-assignment-help');
		$this->load->view('footer');
	}
	
	 public function science_assignment_help(){ 
		$this->load->view('header',['title'=>"Science Assignment Help Online | Science Homework Help by Professional Writers ",'description'=>"Worried about science theories and concepts? Our science assignment help online service is here with 5000+ PhD experts' assistance. Get instant enhance in your grades.",'keywords'=>"science assignment help,science assignment answers,online science assignment help,do my science assignment",'canonical'=>"https://globalassignmentexpert.com/science-assignment-help"]);
		$this->load->view('science-assignment-help');
		$this->load->view('footer');
	}
	
	 public function thesis_help(){ 
		$this->load->view('header',['title'=>"Online Thesis Help | Thesis Writing Service by 5000+ Experts",'description'=>"Need Thesis Help Online? Get online thesis writing help service from GlobalAssignmentexpert.com by Australian PhD thesis writers. Our thesis helpers are skilled professionals with ample training and understanding in thesis writing to deal with any thesis topic.",'keywords'=>"Thesis Help,Thesis assignment Help,Thesis Help online,Thesis writing Help",'canonical'=>"https://globalassignmentexpert.com/thesis-help"]);
		$this->load->view('thesis-help');
		$this->load->view('footer');
	}
	
	 public function research_paper_help(){ 
		$this->load->view('header',['title'=>"Research Paper Help Online | Research Writing Services  by 5000+ Helpers ",'description'=>"Are you looking for research paper help? GlobalAssignmentexpert.com offers exclusive research paper writing help at best price. On-Time delivery  with 100% accuracy, 24/7 Availability. Order Now!",'keywords'=>"research paper help,paper help,research paper helper,help my research paper",'canonical'=>"https://globalassignmentexpert.com/research-paper-help"]);
		$this->load->view('research-paper-help');
		$this->load->view('footer');
	}
	
	 public function accounting_homework_help(){ 
		$this->load->view('header',['title'=>"Accounting Homework Help Online | Accounting Assignment Help | Top Australian Experts ",'description'=>"Accounting homework help Online provided by top Australian Accounting experts at affordable prices. Get A+ grades in your Accounting Assignment Writing. 24*7 Support.",'keywords'=>"Accounting Homework Help,do my accounting homework,accounting assignment help Australia",'canonical'=>"https://globalassignmentexpert.com/accounting-homework-help"]);
		$this->load->view('accounting-homework-help');
		$this->load->view('footer');
	}
	
	 public function finance_assignment_help(){ 
		$this->load->view('header',['title'=>"Finance Assignment Help | Best Price - 100% Trusted & Secure 24/7 ",'description'=>"Get finance assignment writing help online in UK from native PHD writers at best price. Best Quality work, On-time delivery. Order Now!",'keywords'=>"Finance Assignment Help,Finance Homework Help,Finance Projects,University Finance Assignment,College Finance Assignment",'canonical'=>"https://globalassignmentexpert.com/finance-assignment-help"]);
		$this->load->view('finance-assignment-help');
		$this->load->view('footer');
	}
	
	 public function humanities_assignment_help(){ 
		$this->load->view('header',['title'=>"Online Humanities Assignment Help  & Writing Services by Australian Experts-Get A+ Grades ",'description'=>"Need online humanities assignment help? Then you are at the right place to get the best online humanities homework help at affordable prices. Plagiarism Free Work. 24/7 availability.",'keywords'=>"Humaities Assignment Help,Humaities Homework Help,Online Humaities Homework,Humaities Writing Assignment",'canonical'=>"https://globalassignmentexpert.com/humanities-assignment-help"]);
		$this->load->view('humanities-assignment-help');
		$this->load->view('footer');
	}
	
	
	
	
	
	public function faq_asked(){ 
		$this->load->view('header',['title'=>"Faqs | GlobalAssignmentexpert.com",'description'=>"Get accurate and reliable answers to every query you have with this detailed FAQ page. Like Payment Query, includes all.",'keywords'=>"Faqs || GlobalAssignmentexert.com",'canonical'=>"https://globalassignmentexpert.com/faq"]);
		$this->load->view('faq');
		$this->load->view('footer');
	}
    public function terms_of_use(){ 
		$this->load->view('header',['title'=>"Terms of Use for Globalassignmentexpert.com",'description'=>"GlobalAssignmentexpert.com services’ terms of use should be read carefully by all the users of Global Assignment Expert,who wants assignment writing  help,essay writing help or Dissertation writing help or thesis help.",'keywords'=>"Terms of use  | GlobalAssignmentexpert.com",'canonical'=>"https://globalassignmentexpert.com/terms-of-use"]);
		$this->load->view('terms-of-use');
		$this->load->view('footer');
	}
    public function privacy_policy(){ 
		$this->load->view('header',['title'=>"Strictly Followed Privacy Policies of the Company",'description'=>"The GlobalAssignmentexpert.com policy emphasizes the security of customer details. Legal, third-party interference is strictly discouraged according to GlobalAssignmentexpert.com.",'keywords'=>"Privacy Policy | GlobalAssignmentexpert.com",'canonical'=>"https://globalassignmentexpert.com/privacy-policy"]);
		$this->load->view('privacy-policy');
		$this->load->view('footer');
	}
	
	    public function refund_policy(){ 
		$this->load->view('header',['title'=>"Rivision & Refund Policy | GlobalAssignmentExpert.com",'description'=>"Revision and Refund policy GlobalAssignmentExpert",'keywords'=>"Refund policy global assignment expert",'canonical'=>"https://globalassignmentexpert.com/refund-policy"]);
		$this->load->view('refund-policy');
		$this->load->view('footer');
	}
	
	 public function assignment_writing_help_australia(){ 
	 
	    return redirect(base_url('au'));
		/*$this->load->view('header',['title'=>"Online Assignment help by Australias' No.1  Assignment Helpers ",'description'=>"Get assignment help online and Assignment writing services Australia facility by Top Rated Australian Experts. It provides appropriate assistance to students of any University for all subjects",'keywords'=>"online Assignment help Australia,Australian assignment help ,assignment helper Australia,assignment help Australia, help with assignment writing",'canonical'=>"https://globalassignmentexpert.com/au"]);
		$this->load->view('assignment-writing-help-australia');
		$this->load->view('footer');*/
	}
	
	//==========================START:: new Au function by robin on 03-09-2021===================================================//
	 public function au(){ 
		$this->load->view('header',['title'=>"Online Assignment help by Australias' No.1  Assignment Helpers ",'description'=>"Get assignment help online and Assignment writing services Australia facility by Top Rated Australian Experts. It provides appropriate assistance to students of any University for all subjects",'keywords'=>"online Assignment help Australia,Australian assignment help ,assignment helper Australia,assignment help Australia, help with assignment writing",'canonical'=>"https://globalassignmentexpert.com/au"]);
		$this->load->view('assignment-writing-help-australia');
		$this->load->view('footer');
	}
//===========================End Au Function by  robin on 3-09-2021==========================================//
	
		 public function assignment_writing_help_canada(){
           return redirect(base_url('ca'));
		 }
            public function ca(){		 
		$this->load->view('header',['title'=>"No. 1 Assignment helpers Canada | A+ Quality Essay Help Service",'description'=>"Avail assignment help service in Canada at affordable prices. We are best assignment writing service provider in Canada. Get 24/7 help from 6000+ professionls.",'keywords'=>"assignment writing help Canada,Online Assignment Help  Canada,Assignment Help Canada,Canada Assignment Help,help with assignment writing",'canonical'=>"https://globalassignmentexpert.com/ca"]);
		$this->load->view('assignment-writing-help-canada');
		$this->load->view('footer');
	}
			 public function assignment_writing_help_uae(){
				 return redirect(base_url('ae'));
			 }
           public function ae(){			 
		$this->load->view('header',['title'=>"Assignment Help UAE: Upto 30% OFF | Plagiarism Free Content",'description'=>"24*7 Assignment Writing Help from Global Assignment Expert. Millions of Assignment Completed, 5000+ Phd Experts. Free Quote.",'keywords'=>"assignment help uae,assignment help in uae,assignment writing help uae,uae assignment help,assignment writers uae",'canonical'=>"https://globalassignmentexpert.com/ae"]);
		$this->load->view('assignment-writing-help-uae');
		$this->load->view('footer');
	}
			 public function assignment_writing_services_usa(){
				 return redirect(base_url('us'));
			 }
          public function us(){			 
		$this->load->view('header',['title'=>"Assignment Writing Help USA from Assignment Writer USA @ Low Price",'description'=>"Get top Quality Assignment help service from GlobalAssignmentExpert.com at lowest price and on-time delivery. Guaranteed better grades by top rated  Assignment helpers in USA",'keywords'=>"online Assignment Help,Usa Assignment Help,Assignment Help Usa,Assignment Writing Services Usa",'canonical'=>"https://globalassignmentexpert.com/us"]);
		$this->load->view('assignment-writing-services-usa');
		$this->load->view('footer');
	}
	
			 public function assignment_writing_help_uk(){
				 return redirect(base_url('uk'));
			 }

		public function uk(){			 
		$this->load->view('header',['title'=>"Assignment Writing Help Services by Professional Writers in UK",'description'=>"Get 100% Plagiarism-free assignment help and customised essay help in UK. Hire Our Best PhD experts & Secure A+ Grades in assignment. 24/7 Assistance, Order Now !",'keywords'=>"assignment help uk ,assignment writing help uk,online assignment help uk,assignment help online uk,,uk assignment help,assignment help price",'canonical'=>"https://globalassignmentexpert.com/uk"]);
		$this->load->view('assignment-writing-help-uk');
		$this->load->view('footer');
	}
	
			 public function assignment_help_singapore(){
				 return redirect(base_url('sg'));
			 }
          public function sg(){			 
		$this->load->view('header',['title'=>"Assignment Help Singapore- #1 Essay & Assignment Writing Help Services ",'description'=>" If you are exploring any type of essay & assignment help in Singapore. You must choose GlobalAssignmentexpert.com. Avail the complete academic writing help by 5000+ PhD Writers .",'keywords'=>"assignment help,writing help,online assignment help,best assignment service,finance assignment help,assignment university online,",'canonical'=>"https://globalassignmentexpert.com/sg"]);
		$this->load->view('assignment-help-singapore');
		$this->load->view('footer');
	}
	
			 public function assignment_help_newzealand(){
				 return redirect(base_url('nz'));
			 }
		public function nz(){			 
		$this->load->view('header',['title'=>"Online Assignment Help New Zealand | Essay & Assignment Writing Help NZ- 100% Original Content ",'description'=>"GlobalAssignmentexpert is the best Assignment help & Essay writing help service provider in New Zealand. 4500+ Ph.D. Experts, 100% unique, On-Time Delivery, 24 X 7 Live Assistance.",'keywords'=>"assignment help,writing help,online assignment help,best assignment service,finance assignment help,assignment university online,essay assignment",'canonical'=>"https://globalassignmentexpert.com/nz"]);
		$this->load->view('assignment-help-newzealand');
		$this->load->view('footer');
	}
	
			 public function assignment_help_malaysia(){
				 return redirect(base_url('my'));
			 }
		public function my(){			 
		$this->load->view('header',['title'=>"Assignment Help Malaysia | Assignment Writing Help 24*7-GlobalAssignmentExpert ",'description'=>"Score better grades by hiring assignment help expert in Malaysia. Get complete assignment writing help with Zero-plagiarism. We promise guaranteed money refund policy. On-Time Delivery!",'keywords'=>"assignment help,writing help,online assignment help,best assignment service,finance assignment help,assignment university online,essay assignment,expert assignment help",'canonical'=>"https://globalassignmentexpert.com/my"]);
		$this->load->view('assignment-help-malaysia');
		$this->load->view('footer');
	}
	
			 public function reviews(){ 
		$this->load->view('header',['title'=>"Recent Reviews - Global Assignment Expert",'description'=>"Read globalassignmentexpert Reviews given by the Students",'keywords'=>"global assignment expert Review,global assignment expert reliable,assignment help reviews,uk assignment help review",'canonical'=>"https://globalassignmentexpert.com/reviews"]);
		$this->load->view('reviews');
		$this->load->view('footer');
	}
	
	
	    public function offers(){ 
		$this->load->view('header',['title'=>"Special Offers on All Assignment Orders",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('offers');
		$this->load->view('footer');
	}
	
	    public function samples_assignment(){ 
		$this->load->view('header',['title'=>"free-samples",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('free-samples');
		$this->load->view('footer');
	}
	 public function nursing_care_plan(){ 
		$this->load->view('header',['title'=>"nursing-care-plan",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('nursing-care-plan');
		$this->load->view('footer');
	}
	 public function cross_cultural_communications(){ 
		$this->load->view('header',['title'=>"cross-cultural-communications",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('cross-cultural-communications');
		$this->load->view('footer');
	}
	 public function strategic_change_project_plan(){ 
		$this->load->view('header',['title'=>"strategic-change-project-plan",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('strategic-change-project-plan');
		$this->load->view('footer');
	 }	
	 public function implementation_of_psychology_in_business(){ 
		$this->load->view('header',['title'=>"implementation-of-psychology-in-business",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('implementation-of-psychology-in-business');
		$this->load->view('footer');
	}
	 public function managing_it_capability(){ 
		$this->load->view('header',['title'=>"managing-it-capability",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('managing-it-capability');
		$this->load->view('footer');
	}
	 public function essay_on_the_challenges_of_talent(){ 
		$this->load->view('header',['title'=>"essay-on-the-challenges-of-talent ",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('essay-on-the-challenges-of-talent ');
		$this->load->view('footer');
	}
	 public function critical_analysis_of_interplay(){ 
		$this->load->view('header',['title'=>"critical-analysis-of-interplay",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('critical-analysis-of-interplay');
		$this->load->view('footer');
	}
	 public function case_study(){ 
		$this->load->view('header',['title'=>"case-study",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('case-study');
		$this->load->view('footer');
	}
	 public function analysis_of_case_study(){ 
		$this->load->view('header',['title'=>"analysis-of-case-study",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('analysis-of-case-study');
		$this->load->view('footer');
	}
	 public function clinical_case_conference_report(){ 
		$this->load->view('header',['title'=>"clinical-case-conference-report ",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('clinical-case-conference-report');
		$this->load->view('footer');
	}
	 public function the_effect_of_local_news_media(){ 
		$this->load->view('header',['title'=>"the-effect-of-local-news-media",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('the-effect-of-local-news-media');
		$this->load->view('footer');
	}
	 public function tangent_plane_and_approximation(){ 
		$this->load->view('header',['title'=>"tangent-plane-and-approximation",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('tangent-plane-and-approximation');
		$this->load->view('footer');
	}
	 public function financial_analysis(){ 
		$this->load->view('header',['title'=>"financial-analysis",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('financial-analysis');
		$this->load->view('footer');
	}
	 public function strategic_management(){ 
		$this->load->view('header',['title'=>"strategic-management",'description'=>"Order 2nd assignment within 48 hours and get upto 25% Discount.Order 2500 Words assignment and Get 1st 500 Words Free ",'keywords'=>"global assignment expert offers,assignment help special offers,assignment help offer,assignment offers ",'canonical'=>"https://globalassignmentexpert.com/offers"]);
		$this->load->view('strategic_management');
		$this->load->view('footer');
	}
	public function contact_us(){ 
 
		$this->form_validation->set_rules('fname','First Name','required|trim');
		$this->form_validation->set_rules('lname','Last Name','required|trim');	
		$this->form_validation->set_rules('emails','Email','trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('subject','Subject','required|trim');
		$this->form_validation->set_rules('message_contact','Message','required|trim');
		
		if($this->form_validation->run()==false){
			
		}else{
		    $this->load->library('email',$emailConfig);
			// $this->load->library('email');
			$message_html = '
                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1" />
                <title>Global Assignment Experts</title>
                
                <style type="text/css">
                /* Take care of image borders and formatting, client hacks */
                img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
                a img { border: none; }
                table { border-collapse: collapse !important;}
                #outlook a { padding:0; }
                .ReadMsgBody { width: 100%; }
                .ExternalClass { width: 100%; }
                .backgroundTable { margin: 0 auto; padding: 0; width: 100% !important; }
                table td { border-collapse: collapse; }
                .ExternalClass * { line-height: 115%; }
                .container-for-gmail-android { min-width: 600px; }
                
                
                /* General styling */
                * {
                  font-family:  Arial, sans-serif;
                }
                
                body {
                  -webkit-font-smoothing: antialiased;
                  -webkit-text-size-adjust: none;
                  width: 100% !important;
                  margin: 0 !important;
                  height: 100%;
                  color: #676767;
                }
                
                td {
                  font-family: Helvetica, Arial, sans-serif;
                  font-size: 14px;
                  color: #777777;
                  text-align: center;
                  line-height: 21px;
                }
                
                a {
                  color: #676767;
                  text-decoration: none !important;
                }
                
                .pull-left {
                  text-align: left;
                }
                
                .pull-right {
                  text-align: right;
                }
                
                .header-lg,
                .header-md,
                .header-sm {
                  font-size: 32px;
                  font-weight: 700;
                  line-height: normal;
                  padding: 0px 0 0;
                  color: #4d4d4d;
                }
                
                .header-md {
                  font-size: 24px;
                }
                
                .header-sm {
                  padding: 5px 0;
                  font-size: 18px;
                  line-height: 1.3;
                }
                
                .content-padding {
                  padding: 0px 0 5px;
                }
                
                .mobile-header-padding-right {
                  width: 290px;
                  text-align: right;
                  padding-left: 10px;
                }
                
                .mobile-header-padding-left {
                  width: 290px;
                  text-align: left;
                  padding-left: 10px;
                }
                
                .free-text {
                  width: 100% !important;
                  padding: 10px 60px 0px;
                }
                
                .button {
                  padding: 10px 0;
                }
                
                .mini-block {
                  border: 1px solid #e5e5e5;
                  border-radius: 5px;
                  background-color: #ffffff;
                  padding: 12px 15px 15px;
                  text-align: left;
                  width: 253px;
                }
                
                .mini-container-left {
                  width: 278px;
                  padding: 10px 0 10px 15px;
                }
                
                .mini-container-right {
                  width: 278px;
                  padding: 10px 14px 10px 15px;
                }
                
                .product {
                  text-align: left;
                  vertical-align: top;
                  width: 175px;
                }
                
                .total-space {
                  padding-bottom: 8px;
                  display: inline-block;
                }
                
                .item-table {
                  padding: 50px 20px;
                  width: 560px;
                }
                
                .item {
                  width: 300px;
                }
                
                .mobile-hide-img {
                  text-align: left;
                  width: 125px;
                }
                
                .mobile-hide-img img {
                  border: 1px solid #e6e6e6;
                  border-radius: 4px;
                }
                
                .title-dark {
                  text-align: left;
                  border-bottom: 1px solid #cccccc;
                  color: #4d4d4d;
                  font-weight: 700;
                  padding-bottom: 5px;
                }
                
                .item-col {
                  padding-top: 20px;
                  text-align: left;
                  vertical-align: top;
                }
                
                .force-width-gmail {
                  min-width:600px;
                  height: 0px !important;
                  line-height: 1px !important;
                  font-size: 1px !important;
                }
                h1 {
                text-align: center;
                font-size: 22px;
                font-weight: bold;
                line-height: 24px;
                }
                .header-lg {
                text-align: left!important;
                font-size: 20px!important;
                font-weight: 700!important;
                line-height: normal!important;
                padding: 0px 38px 0px!important;
                }
                </style>
                
                <style type="text/css" media="screen">
                @import url(http://fonts.googleapis.com/css?family=Arial:400,700);
                </style>
                
                
                
                <style type="text/css" media="only screen and (max-width: 480px)">
                /* Mobile styles */
                @media only screen and (max-width: 480px) {
                
                  table[class*="container-for-gmail-android"] {
                    min-width: 290px !important;
                    width: 100% !important;
                  }
                
                  img[class="force-width-gmail"] {
                    display: none !important;
                    width: 0 !important;
                    height: 0 !important;
                  }
                
                  table[class="w320"] {
                    width: 320px !important;
                  }
                
                  td[class*="mobile-header-padding-left"] {
                    width: 160px !important;
                    padding-left: 0 !important;
                  }
                
                  td[class*="mobile-header-padding-right"] {
                    width: 160px !important;
                    padding-right: 0 !important;
                  }
                
                  td[class="header-lg"] {
                    font-size: 24px !important;
                    padding-bottom: 5px !important;
                  }
                
                  td[class="content-padding"] {
                    padding: 5px 0 5px !important;
                  }
                
                   td[class="button"] {
                    padding: 5px 5px 30px !important;
                  }
                
                  td[class*="free-text"] {
                    padding: 10px 18px 30px !important;
                  }
                
                  td[class~="mobile-hide-img"] {
                    display: none !important;
                    height: 0 !important;
                    width: 0 !important;
                    line-height: 0 !important;
                  }
                
                  td[class~="item"] {
                    width: 140px !important;
                    vertical-align: top !important;
                  }
                
                  td[class~="quantity"] {
                    width: 50px !important;
                  }
                
                  td[class~="price"] {
                    width: 90px !important;
                  }
                
                  td[class="item-table"] {
                    padding: 30px 20px !important;
                  }
                
                  td[class="mini-container-left"],
                  td[class="mini-container-right"] {
                    padding: 0 15px 15px !important;
                    display: block !important;
                    width: 290px !important;
                  }
                
                }
                </style>
                </head>
                
                <body bgcolor="#ffffff">
                <table align="center"  style="width:600px;margin:0 auto;padding:0px;border: 3px solid #00bcd4;"cellpadding="0" cellspacing="0" class="container-for-gmail-android" width="100%">
                <tr>
                <td align="left" valign="top" width="100%" style="background:repeat-x url(https://globalassignmentexpert.com/img/bg-img1.jpg) #ffffff;">
                  <center>
                  <img src="https://globalassignmentexpert.com/img/transparent.png" class="force-width-gmail">
                    <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff" background="https://globalassignmentexpert.com/img/bg-img.jpg" style="background-color:transparent">
                      <tr>
                        <td width="100%" height="80" valign="top" style="text-align: center; vertical-align:middle;">
                      
                          <center>
                            <table cellpadding="0" cellspacing="0" width="600" class="w320">
                              <tr>
                                <td class="pull-left mobile-header-padding-left" style="vertical-align: middle;">
                                  <a href="https://globalassignmentexpert.com/"target="_blank"><img width="126" src="https://globalassignmentexpert.com/assets/images/logo2.png" alt="globalassignmentexpert"></a>
                                </td>
                                <td class="pull-right mobile-header-padding-right" style="color: #4d4d4d;">
                                  <a href=""><img width="35" height="35" src="https://globalassignmentexpert.com/img/fb-icons.png" alt="Facebook" /></a>
                                  <a href=""><img width="38" height="38" src="https://globalassignmentexpert.com/img/twitter_icon.png" alt="Twitter" /></a>
                                  <a href=""><img width="38" height="38" src="https://globalassignmentexpert.com/img/insta-icon.png" alt="instagram" /></a>
                				   <a href=""><img width="35" height="35" src="https://globalassignmentexpert.com/img/google_icons.png" alt="googleplus" /></a>
                                </td>
                              </tr>
                            </table>
                          </center>
                          <!--[if gte mso 9]>
                          </v:textbox>
                        </v:rect>
                        <![endif]-->
                        </td>
                      </tr>
                    </table>
                  </center>
                </td>
                </tr>
                <tr>
                <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;" class="content-padding">
                    <table cellspacing="0" cellpadding="0" width="600" class="w320">
                	 <center>
                	  <tr>
                        <td class="header-lg">
                          <h1>Dear '.$fname.'</h1>
                        </td>
                      </tr>
                      <tr>
                        <td class="header-lg">
                          <p style="color:#5b5f65; font-size:14px; text-align:justify;font-family: Verdana, Geneva, sans-serif">      
                             Thank you for ordering with Global Assignment Experts, We have received your order. 
                              Our Experts are reviewing your order and requirements. We will get back to you shortly.
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td class="button">
                          <div>
                		  <a href="https://globalassignmentexpert.com/" target="_blank" style="background-color:#00bcd4;border-radius:3px;color:#ffffff;display:inline-block;font-family:Cabin, Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:35px;text-align:center;text-decoration:none;width:117px;-webkit-text-size-adjust:none;mso-hide:all;font-weight: 700;">Chat Now</a></div>
                        </td>
                      </tr>
                	    <tr>
                		  <td style="padding-top:0px;">
                		  <p style="color:black; text-align: left; font-family: Comic Sans MS, Textile, cursive; font-weight: bold;padding: 0px 38px 0px!important;">
                		  Regards.
                		  <br>
                		 Global Assignment Expert
                		  </p>
                		  </td>
                         </tr>
                    </table>
                  </center>
                </td>
                </tr>
                <tr>
                <td align="center" valign="top" width="100%" style="background-color: #f7f7f7; height: 100px;">
                  <center>
                    <table cellspacing="0" cellpadding="0" width="600" class="w320">
                      <tr>
                        <td style="padding: 10px 0 0px">
                          <strong><a href="https://globalassignmentexpert.com/" target="_blank" style="color:#00bcd4;">GlobalAssignmentExpert</a></strong><br />
                          29 Ceres road Plumsead <br>
                          SE181HR <br><br>
                        </td>
                      </tr>
                	  <tr>
                	   <td style="text-align: center;font-size: 12px; padding: 10px 0 10px;border-top:1px solid #b1b1b1;color:#000">
                		   Email  : <a href="mailto:globalassignmentexpert@gmail.com" target="_blank" style="color:#00bcd4;">globalassignmentexpert@gmail.com</a> |  Phone : <a href="tel:+447557887119" target="_blank" style="color:#00bcd4;">+447-557-887-119</a>
                	   </td>
                      </tr>
                	  
                    </table>
                  </center>
                </td>
                </tr>
                </table>
                </div>
                </body>
                </html>';
                               
					
			//$this->email->from(set_value('email'),set_value('fname'));
			$this->email->set_newline('\\r\
');
		   
		 $emailConfig['mailtype'] = 'html';
		$this->email->initialize($emailConfig);
		
			$this->email->from('globalassignmentexpert@gmail.com', 'Global Assignment Expert');
			$email_to		 =	$this->input->post('emails');
			$fname		     =	ucwords($this->input->post('fname'));
			$lname			 =	$this->input->post('lname');
			$subject         =   $this->input->post("subject");
			$message_contact =	($this->input->post('message_contact'));		   
		 
			$this->email->to($email_to);
			$this->email->subject($subject);
            $this->email->message($message_html);
        
        if ($this->email->send()) {
            $this->session->set_flashdata('message1', " Message Sent Successfully, We will contact You soon.");
		   $this->load->library('email',$emailConfig);
			// $this->load->library('email');
			
			//$this->email->from(set_value('email'),set_value('fullname'));
			$this->email->set_newline('\\r\
');
               $emailConfig['mailtype'] = 'html';
		       $this->email->initialize($emailConfig);
		   
			$this->email->from('globalassignmentexpert@gmail.com', 'Global Assignment Expert');
			
		
			$this->email->to('globalassignmentexpert@gmail.com');
		
			$this->email->subject('We will contact to you soon - Global Assignment Expert');
			$htmlContent1='
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Global Assignment Experts</title>

  <style type="text/css">
    /* Take care of image borders and formatting, client hacks */
    img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
    a img { border: none; }
    table { border-collapse: collapse !important;}
    #outlook a { padding:0; }
    .ReadMsgBody { width: 100%; }
    .ExternalClass { width: 100%; }
    .backgroundTable { margin: 0 auto; padding: 0; width: 100% !important; }
    table td { border-collapse: collapse; }
    .ExternalClass * { line-height: 115%; }
    .container-for-gmail-android { min-width: 600px; }


    /* General styling */
    * {
      font-family: Helvetica, Arial, sans-serif;
    }

    body {
      -webkit-font-smoothing: antialiased;
      -webkit-text-size-adjust: none;
      width: 100% !important;
      margin: 0 !important;
      height: 100%;
      color: #676767;
    }

    td {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #777777;
      text-align: center;
      line-height: 21px;
    }

    a {
      color: #676767;
      text-decoration: none !important;
    }

    .pull-left {
      text-align: left;
    }

    .pull-right {
      text-align: right;
    }

    .header-lg,
    .header-md,
    .header-sm {
      font-size: 32px;
      font-weight: 700;
      line-height: normal;
      padding: 0px 0 0;
      color: #4d4d4d;
    }

    .header-md {
      font-size: 24px;
    }

    .header-sm {
      padding: 18px 0;
      font-size: 15px;
      line-height: 1.3;
    }

    .content-padding {
      padding: 0px 0 5px;
    }

    .mobile-header-padding-right {
      width: 290px;
      text-align: right;
      padding-left: 10px;
    }

    .mobile-header-padding-left {
      width: 290px;
      text-align: left;
      padding-left: 10px;
    }

    .free-text {
      width: 100% !important;
      padding: 10px 60px 0px;
    }

    .button {
      padding: 10px 0;
    }

    .mini-block {
      border: 1px solid #e5e5e5;
      border-radius: 5px;
      background-color: #ffffff;
      padding: 12px 15px 15px;
      text-align: left;
      width: 253px;
    }

    .mini-container-left {
      width: 278px;
      padding: 10px 0 10px 15px;
    }

    .mini-container-right {
      width: 278px;
      padding: 10px 14px 10px 15px;
    }

    .product {
      text-align: left;
      vertical-align: top;
      width: 175px;
    }

    .total-space {
      padding-bottom: 8px;
      display: inline-block;
    }

    .item-table {
      padding: 50px 20px;
      width: 560px;
    }

    .item {
      width: 300px;
    }

    .mobile-hide-img {
      text-align: left;
      width: 125px;
    }

    .mobile-hide-img img {
      border: 1px solid #e6e6e6;
      border-radius: 4px;
    }

    .title-dark {
      text-align: left;
      border-bottom: 1px solid #cccccc;
      color: #4d4d4d;
      font-weight: 700;
      padding-bottom: 5px;
    }

    .item-col {
      padding-top: 20px;
      text-align: left;
      vertical-align: top;
    }

    .force-width-gmail {
      min-width:600px;
      height: 0px !important;
      line-height: 1px !important;
      font-size: 1px !important;
    }
    h1 {
    text-align: center;
    font-size: 22px;
    font-weight: bold;
    line-height: 24px;
  }
  .header-lg {
    text-align: left!important;
    font-size: 20px!important;
    font-weight: 700!important;
    line-height: normal!important;
    padding: 0px 38px 0px!important;
  }
  </style>

  <style type="text/css" media="screen">
    @import url(http://fonts.googleapis.com/css?family=Arial:400,700);
  </style>
  <style type="text/css" media="only screen and (max-width: 480px)">
    /* Mobile styles */
    @media only screen and (max-width: 480px) {

      table[class*="container-for-gmail-android"] {
        min-width: 290px !important;
        width: 100% !important;
      }

      img[class="force-width-gmail"] {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
      }

      table[class="w320"] {
        width: 320px !important;
      }

      td[class*="mobile-header-padding-left"] {
        width: 160px !important;
        padding-left: 0 !important;
      }

      td[class*="mobile-header-padding-right"] {
        width: 160px !important;
        padding-right: 0 !important;
      }

      td[class="header-lg"] {
        font-size: 24px !important;
        padding-bottom: 5px !important;
      }

      td[class="content-padding"] {
        padding: 5px 0 5px !important;
      }

       td[class="button"] {
        padding: 5px 5px 30px !important;
      }

      td[class*="free-text"] {
        padding: 10px 18px 30px !important;
      }

      td[class~="mobile-hide-img"] {
        display: none !important;
        height: 0 !important;
        width: 0 !important;
        line-height: 0 !important;
      }

      td[class~="item"] {
        width: 140px !important;
        vertical-align: top !important;
      }

      td[class~="quantity"] {
        width: 50px !important;
      }

      td[class~="price"] {
        width: 90px !important;
      }

      td[class="item-table"] {
        padding: 30px 20px !important;
      }

      td[class="mini-container-left"],
      td[class="mini-container-right"] {
        padding: 0 15px 15px !important;
        display: block !important;
        width: 290px !important;
      }

    }
  </style>
</head>

<body bgcolor="#ffffff">
<table align="center"  style="width:600px;margin:0 auto;padding:0px;border: 3px solid #00bcd4;"cellpadding="0" cellspacing="0" class="container-for-gmail-android" width="100%">
  <tr>
    <td align="left" valign="top" width="100%" style="background:repeat-x url(https://globalassignmentexpert.com/img/bg-img1.jpg) #ffffff;">
      <center>
      <img src="https://globalassignmentexpert.com/img/transparent.png" class="force-width-gmail">
        <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff" background="https://globalassignmentexpert.com/img/bg-img.jpg" style="background-color:transparent">
          <tr>
            <td width="100%" height="80" valign="top" style="text-align: center; vertical-align:middle;">
          
              <center>
                <table cellpadding="0" cellspacing="0" width="600" class="w320">
                  <tr>
                    <td class="pull-left mobile-header-padding-left" style="vertical-align: middle;">
                      <a href="https://globalassignmentexpert.com/"target="_blank"><img width="126" src="https://globalassignmentexpert.com/assets/images/logo2.png" alt="globalassignmentexpert"></a>
                    </td>
                    <td class="pull-right mobile-header-padding-right" style="color: #4d4d4d;">
                      <a href=""><img width="35" height="35" src="https://globalassignmentexpert.com/img/fb-icons.png" alt="Facebook" /></a>
                      <a href=""><img width="38" height="38" src="https://globalassignmentexpert.com/img/twitter_icon.png" alt="Twitter" /></a>
                      <a href=""><img width="38" height="38" src="https://globalassignmentexpert.com/img/insta-icon.png" alt="instagram" /></a>
					   <a href=""><img width="35" height="35" src="https://globalassignmentexpert.com/img/google_icons.png" alt="googleplus" /></a>
                    </td>
                  </tr>
                </table>
              </center>
              <!--[if gte mso 9]>
              </v:textbox>
            </v:rect>
            <![endif]-->
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;" class="content-padding">
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
		 <center>
		  <tr>
            <td class="header-lg">
              <h1>Students Details</h1>
            </td>
          </tr>
          
          <tr>
            <td class="w320">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody><tr>
                  <td class="mini-container-left">
                    <table cellpadding="0" cellspacing="0" width="100%">
                      <tbody><tr>
                        <td class="mini-block-padding">
                          <table cellspacing="0" cellpadding="0" width="100%" style="border-collapse:separate !important;">
                            <tbody><tr>
                              <td class="mini-block">
                                <span class="header-sm">First Name</span><br>
                                '.$fname.' <br><br>
                                <span class="header-sm">Last Name</span><br>
                                '.$lname.' <br><br>
								 <span class="header-sm">Email</span> <br>
                               '.$email_to.'<br><br>
                                <span class="header-sm">Subject</span><br>
                                '.$subject.' <br><br>								
								<span class="header-sm">Message</span><br>
                                '.$message_contact.' <br><br>
                              </td>
                            </tr>
                          </tbody></table>
                        </td>
                      </tr>
                    </tbody></table>
                  </td>
                 
                </tr>
              </tbody></table>
            </td>
          </tr>
		    <tr>
			  <td style="padding-top:0px;">
			  <p style="color:black; text-align: left; font-family: Comic Sans MS, Textile, cursive; font-weight: bold;padding: 0px 38px 0px!important;">
			  Regards.
			  <br>
			 Global Assignment Expert
			  </p>
			  </td>
             </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7; height: 100px;">
      <center>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
          <tr>
            <td style="padding: 10px 0 0px">
              <strong><a href="https://globalassignmentexpert.com/" target="_blank" style="color:#00bcd4;">GlobalAssignmentExpert</a></strong><br />
              29 Ceres road Plumsead <br>
              SE181HR <br><br>
            </td>
          </tr>
		  <tr>
		   <td style="text-align: center;font-size: 12px; padding: 10px 0 10px;border-top:1px solid #b1b1b1;color:#000">
			   Email  : <a href="mailto:globalassignmentexpert@gmail.com" target="_blank" style="color:#00bcd4;">globalassignmentexpert@gmail.com</a> |  Phone : <a href="tel:+447557887119" target="_blank" style="color:#00bcd4;">+447-557-887-119</a>
		   </td>
          </tr>
		  
        </table>
      </center>
    </td>
  </tr>
</table>
</div>
</body>
</html>';
			$this->email->message($htmlContent1);
			$this->email->send();
		
            return redirect('contact');
        }
			else{
				
				$this->session->set_flashdata('message1', " Error in sending Email, we will get back to you soon");
				return redirect('contact');
			}
			
			return redirect("contact");
		}
		$this->load->view('header',['title'=>"Contact US - GlobalAssignmentExpert.com",'description'=>"At GlobalAssignmentExpert,Our Experts are Available 24/7 for your help. Chat now!",'keywords'=>"Global Assignment expert,Assignment Exprt,Online Assignment Help,Assignment Writing Help UK",'canonical'=>"https://globalassignmentexpert.com/contact"]);
		$this->load->view('contact');
		$this->load->view('footer');
	}
	
	
	
	
	 public function index(){ 
         
		$this->form_validation->set_rules('fullname1','FullName','required|trim');
		$this->form_validation->set_rules('doctype_id','Type of Assignment','required|trim');	
		$this->form_validation->set_rules('papertopic1','Paper Topic','required|trim');
		
		$this->form_validation->set_rules('email1','Email','trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('phone1','Phone','required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('urgency','Select Urgency','required|trim');
		$this->form_validation->set_rules('currencies','Currency','required|trim');
		$this->form_validation->set_rules('numpages','Select Pages','required|trim');
		
		if($this->form_validation->run()==false){			
			
		}else{
			
			//===========START:: new code added by robin rajput for sending mail on 07-06-2021===============//
			$email_to		=	$this->input->post('email1');
			$fullname		=	ucwords($this->input->post('fullname1'));
			$phone			=	$this->input->post('phone1');
			$doctype_id     =   $this->input->post("doctype_id");
			$papertopic		=	($this->input->post('papertopic1'));		   
		    $numpages       =   $this->input->post("numpages");
			$urgency        =   $this->input->post("urgency");
			$currency       =   $this->input->post("currencies");
			
			$orderArr = array(
			                 'email_to'=>$email_to,
							 'fullname'=>$fullname,
							 'phone'=>$phone,
							 'doctype_id'=>$doctype_id,
							 'papertopic'=>$papertopic,
							 'numpages'=>$numpages,
							 'urgency'=>$urgency,
							 'currency'=>$currency
			                 );
							 
			//print_r($orderArr);die;
			
			$messageHtml = $this->load->view('mailer/ordermail', '',true );
			
			$response = $this->sendMail($email_to,$papertopic,$messageHtml);
			//print_r($response);die;
			if($response){
			  $this->session->set_flashdata('message1', " Message Sent Successfully, We will contact You soon. ");
			  
			  //========START:: mail for admin side by robin on 11-06-2021===============//
			  $adminEmail = 'globalassignmentexpert@gmail.com';
			  $subject = 'We will contact to you soon - Global Assignment Expert';
			  		  
			  $adminMsg = $this->load->view('mailer/adminorder_mail', $orderArr,true );
			  
			  $adminResponse = $this->sendMail($adminEmail,$subject,$adminMsg);
			  
	          return redirect("home");  
			}else{
				
				$this->session->set_flashdata('message1', " Error in sending Email, we will get back to you soon");
				return redirect('home');
			}
				
		   //===========END:: code =====================//
			return redirect('home');
			
		}
		$this->load->view('header',['title'=>"Assignment Help | Online Assignment Writing Service @30% Discount",'description'=>"Global Assignment Expert is the best platform for writing services in UK, USA, and Australia. With more than 6000+ online writers, we lead the industry for trustworthiness.",'keywords'=>"assignment expert uk,global assignment help,online assignment help uk,assignment help online,assignment writing service uk,global assignment expert", 'canonical'=>"https://globalassignmentexpert.com"]);
		$this->load->view('home');
		$this->load->view('footer');
	}
	
	
    public function order_us(){ 
		$this->form_validation->set_rules('fullname','FullName','required|trim');
		$this->form_validation->set_rules('country','Country','required|trim');
		$this->form_validation->set_rules('papertopic','PaperTopic','required|trim');	
		$this->form_validation->set_rules('select_pages','Select Pages','required|trim');
		
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('phone','Phone','required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('select_urgent','Select Urgent','required|trim');
		$this->form_validation->set_rules('currency','Currency','required|trim');
		$this->form_validation->set_rules('type_of_paper','Type of Paper','required|trim');
		$this->form_validation->set_rules('description','Description','required|trim');
	
		if($this->form_validation->run()==false){
			
		}else{
			$email_to		=	htmlentities(trim($this->input->post('email')));
			$fullname_order		=	ucwords($this->input->post('fullname'));
			$phone			=	$this->input->post('phone');
			$country        =   $this->input->post("country");
			$papertopic		=	($this->input->post('papertopic'));		   
		    $select_pages   =   $this->input->post("select_pages");
			$select_urgent  =   $this->input->post("select_urgent");
			$type_of_paper  =   $this->input->post("type_of_paper");
			$currency       =   $this->input->post("currency");
			$description    =	($this->input->post('description'));
			
			$orderFormArr = array(
			                 'email_to'=>$email_to,
							 'fullname_order'=>$fullname_order,
							 'phone'=>$phone,
							 'country'=>$country,
							 'papertopic'=>$papertopic,
							 'select_pages'=>$select_pages,
							 'type_of_paper'=>$type_of_paper,
							 'currency'=>$currency,
							 'description'=>$description
			                 );		
							 
			$orderFormHtml = $this->load->view('mailer/order_form_mail', $orderFormArr,true );
			
			$response = $this->sendMail($email_to,$papertopic,$orderFormHtml);
			if($response){
			  $this->session->set_flashdata('message', " Message Sent Successfully, We will contact You soon. ");
			  
			  //========START:: mail for admin side by robin on 11-06-2021===============//
			  $adminEmail = 'globalassignmentexpert@gmail.com';
			  $subject = 'We will contact to you soon - Global Assignment Expert';
			  		  
			  $adminMsg = $this->load->view('mailer/admin_order_form_mail', $orderFormArr,true );
			  
			  $adminResponse = $this->sendMail($adminEmail,$subject,$adminMsg);
			  
			  return redirect('order');
			}
			else{				
				$this->session->set_flashdata('message', " Error in sending Email, we will get back to you soon");
				return redirect('order');
			}
			
			return redirect("order");
		}
		$this->load->view('header',['title'=>"Global Assignment Expert-Order Now",'description'=>"Assignment Help services are the most effective solution for assignment writing Order Now! ",'keywords'=>"online Assignment help in Australia,all assignment help ,online assignment helper Australia,assignment expert,online Assignment Writing Help uk",'canonical'=>"https://globalassignmentexpert.com/order"]);
		$this->load->view('order');
		$this->load->view('footer');
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */