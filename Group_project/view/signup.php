<style>
    .forme_color {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    width: 50%;
    margin: 10px auto;
}
</style> <!-- -------------- section 9 --------------  -->


 <section class="se_9" >
        <div class="container">
            <div class="row align-items">
                
                    
                    <div class="se_7_text"><br>
                        <h4>...REGISTER YOURSELF...</h4>
                        <p>Enter your details</p>
                    </div>
                    <br>
                    <br>
                    <form class="  forme_color"  method="post" id="adduser">
                        
                    
                        <input type="text" placeholder="Name" name="name">
                        <input type="text" placeholder="Email" name="email" />
                        <input type="tel" placeholder="Mobile number" name="mobile_no">
                        <select name="gender" >
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <!-- <select name="class" >
                            <option value="Online Course">Online Course</option>
                            <option value="Offline Course">Offline Admission</option>
                        </select>
                        <select name="course" >
                            <option value="JEE">JEE</option>
                            <option value="NEET">NEET</option>
                        </select> -->
                         <!-- <select name="batch" >
                            <option value="batch1">Batch1</option>
                            <option value="batch2">Batch2</option>
                        </select> -->
                        <?php
                        // $batch=$_GET['name'];
                        $course=$_GET['course'];
                        $class=$_GET['class'];
                        ?>
                        <input type="text" value="<?php echo $class;?>" name="class" disable>
                        <input type="text" value="<?php echo $course;?>" name="course" disable>
                        <!-- <input type="text" value="<?php //echo $batch;?>" name="batch_name" disable> -->
                       
                        

                        <!-- <button name="inquiry">Submit</button> -->
                        <button type="submit" onclick="adduser()" >Submit<button>
                    </form>
                
            </div>
        </div>
    </section>
    <script>
    
    </script>