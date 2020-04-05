<?php
if(isset($_POST['submit1']))
{
    $account = check($_POST['account']);
    $cif = check($_POST['cif']);
    
   if($account == null ||  empty($cif))
    {
        
        
        return back();
       /* header('location:newuser.blade.php?error=fill the mandatory fields are required');*/
        
    }
    /*echo "hello vishnu";
    $account = 12345678901;
    $account = DB::TABLE('banks')->where('account','=', $account)->pluck('id');
    echo $account;*/
}
echo "hell mc";
function check($data)
{
    $data=htmlspecialchars($data);
    $data=stripslashes($data);
    $data=trim($data);
    return $data;
}
?>