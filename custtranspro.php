<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./login.php');
}
?>	
<?php
     $tamount=$_REQUEST['t_val'];
     $senderid=$_SESSION["key"];
     $recieverid=$_REQUEST['transfer'];
     
     //select last transaction id in reciever's passbook.
	 
	$conn=mysqli_connect("localhost","root","","pan");				  
	if(!$conn){
		echo "Connection failed";};
     $sql="SELECT MAX(transactionid) from passbook".$recieverid;
     $result=mysqli_query($conn,$sql);
     $res=  mysqli_fetch_array($result);
     $rlasttid=$res[0];
    
    //select the details in the last row of reciever's passbook.
	
    $sql="SELECT * from passbook".$recieverid." WHERE transactionid='$rlasttid'";
    $result=mysqli_query($conn,$sql);
    while($res= mysqli_fetch_array($result)){
    $ramount=$res[7];
    $rname=$res[2];
    $rbranch=$res[3];
    $rifsc=$res[4];
    }
    
   //select the last transaction id in the sender's passbook
   
     $sql="SELECT MAX(transactionid) from passbook".$senderid;
     $result=mysqli_query($conn,$sql);
     $res=  mysqli_fetch_array($result);
     $slasttid=$res[0];
    
    //select the details in the last row of sender's passbook.
    $sql="SELECT * from passbook".$senderid." WHERE transactionid='$slasttid'";
    $result=mysqli_query($conn,$sql);
    while($res= mysqli_fetch_array($result)) {
    $samount=$res[7];
    $sname=$res[2];
    $sbranch=$res[3];
    $sifsc=$res[4];
    }
    
    $date=date("Y-m-d");
    
    $stotal=$samount-$tamount; //sender's final balance.
    
    if($samount<=500)
    {
        echo '<script>alert("Your account balance is less than Rs. 500.\n\nYou must maintain a minimum balance of Rs. 500 in order to proceed with the transfer.");';
        echo 'window.location= "custtrans.php";</script>';
    }
    elseif($tamount<100){
         echo '<script>alert("You cannot transfer less than Rs. 100");';
        echo 'window.location= "custtrans.php";</script>';
    }
    elseif($stotal<500)
    {
        echo '<script>alert("You do not have enough balance in your account to proceed this transfer.\n\nYou must maintain a minimum of Rs. 500 in your account.");';
        echo 'window.location= "custtrans.php";</script>';
    }
    
    else{ 
        //insert statement into reciever passbook.
		
        $rtotal=$ramount+$tamount;
        $sql1="insert into passbook".$recieverid." values('','$date','$rname','$rbranch','$rifsc','$tamount','0','$rtotal','BY $sname')";
        mysqli_query($conn,$sql1);
        
        //insert statement into sender passbook.
        $stotal=$samount-$tamount;
        $sql2="insert into passbook".$senderid." values('','$date','$sname','$sbranch','$sifsc','0','$tamount','$stotal','TO $rname')";
         mysqli_query($conn,$sql2);
        
        echo '<script>alert("Transfer Successful.");';
        echo 'window.location= "custtrans.php";</script>';
    }
?>