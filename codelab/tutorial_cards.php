<!DOCTYPE html>
<html>
<head>
<title>Tutorial Upload</title>
<style type="text/css">
   #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
   }
   form{
    width: 50%;
    margin: 20px auto;
   }
   form div{
    margin-top: 5px;
   }
   #img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <form method="POST" action="tutorial_upload.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">

    <div>
      <input id="topic" name="topic" placeholder="topic" type="text"></p>
    </div>
    <div>
      <input type="link" name="link" id="link">
    </div>
   
    <div>
      <textarea 
        id="description" 
        cols="40" 
        rows="4" 
        name="description" 
        placeholder="description" maxlength="145"></textarea>
    </div>
    <div>
      <button type="submit" name="upload">POST</button>
    </div>
  </form>
</div>
</body>
</html>