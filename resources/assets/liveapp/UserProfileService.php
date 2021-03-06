<?php
 class UserProfileService
 {

/**

     * function to edit FormalEducation

     * 

     * Long description (if any) ...

     * 

     * @param in array $education 

     * @return results 1 on success and 0 on failure..

     * @access public  

     */ 
public function editFormalEducation($userid,$education)
{

$id             = $education['id'];
$degree         = $education['Degree_course'];
$specialization = $education['specialization'];
$university     = $education['university'];
$passing_year   = strtotime($education['yr_of_passing']);
$course_type    = $education['course_type'];
$document       = $education['document'];
$formal_edu     = $education['edu_id'];
//print_r($education);

$query = mysql_query("INSERT INTO `gs_user_education`(`id`, `userid`, `Degree_course`, `specialization`, `university`, `yr_of_passing`, `course_type`, `docs`, `edu_id`, `date_created`) VALUES ('$id','$userid','$degree','$specialization','$university',FROM_UNIXTIME ('$passing_year'),'$course_type','$document','$formal_edu',CURDATE()) ON DUPLICATE KEY UPDATE `Degree_course` = '$degree',`specialization` = '$specialization' , `university` = '$university', `yr_of_passing` = FROM_UNIXTIME ('$passing_year'),`course_type` = '$course_type' ,`docs` = '$document'");

if($query)
{

return 1;

}
else
{

return 0;

}



}

/**

     * Short description for editSportsEcucation

     
     * @param in array $sports_edu 

     * @return results 1 on success and 0 on failure..

     * @access public  

     */ 
public function editSportsEducation($userid ,$sports_edu)
{

$id           = $sports_edu['id'];
$degree       = $sports_edu['Degree_course'];
$university   = $sports_edu['university'];
$passing_year = strtotime($sports_edu['yr_of_passing']);
$document     = $sports_edu['docs']; 

$query = mysql_query("INSERT INTO `user_sports_education`(`id`, `userid`, `Degree_course`,  `specialization`, `university`, `yr_of_passing`, `course_type`, `docs`, `edu_id`, `date_created`) VALUES ('$id','$userid','$degree','','$university',FROM_UNIXTIME('$passing_year'),'','$document','',CURDATE()) ON DUPLICATE KEY UPDATE `Degree_course` = '$degree' ,`university` = '$university', `yr_of_passing` = FROM_UNIXTIME ('$passing_year') , `docs` = '$document'");


if($query)
{

return 1;

}
else
{

return 0;

}


}

/**

     * function to edit editExperience
 
     * @param in array $experience 

     * @return results 1 on success and 0 on failure..

     * @access public  

     */ 

public function editExperience($userid,$experience)
{

                                                      
$id                = $experience['id'];
$role              = $experience['designation'];
$organisation      = $experience['organisation'];
$start_month       = strtotime($experience['month_started']);
$end_month         = strtotime($experience['month_ended']);
$currently_working = $experience['currently_working'];
$work_experience   = $experience['user_exp_id'];

$query = mysql_query(" INSERT INTO `gs_User_Experience`(`id`, `userid`, `designation`, `organisation`, `month_started`, `month_ended`, `currently_working`, `user_exp_id`) VALUES ('$id','$userid','$role','$organisation',FROM_UNIXTIME('$start_month'),FROM_UNIXTIME('$end_month'),'$currently_working','$work_experience') ON DUPLICATE KEY UPDATE `designation` = '$role' ,`organisation` = '$organisation', `month_started` = FROM_UNIXTIME ('$start_month'), `month_ended` = FROM_UNIXTIME ('$end_month'), `currently_working` = '$currently_working'");


if($query)
{

return 1;

}
else 
{

return 0;

}
}

/**

     * function to edit editSportExperience
 
     * @param in array $sports_experience 

     * @return results 1 on success and 0 on failure..

     * @access public  

     */ 
public function editSportExperience($userid,$sports_experience)
{ 

$id                 = $sports_experience['id'];
$level              = $sports_experience['level_played'];
$best_result        = $sports_experience['best_result'];
$tournament_name    = $sports_experience['tournament_name'];
$best_rank          = $sports_experience['best_rank'];
$level_at_rank_held = $sports_experience['tournament_level_for_best_rank'];
$any_achievement    = $sports_experience['other_achievement'];

$query = mysql_query("INSERT INTO `gs_User_SportsExperience`(`id`, `userid`, `level_played`, `best_result`, `tournament_name`, `best_rank`, `tournament_level_for_best_rank`, `other_achievement`) VALUES ('$id','$userid','$level','$best_result','$tournament_name','$best_rank','$level_at_rank_held','$any_achievement') ON DUPLICATE KEY UPDATE `level_played` = '$level',`best_result` = '$best_result', `tournament_name` = '$tournament_name' , `best_rank` = '$best_rank',`tournament_level_for_best_rank` = '$level_at_rank_held' ,`other_achievement` = '$any_achievement' ");

if($query)
{

return 1;

}
else
{

return 0;

}

}


/**

     * function to edit editUserSkill
 
     * @param in array $skill 

     * @return results 1 on success and 0 on failure..

     * @access public  

     */ 

 public function editUserSkill($userid,$skill)
{
$id           = $skill['id'];
$user_skill   = $skill['other_skill_name']; 
$skill_detail = $skill['other_skill_detail'];
$query = mysql_query("INSERT INTO `gs_user_skill`(`id`, `userid`, `user_skill`, `skill_detail`)VALUES ('$id','$userid','$user_skill','$skill_detail')ON DUPLICATE KEY UPDATE `user_skill` = '$user_skill',`skill_detail` = '$skill_detail'");

if($query)
{

return 1;

}
else 
{

return 0;

}
}
/**

     * function to edit editUserData
 
     * @param in object $userid
     
     * @return results 1 on success and 0 on failure..

     * @access public  

     */ 

public function editUserData($userid,$userinfo)
{

$name       = $userinfo['name'];
$contact_no = $userinfo['contact_no'];
$address1   = $userinfo['address1'];
$address2   = $userinfo['address2'];
$location   = $userinfo['location'];
$user_image = $userinfo['user_image'];
$dob        = strtotime($userinfo['dob']);
$language   = $userinfo['prof_language'];
$age_catered= $userinfo['age_catered'];
$aboutme    = $userinfo['about_me'];

$query = mysql_query("UPDATE `user` SET `name`='$name',`contact_no`='$contact_no',`address1`='$address1',`address2`='$address2',`dob`=FROM_UNIXTIME ('$dob'),`user_image`='$user_image',`location`='$location',`prof_language`='$language',`age_catered`='$age_catered',`about_me` = '$aboutme' WHERE `userid`='$userid'");

if($query)
{

	return 1;
}
else
{

    return 0;

}	




}

public function getUserEducation($userid,$eduid)
{

$query = mysql_query("SELECT IFNull(`id`,'') AS id, IFNull(`userid`,'') AS userid, IFNull(`Degree_course`,'') AS Degree_course, IFNull(`specialization`,'') AS specialization, IFNull(`university`,'') AS university, IFNull(DATE_FORMAT(`yr_of_passing`, '%D %M %Y'),'') AS yr_of_passing, IFNull(`course_type`,'') AS course_type, IFNull(`docs`,'') AS docs, IFNull(`edu_id`,'') AS edu_id, `date_created`  FROM `gs_user_education` WHERE `userid` = '$userid' AND `edu_id` = '$eduid' ");

if(mysql_num_rows($query)>0)
{

while($row = mysql_fetch_assoc($query))
{

$data[] = $row;



}
return $data;

}
else
{


return 0;

}

}

public function getSportsEducation($userid)
{

$query = mysql_query("SELECT IFNull(`id`,'') AS id, IFNull(`userid`,'') AS userid, IFNull(`Degree_course`,'') AS Degree_course, IFNull(`specialization`,'') AS specialization, IFNull(`university`,'') AS university, IFNull(DATE_FORMAT(`yr_of_passing`, '%D %M %Y'),'') AS yr_of_passing, IFNull(`course_type`,'') AS course_type, IFNull(`docs`,'') AS docs, IFNull(`edu_id`,'') AS edu_id, `date_created` FROM `user_sports_education` WHERE `userid` = '$userid'");
if(mysql_num_rows($query)>0)
{

while($row = mysql_fetch_assoc($query))
{

$data[] = $row;

}
return $data;

}
else
{

return 0;

}    



}

public function getUserExperience($userid,$user_exp)
{
$id                = $experience['id'];
$role              = $experience['designation'];
$organisation      = $experience['organisation'];
$start_month       = strtotime($experience['month_started']);
$end_month         = strtotime($experience['month_ended']);
$currently_working = $experience['currently_working'];
$work_experience   = $experience['user_exp_id'];
$query = mysql_query("SELECT IFNull(`id`,'') AS id, IFNull(`userid`,'') AS userid, IFNull(`designation`,'') AS designation, IFNull(`organisation`,'') AS organisation, IFNull(DATE_FORMAT(`month_started`, '%D %M %Y'),'') AS month_started, IFNull(DATE_FORMAT(`month_ended`, '%D %M %Y'),'') AS month_ended, IFNull(`currently_working`,'') AS currently_working, IFNull(`user_exp_id`,'') AS user_exp_id FROM `gs_User_Experience` WHERE `userid` = '$userid' AND `user_exp_id` = '$user_exp'");
if(mysql_num_rows($query)>0)
{

while($row = mysql_fetch_assoc($query))
{
$data[] = $row;
}
return $data;

}
else
{

return 0;

}

}

public function getUserSportsExp($userid)
{

$query = mysql_query("SELECT IFNull(`id`,'') AS id, IFNull(`userid`,'') AS userid, IFNull(`level_played`,'') AS level_played, IFNull(`best_result`,'') AS best_result, IFNull(`tournament_name`,'') AS tournament_name, IFNull(`best_rank`,'') AS best_rank, IFNull(`tournament_level_for_best_rank`,'') AS tournament_level_for_best_rank, IFNull(`other_achievement`,'') AS other_achievement FROM `gs_User_SportsExperience` WHERE `userid` = '$userid'");
if(mysql_num_rows($query)>0)
{

while($row = mysql_fetch_assoc($query))
{

$data[] = $row;

}
return $data;
}
else
     return 0;

}
public function getuserData($userid)
{

$query = mysql_query("SELECT IFNull(`userid`,'') AS userid, IFNull(`name`,'') AS name, IFNull(`password`,'') AS password, IFNull(`email`,'') AS email, IFNull(`contact_no`,'') AS contact_no, IFNull(`sport`,'')AS sport, IFNull(`Gender`,'') AS gender, IFNull(`address1`,'') AS address1, IFNull(`address2`,'') AS address2,IFNull(DATE_FORMAT(`dob`, '%D %M %Y'),'') AS dob, IFNull(`prof_id`,'') AS prof_id, IFNull(`user_image`,'') AS user_image, IFNull(`location`,'') AS location, IFNull(`prof_language`,'') AS prof_language,IFNull(`age_catered`,'') AS age_catered , IFNull(`device_id`,'')AS device_id,IFNull(`about_me`,'')AS about_me FROM `user` WHERE `userid` = '$userid'");
if(mysql_num_rows($query)>0)
{

while($row = mysql_fetch_assoc($query))
{

$data = $row;


}
return $data;
}
else
{

return 0;

}

}

public function getUserSkill($userid)
{

$query = mysql_query("SELECT IFNull(`id`,'') AS id, IFNull(`user_skill`,'') AS other_skill_name, IFNull(`skill_detail`,'') AS other_skill_detail FROM `gs_user_skill` WHERE `userid` = '$userid'");

if(mysql_num_rows($query)>0)
{

     while($row= mysql_fetch_assoc($query))
     {

          $data[] = $row;
     }
     return $data;
}
else
{

return 0; 

}


}

}


 ?>