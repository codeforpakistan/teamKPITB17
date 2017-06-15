<?php
if(!defined("allow")) {exit(include 'index.php');}
function redirect($url)
	{
		header('location:'.$url);
		exit;
	}

class database extends connection
	{
		function insert_record($db_table, $table_fields)
		{
			foreach($table_fields as  $n)
				{
					$field[] = " $n = '".addslashes($_POST[$n])."' ";
				}
					$fields = implode("," , $field);
					$query=" INSERT INTO " . $db_table . " SET " . $fields;
					//print_r($query); exit;
					return $query; 
					 
		}
		function update_record($db_table, $table_fields, $condition)
		{
			foreach ($table_fields as $y)
				{
					$ele[] = "$y =  '".addslashes($_POST[$y])."' ";
					$_SESSION['formvalue'][$y]=$_POST[$y];	
				}
					$element = implode(',',$ele);
					$query = " UPDATE " . $db_table . " SET " . $element . " WHERE " . $condition ;
					return $query;
					
		}
		function select_record($query)
		{
			$rec=mysqli_query($this->gConnect, $query);
			@$num=mysqli_num_rows($rec);
			if($num > 0 )
				{
					$number=1;
					while($row=mysqli_fetch_assoc($rec))
						{
							$select[$number]=$row;
							$number++;
						}
				}
				return @$select;
		}
		function select_one_record($query)
		{
			$record = mysqli_query($this->gConnect, $query);
			//echo $query;
			//exit;
			$num=mysqli_num_rows($record);
			if($num > 0)
				{
					$query = mysqli_fetch_assoc($record);
					return $query;
				}
			else
				{
					return false;
				}
		}
		function delete_record($query)
		{
			$res=mysqli_query($this->gConnect, $query);
			//print_r($res); exit;
			if($res)
				{
					$_SESSION['success'] = "Record Deleted";
					
				}
			else
				{
					$_SESSION['error'] = "Error Occur!!!!";
				}
		}
	}	
function echo_message()
	{
		if(isset($_SESSION['success']))
			{
				$msg = true;
				$class = "success";
				$message=  $_SESSION['success'];
				unset($_SESSION['success']);
			}
		elseif(isset($_SESSION['error']))
			{
				$msg  = true;
				$class = "danger";
				$message =  $_SESSION['error'];
				unset($_SESSION['error']);
			}
		else
			{
				$msg = false;
			}
		if($msg)
			{
				echo '
				<div class="alert alert-dismissable alert-'.$class.'">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							   <strong>'.$message.'</strong>
					   </div>';
			}
	}
?>