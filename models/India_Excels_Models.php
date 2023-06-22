<?php  
 class India_Excels_Models extends CI_Model  
 {  



    public function get_user_by_email() {
        // Get the user data by email from the database
        $email = $this->input->post('email');
        $this->db->where('email', $email);
        $query = $this->db->get('user');
    
        if ($query->num_rows() == 1) {
            // Return the user data if the user exists
            return $query->row_array();
        } else {
            // Return false if the user doesn't exist
            return false;
        }
    }
    

    public function users_dashboard($uid) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('courses_user', 'user.id = courses_user.userid');
        $this->db->join('courses', 'courses_user.coursesid = courses.id');
        $this->db->where('courses_user.userid', $uid);
    
        $query = $this->db->get();
        return $query->result();
    
     }
    
     public function viewAllcourse(){

        $this->db->select("*");  
        $this->db->from('courses');
        $courses =  $this->db->get();
        return $courses->result();
        }

        function coursedetailsdashboard($cid)
        {
       $courses = $this->db->query("SELECT * FROM courses where id = '$cid'"); 
       return $courses->row_array();
        }
    

// certificate
    public function certificate($email,$coursename) {
    $query = $this->db->query("SELECT * FROM examresults WHERE email = '$email' AND course = '$coursename' AND status = '1'"); 
        if($query->num_rows() > 0){
            return $query->row();
        }
        }


        function  viewexam_course($coursename)
        {
        $question_course = $this->db->query("SELECT * FROM questionbank where course = '$coursename' ORDER BY rand() LIMIT 20;"); 
         return $question_course->result();
        }


        function correct_answer_score($data)
        {
     
               $score = 0;
               foreach ($data as $question_id => $answer) {
                   $this->db->select('*');
                   $this->db->from('questionbank');
                   $this->db->where('id', $question_id);
                   $this->db->where('answer', $answer);
     
                   $query = $this->db->get();
                   if ($query->num_rows() > 0) {
                       $score++;
                   }
               }
               return $score;
         }
    

         function feedbackform($data){
            $this->db->insert('feedbackform', $data);

         }










        function insert_result($data)
        {
        $course = $data['course'];
        $studentname = $data['studentname'];
        $email = $data['email'];
        $score = $data['score'];
        $query = $this->db->query("SELECT * FROM examresults WHERE studentname = '$studentname' AND email = '$email' AND course = '$course'"); 
                if ($score >= '15' ){
                        if ($query->num_rows() > 0) {
                            $status = '1';
                            $this->db->query("UPDATE examresults SET score = '$score',status = '$status' where  email = '$email' AND course = '$course'"); 
                        }
                        elseif(!$query->num_rows() > 0) {
                            $status = '1';
                            $this->db->query("INSERT INTO `examresults`(`studentname`, `date`, `score`, `course`, `email`, `status`) VALUES ('$studentname','$score','$course','$email','$status')"); 
                        }
                 }
                elseif  ($score < '15' ){
                    if ($query->num_rows() > 0) {  
                        $this->db->query("UPDATE examresults SET score = '$score' where  email = '$email' AND course = '$course'"); 
                    }
                    elseif(!$query->num_rows() > 0) {
                        $this->db->query("INSERT INTO `examresults`( `studentname`, `score`, `course`, `email`) VALUES ('$studentname','$score','$course','$email') "); 
                    }
                }

        }






// ------------------------------------------------------------------------------



// for admin dashboard-- take count of all tables
public function get_all_departmentscount(){
    $query = $this->db->get('department');
    $count = $query->num_rows();
    return $count;
}


public function get_all_coursescount(){
    $query = $this->db->get('courses');
    $count = $query->num_rows();
    return $count;
}

public function get_all_questionscount(){
    $query = $this->db->get('questionbank');
    $count = $query->num_rows();
    return $count;
}

public function get_all_userscount(){
    $query = $this->db->get('user');
    $count = $query->num_rows();
    return $count;
}
        



function load_data()
{
 $this->db->order_by('id', 'DESC');
 $query = $this->db->get('department');
 return $query->result_array();
}

function insert($data)
{
 $this->db->insert('department', $data);
}

function update($data, $id)
{
 $this->db->where('id', $id);
 $this->db->update('department', $data);
}

function delete($id)
{
 $this->db->where('id', $id);
 $this->db->delete('department');
}

public function getdepartment()                {
    $department = $this->db->get('department');
    if($department->num_rows() > 0){
        return $department->result();
    }
    }



    
    
    





    



public function course($data_arr) {
    return $this->db->insert('courses',$data_arr);
    }

function deletecourse($id)
    {
     $this->db->where('id', $id);
     $this->db->delete('courses');
    }



public function updatecourse($data, $id){
      return $this->db->where('id',$id)->update('courses',$data);
   }
public function getcoursedetails($id){

          $this->db->select("*");  
          $this->db->from('courses');
          $this->db->where('id',$id);
          $courses =  $this->db->get();                
           return $courses->result();
          
           }

public function getcourses(){
   $coursename = $this->db->get('courses');
      if($coursename->num_rows() > 0){
          return $coursename->result();
           }
     }





     public function question($data)                  {
        return $this->db->insert('questionbank',$data);
    }

    function deletequestion($id)
    {
     $this->db->where('id', $id);
     $this->db->delete('questionbank');
    }
    public function viewAllquestion(){

     $this->db->select("*");  
     $this->db->from('questionbank');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
     $questions =  $this->db->get();
     return $questions->result();
    }
            
    public function getquestiondetails($id){
    $this->db->select("*");  
    $this->db->from('questionbank');
    $this->db->where('id',$id);
    $questions =  $this->db->get();           
    return $questions->result();
    }

    public function updatequestion($data, $id){
        return $this->db->where('id',$id)->update('questionbank',$data);
     }        
// -------------------------------------------------------





public function create_user() {
    $data = array(
        'name' => $this->input->post('username'),
        'number' => $this->input->post('mobile_number'),
        'email' => $this->input->post('email'),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
    );
    $this->db->insert('user', $data);
}





public function payment_status($uid,$cid) {
    //           userid,coursesid,status.courses_user
    $paymentstatus = '1';
    $this->db->where('userid', $uid);
    $this->db->where('coursesid', $cid);
    $this->db->where('paymentstatus', $paymentstatus);

    $this->db->from('courses_user');
    $courses_user =  $this->db->get();      
    $print = $courses_user->result();
    return $print;


}


public function user($data)                  {
    $data = array(
    'name' => $this->input->post('name'),
    'number' => $this->input->post('mobile_number'),
    'email' => $this->input->post('email'),
    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
     );
    $this->db->insert('user', $data);
}
function deleteuser($id)
{
$this->db->where('id', $id);
$this->db->delete('user');
}

public function viewAllusers(){

$this->db->select("*");  
$this->db->from('user');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
$users =  $this->db->get();
return $users->result();

}
 
public function getusersdetail($id){

 $this->db->select("*");  
 $this->db->from('user');
 $this->db->where('id',$id);
 $users =  $this->db->get(); 
return $users->result();
}
  
public function updateusersss($data, $id){
// echo'<br>';
//   print_r($data);

    $data = array(
        'name' => $this->input->post('name'),
        'number' => $this->input->post('mobile_number'),
        'email' => $this->input->post('email'),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
         );

return $this->db->where('id',$id)->update('user',$data);

}


















function getSearchUsers($perPage,$start_index,$search_text=null,$is_count=0)
    {

    if($perPage !='' && $start_index != '')
    {
        $this->db->limit($perPage,$start_index);
    }

    if($search_text!=NULL)
    {
        $this->db->like('course',$search_text,'both');
        $this->db->or_like('question',$search_text,'both');
        // $this->db->or_like('address',$search_text,'both');
    }

    if($is_count==1)
    {
        $query = $this->db->get('questionbank');
        return $query->num_rows();
    }
    else 
    {
        $query = $this->db->get('questionbank');
        return $query->result_array();
    }

    }




function getSearchCourse($perPage,$start_index,$search_text=null,$is_count=0)
    {
        
    if($perPage !='' && $start_index != '')
    {
        $this->db->limit($perPage,$start_index);
    }

    if($search_text!=NULL)
    {
        $this->db->like('coursename',$search_text,'both');
        $this->db->or_like('short',$search_text,'both');
        // $this->db->or_like('address',$search_text,'both');
    }

    if($is_count==1)
    {
        $query = $this->db->get('courses');
        return $query->num_rows();
    }
    else 
    {
        $query = $this->db->get('courses');
        return $query->result_array();
    }

    }



    
function getfeedback($perPage,$start_index,$search_text=null,$is_count=0)
{
    
if($perPage !='' && $start_index != '')
{
    $this->db->limit($perPage,$start_index);
}

if($search_text!=NULL)
{
    $this->db->like('name',$search_text,'both');
    $this->db->or_like('email',$search_text,'both');
    // $this->db->or_like('address',$search_text,'both');
}

if($is_count==1)
{
    $query = $this->db->get('feedbackform');
    return $query->num_rows();
}
else 
{
    $query = $this->db->get('feedbackform');
    return $query->result_array();
}

}






function feedbackapprove($id, $data)
{
    // echo $id;

  
    // print_r($data);

$this->db->where('id', $id);
$this->db->update('feedbackform', $data);


}

function viewapprovedfeedback(){
    $approved = '1';
    $this->db->select("*");  
    $this->db->where('approved', $approved);  
    $this->db->from('feedbackform');
    $feedbackform =  $this->db->get();
    return $feedbackform->result();
}


// this file is only created for testing purposes!











function feedbackdelete($id)
{
    // $status = '0';
$this->db->where('id', $id);
// $this->db->where('approved', $status);

$this->db->delete('feedbackform');

}



function Payment($uid, $cid)
{
 $data = array(
    'userid' =>  $uid,
    'coursesid' => $cid,
    'paymentstatus' => '1'
 );



    $this->db->insert('courses_user',  $data);



}




















 }   