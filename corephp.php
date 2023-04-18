MODULE 5(Web Services)
Q-1 Create API for Registration & Login Page. 

Ans:

\tab\tab API for Registration
\tab $register= $this->select
\tab ("users",array("email"=>$_REQUEST['email']));
\tab echo json_encode($register);

\tab\tab <script>
\tab\tab function check(e)
\tab\tab\{
\tab\tab      $.ajax(\{
\tab\tab\tab type:"post",data:\{"email":e.value\},
\tab\tab\tab url:"the path of the api",
\tab\tab\tab success:function(response)
\tab\tab\tab\{
\tab\tab\tab\tab console.log(response);
\tab\tab\tab\tab objectdata = JSON.parse(response)
\tab\tab\tab\tab console.log(objectdata.code);\tab
\tab\tab\tab\}
\tab\tab\tab\})
\tab\tab\}
\tab\tab </script>


 API for Login
 $login= $this->insert("users");
 echo json_encode($login);

Q-2  Create Web Service for your MVC Project.
        Create API for Image Uploading. 
Ans:
API for Image Uploading
$imageupload= $this->insert("image");
echo json_encode($imageupload);
