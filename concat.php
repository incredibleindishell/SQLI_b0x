<?php 
include('config.php');

include('head.php');





		echo '<div id="left"><div class="main"><table align=center  cellspacing="0" cellpadding="0" style="border-collapse: collapse;border:0px;">
		<tr>
		<form method=post action="'.$_SERVER['SCRIPT_NAME'].'">
		<td align=right style="padding:0px; border:0px; margin:0px;">
				<input type=submit name=home value="Home" class="side-pan">
		</td>
		<td  align=right style="padding:0px; border:0px; margin:0px;" >
				<input type=submit name=plans value="Show Hosting Plans" class="side-pan">
		</td>
		
		<td  align=left style="padding:0px; border-width:0px; margin:0px;">
				<input type=submit name=us value="Who we are" class="side-pan">
		</td>
				</form></tr></table></div></div>
				<div id="right"></div><div align=center>';	

if(isset($_GET['core']))
{

$id=$_GET['core'];

 $news="select * from hosting where name= (((((('".$id."'))))))";


if($result = mysqli_query($conn, $news)){
        	echo '
   <table width="50%" cellspacing="0" cellpadding="0" style="opacity: 0.6;">
   <tr><td width="5%" align=center style="padding: 10px;" >ID</td><td width="20%" align=center style="padding: 10px;">Handle name</td><td width="10%" align=center style="padding: 10px;">Level</td><td width="40%" align=center style="padding: 10px;">Expertise</td></tr></table>
   <table width="50%" cellspacing="0" cellpadding="0" class="tb1" style="margin:10px 2px 10px;opacity: 0.6;" >
   ';
	
        if (mysqli_num_rows($result) > 0) 
		{
			
                while($row = mysqli_fetch_assoc($result)) 
					{
                       echo '<tr><td width="5%" align=center style="padding: 10px;" >'.$row['id'].'</td><td width="20%" align=center style="padding: 10px;">'.$row['name'].'</td><td width="10%" align=center style="padding: 10px;">'.$row['price'].'</td></tr>';
					}
        }
		echo '</table>';
        }


else {
	echo "something went wrong<br>";
//	print_r(mysqli_error($conn));
	}
}				
				
if(isset($_POST['home']))
{
	
	echo '<br><br><font size=5>This vulnerable code simulate the environment of SQL Injection vulnerability when user can perform concatination based SQL injection.';
	
}

if(isset($_POST['plans']))
{
	
	echo '
   <table width="15%" cellspacing="0" cellpadding="0" class="tb1" style="opacity: 0.6;">
   <tr><td width="100%" align=center style="padding: 10px;" >Server Core</td></tr></table>
   <table width="10%" cellspacing="0" cellpadding="0" class="tb1" style="margin:10px 2px 10px;opacity: 0.6;" >
   ';
    $run='select name from hosting';
    $result = mysqli_query($conn, $run);
	
        if (mysqli_num_rows($result) > 0) 
		{
			
                while($row = mysqli_fetch_assoc($result)) 
					{
                       echo '<tr><td width="5%" align=center style="padding: 10px;" ><u><a href=?core='.$row['name'].'>'.$row['name'].'</a></u></td></tr>';
					}
        }
		echo '</table>';
   
	
}


				
if(isset($_POST['us']))
	{
		echo '
<table width="100%" cellspacing="0" cellpadding="0" class="tb1" style=" border:0px;background-color: #191919; opacity: 0.6;" >
			
       <tr><td 
        align="center"><img src="images/who.jpg"></td><td 
         align="center" valign="top" rowspan="1"><font 
        color="red" face="comic sans ms"size="1"><br><font color=white >
        --==[[Greetz to]]==--</font><br> <font color=#ff9933>Guru ji zero ,code breaker ica, root_devil, google_warrior,INX_r0ot,Darkwolf indishell,Baba ,Silent poison India,Magnum sniper,ethicalnoob Indishell,Local root indishell,Irfninja indishell<br>Reborn India,L0rd Crus4d3r,cool toad,Hackuin,Alicks,Gujjar PCP,Bikash,Dinelson Amine,Th3 D3str0yer,SKSking,rad paul,Godzila,mike waals,zoo zoo,cyber warrior,shafoon, Rehan manzoor<br>cyber gladiator,7he Cre4t0r,Cyber Ace, Golden boy INDIA,Ketan Singh,Yash,Aneesh Dogra,AR AR,saad abbasi,hero,Minhal Mehdi ,Raj bhai ji , Hacking queen ,lovetherisk and rest of TEAM INDISHELL<br>
<font color=white>--==[[Love to]]==--</font><br># My Father ,my Ex Teacher,cold fire hacker,Mannu, ViKi ,Ashu bhai ji,Soldier Of God, Bhuppi,Gujjar PCP,
Mohit,Ffe,Ashish,Shardhanand,Budhaoo,Jagriti,Salty, Hacker fantastic, Jennifer Arcuri and Don(Deepika kaushik)<br><br>

       
						
           </table>
       </table> 
'; 

	}	
								
				

?>
