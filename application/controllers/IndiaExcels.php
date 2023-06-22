<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class IndiaExcels extends CI_Controller {  
     // https://devephphatha.com/india_excels/IndiaExcels/users_dashboard
     public function __construct()
     {
      parent::__construct();
      $this->load->model('India_Excels_Models');
      $this->load->helper('form');
      $this->load->library('form_validation');  
     }
 //    http://127.0.0.1/india_excels/index.php/IndiaExcels/login


 function login()  
 {  
      $data['title'] = 'CodeIgniter Simple Login Form With Sessions';  
      $this->load->view("Login", $data);  
 }  
 function login_validation()  
 {  
      $this->load->helper('form');
      $this->load->library('form_validation');  
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'required');      
      if($this->form_validation->run())  
      {  
           $email = $this->input->post('email');  
           $password = $this->input->post('password');  
          $user = $this->India_Excels_Models->get_user_by_email();  
          if ($user && password_verify($this->input->post('password'), $user['password'])) {
               // If user exists and password is correct, set session data and redirect to dashboard
$session_data = array(  
     'uid'        =>     ($user['id']),
     'email'     =>     ($user['email']),
     'name'      =>     ($user['name']),
     'usertype'  =>     ($user['usertype'])  
            );  
                                if($user['usertype'] == '1'){
                                   $this->session->set_userdata($session_data);  
                                   redirect(base_url() . 'IndiaExcels/enter');  
                               }
          
                              elseif ($user['usertype'] == '2') {
                                    $courses = $this->India_Excels_Models->viewAllcourse();
                                               $this->session->set_userdata($session_data);  
                                    redirect(base_url() . 'IndiaExcels/users_dashboard');
                              }
               }
      else  
      {  
          $this->session->set_flashdata('messages', "Email And Password Not Match");
          $this->login();  
      }
     }  
  
 else  
       {  
          $this->session->set_flashdata('messages', "Email And Password Not Match");
          $this->login();  
      }  
}

function logout()  
{  
     $this->session->sess_destroy();
     // $this->session->unset_userdata('email');  
     redirect(base_url() . 'IndiaExcels/login');  
}  
// end LOGIN FORM VALIDATIONS-----------

// paid user and non paid user

public function users_dashboard(){

     $this->session->unset_userdata('coursename');

       $uid = $this->session->userdata('uid');
 
        $result =  $this->India_Excels_Models->users_dashboard($uid);
        
          if($result) {
     
                             $this->session->set_flashdata('paiduser', " logincourse ");
                   $feedback = $this->India_Excels_Models->viewapprovedfeedback();
               $courses =  $this->India_Excels_Models->viewAllcourse();       
               $this->load->view('user/users_dashboard',['result' => $result,'courses' => $courses,'feedback'=>$feedback]);
     
                     }
          else {
                   $feedback = $this->India_Excels_Models->viewapprovedfeedback();
               $courses =  $this->India_Excels_Models->viewAllcourse();       
               $this->load->view('user/users_dashboard',['courses' => $courses,'feedback'=>$feedback]);
              }
 
 
 }


 public function Payment($id){
     
     if($this->session->userdata('uid')){
         $uid = $this->session->userdata('uid');
     $cid = $id;
        $result =  $this->India_Excels_Models->Payment($uid, $cid);
        redirect('IndiaExcels/coursedetailsdashboard/'.$cid);
     }
     else{
              $cid = $id;
        redirect('IndiaExcels/signup');

     }
       
 
     
 }










   public function view_all_courses(){

     // $this->session->set_flashdata('nonpaiduser', "You didnt enroll this course");

               $courses =  $this->India_Excels_Models->viewAllcourse();       

     $this->load->view('user/Courses',['courses'=>$courses]);
 
 }




 public function profile(){
     // echo $cid;
          $uid = $this->session->userdata('uid');
          $users = $this->India_Excels_Models->getusersdetail($uid);
          $result =  $this->India_Excels_Models->users_dashboard($uid);

          $this->load->view('user/profile',['users' => $users,'result' => $result]);

     }
     
     public function feedbackform(){
                    if($this->session->userdata('uid'))
{
    $data=$this->input->post();
                 $this->India_Excels_Models->feedbackform($data);
                 $this->session->set_flashdata('feedback', " Thankyou for your feedback ");

              redirect('IndiaExcels/users_dashboard#feedback');
}else{
               $data=$this->input->post();
                 $this->India_Excels_Models->feedbackform($data);
                 $this->session->set_flashdata('feedback', " Thankyou for your feedback ");

              redirect('IndiaExcels/index#feedback');
}

     }


public function coursedetailsdashboard($cid) {
     $uid = $this->session->userdata('uid');

     $payment = $this->India_Excels_Models->payment_status($uid,$cid);

          if($payment){

               $coursedetails = $this->India_Excels_Models->coursedetailsdashboard($cid);
               $session_data = array(  
                                'cid'      =>     ($cid),
                       'coursename'        =>     ($coursedetails['coursename'])
                   
                                  ); 
                                  $this->session->set_userdata($session_data);  
                 $this->session->set_flashdata('paiduser', "You didnt enroll this course");
                 $this->load->view("user/coursedetailsdashboard",['coursedetails' => $coursedetails ]);  
          }
          else{
               // $this->load->view("user/coursedetailsdashboard",['coursedetails' => $coursedetails ]);  

               redirect(base_url() . 'IndiaExcels/coursepurchase/'.$cid);  

          }
           

    }


    public function coursepurchase($cid){

     // $this->session->set_flashdata('nonpaiduser', "You didnt enroll this course");

     $courses = $this->India_Excels_Models->getcoursedetails($cid);

     $this->load->view('user/coursepurchase',['courses'=>$courses]);
 
 }



// DASHBOARD IF GUEST CAN VIEW OR BUY OUR PRODUCTS OR COURSE
public function index(){
     $courses = $this->India_Excels_Models->viewAllcourse();
     $feedback = $this->India_Excels_Models->viewapprovedfeedback();

 
     $this->load->view('user/dashboardcourse',['courses'=>$courses, 'feedback'=>$feedback]);
 
 
 }
 
// IN DASHBOARD USER CAN BUY THE COURSE -- REDIRECT TO LOGIN
public function about(){


     $this->load->view('user/about');
 
 
 }















    public function exam_question_btn($cid){
    // echo $cid;

    $coursename = $this->session->userdata('coursename');
    $email = $this->session->userdata('email');
    $cid = $this->session->userdata('cid');
         $certificate = $this->India_Excels_Models->certificate($email,$coursename);
         if($certificate){
              $this->session->set_flashdata('exam', "You Already Gain Pass Mark Now You Can Download Certificate");
              redirect('IndiaExcels/coursedetailsdashboard/'.$cid);
         }
         else{
              redirect('IndiaExcels/courseexam/'.$cid);
         }
    
    
    }


    public function courseexam($cid){
     // $session_data = $this->session->all_userdata();
     // print_r($session_data);

         $coursename = $this->session->userdata('coursename');
         $email = $this->session->userdata('email');
         $name = $this->session->userdata('name');
         $uid = $this->session->userdata('uid');
         $cid = $this->session->userdata('cid');

     //     $certificate = $this->India_Excels_Models->certificate($email,$coursename);
     //     if($certificate){
     //          $this->session->set_flashdata('exam', "You Already Gain Pass Mark Now You Can Download Certificate");
     //          redirect('IndiaExcels/coursedetailsdashboard/'.$cid);
     //     }
     //     else{
         $question = $this->India_Excels_Models->viewexam_course($coursename);
         if(!$question){
              $this->session->set_flashdata('questions', "DIDNT UPLOAD QUESTIONS");
         }
         $this->load->view('user/courseexam',['question'=>$question]);
     //     }

     }




    // AFTER QUESTIONBANK -RESULT IS DISPLAY 
     public function courseresult(){
    
         $data=$this->input->post();
         $coursename = $this->session->userdata('coursename');
         $email = $this->session->userdata('email');
         $name = $this->session->userdata('name');     
    

         $result = $this->India_Excels_Models->correct_answer_score($data);
         $this->session->set_flashdata('message', $result);
    
         if($result == '0'){
              $this->session->set_flashdata('message', 'ZERO');
    
         }
         elseif($result > '0'){
              $this->session->set_flashdata('message', $result);
         
         }
         
    
         
         $data['score'] = $result;
    
              
              $this->India_Excels_Models->insert_result($data);
              $cid = $this->session->userdata('cid');

              return redirect("IndiaExcels/courseexam/{$cid}");
         
         
    
         
    
     }


// ---------------------------------------------------------------------------------------------------------------



function enter(){  
     if($this->session->userdata('email') != '')  
     {  
         $countdepartment = $this->India_Excels_Models->get_all_departmentscount();
         $countcourse = $this->India_Excels_Models->get_all_coursescount();
         $countquestion = $this->India_Excels_Models->get_all_questionscount();
         $countuser = $this->India_Excels_Models->get_all_userscount();

         $this->session->set_flashdata('department', $countdepartment);
         $this->session->set_flashdata('course', $countcourse);
         $this->session->set_flashdata('question', $countquestion);
         $this->session->set_flashdata('user', $countuser);

         
         $this->load->view("admindashboard");  


     }  
     else  
     {  
          $this->logout();  
     }  
} 



function category()
{
   if($this->session->userdata('email') != '')  
     {
 $this->load->view('category');
     }
      else  
     {  
          $this->logout();  
     }  
}

function load_data()
{
 $data = $this->India_Excels_Models->load_data();
 echo json_encode($data);
}

function insert()
{
 $data = array(
  'categoryname' => $this->input->post('categoryname'),
 
 );

 $this->India_Excels_Models->insert($data);
}

function update()
{
 $data = array(
  $this->input->post('table_column') => $this->input->post('value')
 );

 $this->India_Excels_Models->update($data, $this->input->post('id'));
}

function delete()
{
 $this->India_Excels_Models->delete($this->input->post('id'));
}







public function course()
{
       if($this->session->userdata('email') != '')  
     {
     $department = $this->India_Excels_Models->getdepartment();
     $this->load->view('course',['department'=>$department]);
     }
     else{
                   $this->logout();  
     }
     
     
}


 public function createcourse(){

          $data=$this->input->post();
          $this->load->library('upload');

//  --------coursethumbnail
$config = array(
'upload_path' => './uploads/thumbnail/',
'allowed_types' => 'jpg|jpeg|png|gif',
 'encrypt_name' => TRUE, //it will encrypt img name

               );

$this->upload->initialize($config);
$this->upload->do_upload('coursethumbnail');
$image = $this->upload->data();  
$coursethumbnail = $image['file_name'];

// -----course into video

//  --------coursevideos
$config = array(
'upload_path' => './uploads/intro/',
'allowed_types' => 'mp4|gif',
'encrypt_name' => TRUE, //it will encrypt img name

               );
$this->upload->initialize($config);
$this->upload->do_upload('courseintro');
$intro = $this->upload->data();  

$courseintro = $intro['file_name'];


//  --------coursevideos
$config = array(
'upload_path' => './uploads/videos/',
'allowed_types' => 'mp4|gif',
'encrypt_name' => TRUE, //it will encrypt img name

               );
$this->upload->initialize($config);
$this->upload->do_upload('coursevideos');
$data1 = $this->upload->data();  

$coursevideos = $data1['file_name'];

$data=$this->input->post();




$data_arr=array(

'department' => $data['department'],
'coursename' => $data['coursename'],
'short' => $data['short'],
'content' => $data['content'],
'price' => $data['price'],
'coursevideos' => $coursevideos,
'courseintro' => $courseintro,
'coursethumbnail' => $coursethumbnail,

);

$this->load->model('India_Excels_Models');

if($this->India_Excels_Models->course($data_arr)){
return redirect("IndiaExcels/course");


}

}





public function deletecourse($id){
     $this->India_Excels_Models->deletecourse($id);
     $courses = $this->India_Excels_Models->viewAllcourse();
     return redirect("IndiaExcels/courseview");


}
// ..................................................................................


public function courseedit($id){
    
       if($this->session->userdata('email') != '')  
     {
$courses = $this->India_Excels_Models->getcoursedetails($id);
$coursename = $this->India_Excels_Models->getcourses();
$department = $this->India_Excels_Models->getdepartment();

$this->load->view('courseedit',['courses'=>$courses,'coursename'=>$coursename,'department'=>$department]);
}
else{
                       $this->logout();  

}
}





public function updatecourse($id)
{
$data=$this->input->post();

$this->load->library('upload');

$coursethumbnailimg =  $_FILES['coursethumbnail']['name'];
$coursevideoscheck =  $_FILES['coursevideos']['name'];
$courseintrocheck =  $_FILES['courseintro']['name'];


if($coursethumbnailimg != '')

{

$config = array(
               'upload_path' => './uploads/thumbnail/',
     'allowed_types' => 'jpg|jpeg|png|gif',
                'encrypt_name' => TRUE, //it will encrypt img name
     
                              );
     
        $this->upload->initialize($config);
          $this->upload->do_upload('coursethumbnail');
               $image = $this->upload->data();  
               $coursethumbnail = $image['file_name'];
    //  echo $coursethumbnail;
     

}
else{
$coursethumbnail=$data['coursethumbnailold'];
// echo $coursethumbnail;


}


if($courseintrocheck != '')

{

$config = array(
          'upload_path' => './uploads/intro/',
          'allowed_types' => 'mp4|gif',
         'encrypt_name' => TRUE, //it will encrypt video name

                         );
       $this->upload->initialize($config);
         $this->upload->do_upload('courseintro');
         $data1 = $this->upload->data();      
       $courseintro = $data1['file_name'];
         
    

}
else{
$courseintro=$data['courseintroold'];


}





if($coursevideoscheck != '')

{
//    $coursethumbnailimg= $_FILES['coursethumbnail']['name'];

$config = array(
          'upload_path' => './uploads/videos/',
          'allowed_types' => 'mp4|gif',
         'encrypt_name' => TRUE, //it will encrypt video name

                         );
       $this->upload->initialize($config);
         $this->upload->do_upload('coursevideos');
         $data1 = $this->upload->data();      
       $coursevideos = $data1['file_name'];
         
    

}
else{
$coursevideos=$data['coursevideosold'];


}






  $data_arr=array(
     'department' => $data['department'],
     'coursename' => $data['coursename'],
     'short' => $data['short'],
     'price' => $data['price'],
     'content' => $data['content'],
     'coursevideos' => $coursevideos,
     'courseintro' => $courseintro,
     'coursethumbnail' => $coursethumbnail,

);



$this->India_Excels_Models->updatecourse($data_arr,$id);

return redirect("IndiaExcels/courseedit/$id");

}











// question bank



// form
public function questionbank()
{
    if($this->session->userdata('email') != '')  
     {
         $coursename = $this->India_Excels_Models->getcourses();

$this->load->view('questionbank',['coursename'=>$coursename]);
     }
else{
                       $this->logout();  

}
    

}


public function createquestion()                       {

$data=$this->input->post();
$this->load->model('India_Excels_Models');    
if($this->India_Excels_Models->question($data)){
return redirect("IndiaExcels/questionbank");
}


}




public function deletequestion($id){
      if($this->session->userdata('email') != '')  
     {
         $this->India_Excels_Models->deletequestion($id);
$questions = $this->India_Excels_Models->viewAllquestion();
return redirect("IndiaExcels/questionview");
     }
else{
                       $this->logout();  

}



}




public function questionedit($id){
      if($this->session->userdata('email') != '')  
     {
         $questions = $this->India_Excels_Models->getquestiondetails($id);
$coursename = $this->India_Excels_Models->getcourses();
$this->load->view('questionbankedit',['questions'=>$questions,'coursename'=>$coursename]);
     }
else{
                       $this->logout();  
}
    


}

public function updatequestion($id)
{
        //   echo $id;

$data = $this->input->post();

$this->load->model('India_Excels_Models');
$this->India_Excels_Models->updatequestion($data, $id);
return redirect("IndiaExcels/questionedit/$id");

}





public function upload_ckeditor(){
     $config['upload_path'] = './uploads';
     $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size'] = 1024;
      $config['encrypt_name'] = TRUE; //it will encrypt img name
      $this->load->library('upload',$config);
      if(!$this->upload->do_upload('upload')){
           echo json_encode(array('error' => $this->upload->display_errors()));
      } else {
           $upload_data = $this->upload->data();
           echo json_encode(array('file_name' => $upload_data['file_name']));
      }
 
 }


public function filebrowser(){
$data['fileList'] = glob('uploads/*');
     $this->load->view('filebrowser',$data);

}



// IN USER CRUD OPERATION



public function user()
{
      if($this->session->userdata('email') != '')  
     {
          $coursename = $this->India_Excels_Models->getcourses();

     $this->load->view('user',['coursename' => $coursename]);
     }
else{
                       $this->logout();  

}
    
}



public function createuser()                       {
 
     $data=$this->input->post();

     $this->India_Excels_Models->user($data);
         return redirect("IndiaExcels/user");

}


public function edituser($id){
       if($this->session->userdata('email') != '')  
     {
          $users = $this->India_Excels_Models->getusersdetail($id);
     $coursename = $this->India_Excels_Models->getcourses();

$this->load->view('useredit',['users' => $users,'coursename' => $coursename]);

     }
else{
                       $this->logout();  

}
    
}




public function updateuser($id)
{
     $data = $this->input->post();

   
     $this->India_Excels_Models->updateusersss($data, $id);
     return redirect("IndiaExcels/edituser/".$id);

     }
     
     public function deleteuser($id){
          // echo $id;
          $this->India_Excels_Models->deleteuser($id);
          return redirect("IndiaExcels/viewuser");
          
          
          }
          


     public function viewuser()
		{
			  if($this->session->userdata('email') != '')  
     {
         	$users = $this->India_Excels_Models->viewAllusers();
			$this->load->view('userview',['users'=> $users]);                   
     }
else{
                       $this->logout();  

}
		
		}








 




 public function signup() {
     $this->load->view('signup');

 }




     public function signup_validation() {

  $this->load->helper('form');
         $this->load->library('form_validation');

         $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[15]');
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
         $this->form_validation->set_rules('mobile_number', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]|min_length[10]|max_length[10]');
         $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]');
         $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
 
         if ($this->form_validation->run() == FALSE) {
    

             $this->load->view('signup');
          } else {
             // If validation succeeds, save the user data to the database
             $this->India_Excels_Models->create_user();
             // Redirect to the login page
             redirect('IndiaExcels/login');
         }

     }
 





     public function questionview()
	{
	  if($this->session->userdata('email') != '')  
     {
         	$this->load->library('pagination');

		$perPage=10;
		$config['base_url'] = base_url('IndiaExcels/questionview');
		$page=0;

		if($this->input->get('page'))
		{
			$page = $this->input->get('page');
		}

		$start_index=0;
		if($page != 0)
		{
			$start_index = $perPage * ($page - 1);
		}

		$total_rows = 0;
		
		if($this->input->get('search_text') != null) {
			$search_text = $this->input->get('search_text');
			$this->data['questionbank'] = $this->India_Excels_Models->getSearchUsers($perPage,$start_index,$search_text,$is_count=0);
			$total_rows = $this->India_Excels_Models->getSearchUsers(null,null,$search_text,$is_count=1);
		}
		else 
		{
			$this->data['questionbank'] = $this->India_Excels_Models->getSearchUsers($perPage,$start_index,null,$is_count=0);
			$total_rows = $this->India_Excels_Models->getSearchUsers(null,null,null,$is_count=1);
		}

		$config['total_rows'] = $total_rows;

		$config['per_page']= $perPage;
		$config['enable_query_strings']= true;
		$config['use_page_numbers']= true;
		$config['page_query_string'] = true;
		$config['query_string_segment'] = 'page';
		$config['reuse_query_string']= true;
		$config['full_tag_open']= '<ul  class="pagination">';
		$config['full_tag_close']= '</ul>';
		$config['first_link']= 'First';
		$config['last_link']= 'Last';
		$config['first_tag_open']=  '<li  class="page-item"><spann class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link']= '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';

		$config['prev_tag_close'] = '</span></li>';
		$config['next_link']= '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>'; 
		$this->pagination->initialize($config);
		$this->data['page'] =$page;
		$this->data['links']= $this->pagination->create_links();
		 $this->load->view('questionbankview',$this->data);
     }
else{
                       $this->logout();  

}

	
	}





 





     public function courseview()
	{
	  if($this->session->userdata('email') != '')  
     {
         	
	
		$this->load->library('pagination');

		$perPage=10;
		$config['base_url'] = base_url('IndiaExcels/courseview');
		$page=0;

		if($this->input->get('page'))
		{
			$page = $this->input->get('page');
		}

		$start_index=0;
		if($page != 0)
		{
			$start_index = $perPage * ($page - 1);
		}

		$total_rows = 0;
		
		if($this->input->get('search_text') != null) {
			$search_text = $this->input->get('search_text');
			$this->data['courses'] = $this->India_Excels_Models->getSearchCourse($perPage,$start_index,$search_text,$is_count=0);
			$total_rows = $this->India_Excels_Models->getSearchCourse(null,null,$search_text,$is_count=1);
		}
		else 
		{
			$this->data['courses'] = $this->India_Excels_Models->getSearchCourse($perPage,$start_index,null,$is_count=0);
			$total_rows = $this->India_Excels_Models->getSearchCourse(null,null,null,$is_count=1);
		}

		$config['total_rows'] = $total_rows;

		$config['per_page']= $perPage;
		$config['enable_query_strings']= true;
		$config['use_page_numbers']= true;
		$config['page_query_string'] = true;
		$config['query_string_segment'] = 'page';
		$config['reuse_query_string']= true;
		$config['full_tag_open']= '<ul  class="pagination">';
		$config['full_tag_close']= '</ul>';
		$config['first_link']= 'First';
		$config['last_link']= 'Last';
		$config['first_tag_open']=  '<li  class="page-item"><spann class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link']= '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';

		$config['prev_tag_close'] = '</span></li>';
		$config['next_link']= '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>'; 

		$this->pagination->initialize($config);
		$this->data['page'] =$page;

		$this->data['links']= $this->pagination->create_links();
		 $this->load->view('courseview',$this->data);
         
     }
else{
                       $this->logout();  

}
	

	}






     


     public function feedbackview()
	{
	  if($this->session->userdata('email') != '')  
     {
         
         
		$this->load->library('pagination');

		$perPage=10;
		$config['base_url'] = base_url('IndiaExcels/feedbackview');
		$page=0;

		if($this->input->get('page'))
		{
			$page = $this->input->get('page');
		}

		$start_index=0;
		if($page != 0)
		{
			$start_index = $perPage * ($page - 1);
		}

		$total_rows = 0;
		
		if($this->input->get('feedback') != null) {
			$feedback = $this->input->get('feedback');
			$this->data['feedbacks'] = $this->India_Excels_Models->getfeedback($perPage,$start_index,$feedback,$is_count=0);
			$total_rows = $this->India_Excels_Models->getfeedback(null,null,$feedback,$is_count=1);
		}
		else 
		{
			$this->data['feedbacks'] = $this->India_Excels_Models->getfeedback($perPage,$start_index,null,$is_count=0);
			$total_rows = $this->India_Excels_Models->getfeedback(null,null,null,$is_count=1);
		}

		$config['total_rows'] = $total_rows;

		$config['per_page']= $perPage;
		$config['enable_query_strings']= true;
		$config['use_page_numbers']= true;
		$config['page_query_string'] = true;
		$config['query_string_segment'] = 'page';
		$config['reuse_query_string']= true;
		$config['full_tag_open']= '<ul  class="pagination">';
		$config['full_tag_close']= '</ul'>
		$config['first_link']= 'First';
		$config['last_link']= 'Last';
		$config['first_tag_open']=  '<li  class="page-item"><spann class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link']= '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';

		$config['prev_tag_close'] = '</span></li>';
		$config['next_link']= '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>'; 

		$this->pagination->initialize($config);
		$this->data['page'] =$page;
		$this->data['links']= $this->pagination->create_links();
		 $this->load->view('feedbackform',$this->data);
         
     }
else{
                       $this->logout();  

}

	}







     public function feedbackapprove($id)
{
     $data = array(
          'approved' => '1'
      );
     $this->India_Excels_Models->feedbackapprove($id, $data);
     redirect('IndiaExcels/feedbackview');
}



public function feedbackdisapprove($id)
{
     $data = array(
          'approved' => '0'
      );
     $this->India_Excels_Models->feedbackapprove($id, $data);
     redirect('IndiaExcels/feedbackview');



}


public function feedbackdelete($id)
{
   
    $result = $this->India_Excels_Models->feedbackdelete($id);
  
 redirect('IndiaExcels/feedbackview');



}








               

 }  