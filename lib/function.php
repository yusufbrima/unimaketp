<?php
//error_reporting(0);

/*Database connection configuration settings*/
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'etp';
$conn =  new mysqli($server,$user,$password,$db);

/*Form validation checking functions*/ 
function validate_field($field_string){
   if(isset($field_string) && !empty($field_string)){
     return true;
   }else{
     return false;
   }
 }

 /*Hard redirection*/
    function location($url){
        if(!empty($url)){
            $script = "<script type='text/javascript'>window.location='{$url}'</script>";
    				//$script = "<meta content='0,{$url}' http-equiv='refresh' >";
            echo $script;
        }
    }
    /*SQL prevention function */
      	function mysql_fix_string($string){
      				if (get_magic_quotes_gpc()) $string = stripslashes($string);
      				return mysql_real_escape_string($string);
      				}
class Application{
     const applicationTitle ="ETP Electronic Application System";
     const applicationVersion = "Version 0.0.1";
     const applicationAuthor ="ETP Team";
     const applicationSupportURL = "http://www.unimak-etp.edu./";
  public function _construct(){

  }
   public function showAppInfo(){
       $display ="Application Title   ".self::applicationTitle."
                  Application Author        ".self::applicationAuthor."
                  Application Version       ".self::applicationVersion."
                  Application Support URL   ".self::applicationSupportURL;
        return $display;
     }
}
/*Application token generation class*/
class appToken{
    public function _construct(){

    }
  public static function generateAppToken(){
    $curDate = date('ymdhgs');
        $randSeed = mt_rand(1000000,9999999);
    $appicationToken = $curDate.$randSeed;
    return $appicationToken;
  }
}


/*User management class*/
class user{
  public $username ="";
  public $password = "";
  public $rePassword="";
  public static function addUser($username,$password,$conn){
    $password =  self::hashPassord($password);
    $query = "INSERT INTO user(username,password) VALUES('$username','$password')";
    if($conn->query($query)){
      return true;
    }else{
      return false;
    }
  }
   static function hashPassord($password){
    if(count($password)>0){
      return hash('ripemd256',$password);
    }else{
      return NULL;
    }
  }
 public static function comparePassword($password,$rePassword){
   return ($password==$rePassword)?true:false;
 }
 public static function login($username,$password,$conn){
   $password =  self::hashPassord($password);
   $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
   $result = $conn->query($query);
   $num_row   = mysqli_num_rows($result);
   if ($num_row ==1){
         return true;
     }else {
       return false;
     }
 }
  public static function checkUser($username,$conn){
   $query = "SELECT * FROM user WHERE username='$username'";
   $result = $conn->query($query);
   $num_row   = mysqli_num_rows($result);
   if ($num_row ==1){
      return true;
     }else {
       return false;
     }
 }
}

  $app =  new Application();
?>
