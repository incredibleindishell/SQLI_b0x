<?php
error_reporting(0);
$db = pg_connect("host=localhost port=5432 dbname=box user=ica_lab password=Admin321");




	$method = $_SERVER['REQUEST_METHOD'];
	$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));
	$input = json_decode(file_get_contents('php://input'), true);
	$resource = array_shift($request);


if ($resource == 'user' && $request[0] == 'id' && $request[1] != null && $request[2] == null) 
{
	$userId = $request[1] ?? null;
	if ($userId) {
        $result = pg_query($db, "SELECT * FROM admins where id=".$userId);
		if($result){
			
		while ($row = pg_fetch_assoc($result)) 
					{
						
					
						
						header('Content-Type: application/json');
					echo json_encode(['User Information' => ['id' => $row['id'], 'Handle' => $row['handle'], 'Level' => $row['level']]]);
	
				 }
		}
		else {
			
			header('Content-Type: application/json');
			echo json_encode(['status' => 'error', 'message' => pg_last_error()]);
	
		}
				
    } 
	   
	else 
	{
        
		header('Content-Type: application/json');
						echo json_encode(['status' => 'error', 'message' => "Invalid user ID"]);
	
    }
} 


elseif ($resource == 'user' && $request[0] == 'sort' && $request[1] != null && $request[2] == null) 
{
	$column_name = $request[1] ?? null;
	if ($column_name) {
        $result = pg_query($db, "SELECT * FROM admins order by ".$column_name);
		if($result){
			
		while ($row = pg_fetch_assoc($result)) 
					{
						
					
						
						header('Content-Type: application/json');
					echo json_encode(['User Information' => ['id' => $row['id'], 'Handle' => $row['handle'], 'Level' => $row['level']]]);
	
				 }
		}
		else {
			
			header('Content-Type: application/json');
			echo json_encode(['status' => 'error', 'message' => pg_last_error()]);
	
		}
				
    } 
	   
	else 
	{
        
		header('Content-Type: application/json');
						echo json_encode(['status' => 'error', 'message' => "Invalid user ID"]);
	
    }
} 

elseif ($resource == 'user' && $request[0] == 'handle' && $request[1] != null && $request[2] == null) 
{
	$userId = $request[1] ?? null;
	if ($userId) {
         $result = pg_query($db, "SELECT * FROM admins where handle like '".$userId."%'");
		if($result){
			
		while ($row = pg_fetch_assoc($result)) 
					{
						
					
						
						header('Content-Type: application/json');
					echo json_encode(['User Information' => ['id' => $row['id'], 'Handle' => $row['handle'], 'Level' => $row['level']]]);
	
				 }
		}
		else {
			
			header('Content-Type: application/json');
			echo json_encode(['status' => 'error', 'message' => pg_last_error()]);
	
		}
				
    } 
	   
	else 
	{
        
		header('Content-Type: application/json');
						echo json_encode(['status' => 'error', 'message' => "Invalid user ID"]);
	
    }
} 


elseif ($resource == 'user' && $request[0] == null) 
{

	 $result = pg_query($db, "SELECT * FROM admins ");
		echo '<table align=center  cellspacing="0" cellpadding="0" style="border-collapse: collapse;border:0px;">';
		while ($row = pg_fetch_assoc($result)) 
					{
						echo '<tr><td width="5%" align=center style="padding: 10px;" >'.$row['id'].'</td><td width="20%" align=center style="padding: 10px;">'.$row['handle'].'</td><td width="10%" align=center style="padding: 10px;">'.$row['level'].'</td></tr>'; 
				 }

}
elseif ($resource == 'user' && $request[0] == 'id' && $request[1] != null && $request[2] == 'update_status' && $request[3] != null && $request[4] == null) 
{
	$user_id = $request[1];
	$user_status = $request[3];
	if(is_numeric($user_id))
	{
	 
				  $update_query = "UPDATE admins SET level='".$user_status."' WHERE id=".$user_id;

$updateResult = pg_query($db, $update_query);

if ($updateResult)
{
	
  
	header('Content-Type: application/json');
    echo json_encode(['status' => 'success', 'message' => "updated successfully!"]);
	
}
else {
	header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => "Something went wrong :".pg_last_error()]);
	
}
	}
	else {
		
		echo 'User id is not a numeric value';
	}





}
else
{
    
    header('HTTP/1.1 404 Not Found');
    echo 'Not Found';

}
?>
