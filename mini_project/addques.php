<?php
    session_start();
    require_once "connection.php";

    
        // Counting No fo skilss
        $subject_code=$_SESSION['code'];
        $test_num=$_SESSION['tnum'];
        $question_num=$_POST['question_num'];
        $question=$_POST['question'];
        $count = count($_POST["mytext"]);
        $count1 = count($_POST["answer"]);
        //Getting post values
        $skill=$_POST["mytext"];
        $answer = $_POST["answer"];
        $cor_ans = "";
        
        if($count1 > 1){
            $type = "checkbox";
        }else{
            $type = "radio";
        }
        // for($i=0; $i<$count1; $i++)
        // {
        //     $options1[$i] = $answer[$i];
        // }
        $options[0]=null; $options[1]=null; $options[2]=null; $options[3]=null; $options[4]=null; $options[5]=null; $options[6]=null;
        if($count > 1)
        {
            for($i=0; $i<$count; $i++)
            {
                $options[$i] = $skill[$i];
            }
            for($j=0; $j<$count1; $j++){
                $cor_ans =  $cor_ans.','.$options[$answer[$j]];  
            }
            
            $sql =" INSERT into questions VALUES('$question_num','$subject_code','$test_num','$question','$options[0]','$options[1]','$options[2]','$options[3]','$options[4]','$options[5]','$options[6]', '$cor_ans', '$type')";
            if($database->query($sql)){
                echo "<script>alert('success');
                    window.location.href='./addques.html';
                </script>";
            }else{
                echo "<script>alert('Duplicate Question');
                    window.location.href='./addques.html';
                </script>";
            }
            
        }
        else
        {
            echo "<script>alert('Please enter skill');</script>";
        }
    
?>
