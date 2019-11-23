<?php
 if( isset($_REQUEST['pid'])){
   addThis($_REQUEST['pid'],$_REQUEST['email']);
  } 
function addThis($pid,$email){
 include 'connectDb.php';
 $conn=openConn();
 $sql="insert into wishlist(productId,userEmail) values('".$pid."','".$email."')";
 $result = mysqli_query($conn,$sql);
 if( $result){
   echo("<script>document.cookie = \"pid=\";alert('product added to wishlist');=</script>");
 }else{
   echo("<script>document.cookie = \"pid=\";alert('internal error,try again');=</script>");
 }
}
  

?>