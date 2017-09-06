<?php 
require_once '../config/config.php';
require_once '../config/connection.php';
                      //////////////////////// COmment //////////////////////////////////////
if(isset($_POST['add']) && $_POST['add'] == 'comment'){
	foreach($_POST as $x => $y){
		$$x=mysqli_real_escape_string($connect, $y);
				}
			//	echo $DAUD="insert into tblcomments set cm_comments ='$comment', p_id ='$project',UserID ='$user'";
				$comment_query=mysqli_query($connect , "insert into tblcomments set cm_comment ='$comment', p_id ='$project',UserID ='$user'") or die(mysqli_error());
				if($comment_query){
				echo '<li>
                          <div class="commenterImage"><img  src="control_panel/uploads/profile/'.$_SESSION['img'].'" alt="Funder" /></div>
                          <div class="commentText">
                            <p class="">'.$_POST['comment'].'</p> <span class="date sub-text">'.date('Y-m-d H:m:s').'</span>
           
                          </div>
						  </li>'
						  ;
	
					}
					else{
						echo mysql_error();
		
						}
	}
                            //////////////////////// COmment //////////////////////////////////////
							
							//////////////////////// Reply //////////////////////////////////
							if(isset($_POST['add']) && $_POST['add'] == 'reply'){
	foreach($_POST as $x => $y){
	
		
		$$x=mysqli_real_escape_string($connect, $y);
				}
			//	echo $DAUD="insert into tblcomments set cm_comments ='$comment', p_id ='$project',UserID ='$user'";
			$user = $_SESSION['userid'];
				$comment_query=mysqli_query($connect , "insert into tblreply set rep_reply ='$reply', cm_id ='$comment',UserID ='$user'") or die(mysqli_error());
				if($comment_query){
				echo '<li>
                          <div class="commenterImage" style="margin-left:20px"><img  src="control_panel/uploads/profile/'.$_SESSION['img'].'" alt="Funder" /></div>
                          <div class="commentText">
                            <p class="">'.$_POST['reply'].'</p> <span class="date sub-text">'.date('Y-m-d H:m:s').'</span>
           
                          </div>
						  </li>';
					}
					else{
						echo mysql_error();
						}
	}
	                    ////////////////////////// Reply ///////////////////////////

?>