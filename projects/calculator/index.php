<?php
    function encode_secure(inpt){
       str_replace(['"',"'",':'], "", htmlspecialchars(inpt, ENT_QUOTES))
    }
    // We are storing the value of a
    if(isset($_REQUEST['a']))
        $a = encode_secure($_REQUEST['a']);
    else
        $a = 0;
    
    /* we are storing value of b */
    if(isset($_REQUEST['b']))
        $b = encode_secure($_REQUEST['b']);
    else
        $b = 0;

    /* we are storing value of op */
    if(isset($_REQUEST['op']))
        $op = encode_secure($_REQUEST['op']);
    else
        $op = 0;

    $result = 0;
    if($op!="0"){
        if($op=='add')
            $result = $a + $b;
        else if($op=='sub')
            $result = $a - $b;
        else if($op=='mul')
            $result = $a * $b;
        else if($op == 'div'){
            if($b!=0)
            $result = $a / $b;
            else
            $result = "Error - b cannot be zero";
        }
    }
    

?>

<!doctype html>
<html>
    <head>
        <title>Calculator App</title>
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body class="bg-light">
        
        <div class="container">
            <div class="p-5 mt-5 bg-warning border border-success">
                <h1> Calculator </h1>
                <form method="get" action="index.php">
                  <div class="form-group">
                    <label >Enter Value of A</label>
                      
                      
                    <input type="text" name="a" value="<?php echo encode_secure($a);?>" class="form-control"  >
                      
                      
                      
                  </div>
                  <div class="form-group">
                    <label >Enter Value of B</label>
                    <input type="text" name="b" value="<?php echo encode_secure($b);?>" class="form-control"  >
                  </div>
                  <div class="form-group">
                     <label >Operation</label>
                    <select class="form-control" name="op">
                      <option value="add">Add</option>
                      <option value="sub">Subtract</option>
                      <option value="mul">Multiply</option>
                     <option value="div">Division</option>
                    </select>
                    </div>
                    
                    <div class="bg-light border p-3 mb-3">
                        <h4> Result</h4>
                        <h1><?php echo encode_secure($result); ?></h1>
                    </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        
    
    </body>

</html>
