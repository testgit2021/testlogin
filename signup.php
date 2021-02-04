<?php
include_once 'header.php';?>
<div class="container rounded w-50 mt-3 mb-5">
    <?php
        if(isset($_GET['empty'])){
            echo '<p class="text-danger">Please fill in all  * fields and accept the privacy policy to create account!</p>';
        }
        if(isset($_GET['passdontmatch'])){
            echo "<p class='text-danger'>Your passwords don't match!</p>";
        }
    ?>
    <form class="form-control bg-light" action="includes/signup.inc.php" method="post">
        <div class="col-12">
            <?php
            if(isset($_GET['email'])){
                if($_GET['email'] === "" && isset($_GET['empty'])){
                    echo '<span class="text-danger">*</span>';
                }
            }
            ?>
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control mb-2" name="email" id="inputEmail4" placeholder="Your email address"
            <?php 
            if(isset($_GET['email'])){echo 'value=' . $_GET['email'] . '';}
            ?>>
        </div>
        <div class="col-12">    
        <?php
            if(isset($_GET['email'])){
                if(isset($_GET['empty'])){
                    echo '<span class="text-danger">*</span>';
                }
            }
            ?>
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control mb-2" name="password" placeholder="Your password" id="inputPassword4">    
        </div>
        <div class="col-12">
            <?php
            if(isset($_GET['email'])){
                if(isset($_GET['empty'])){
                    echo '<span class="text-danger">*</span>';
                }
            }
            ?>
            <label for="inputPassword4" class="form-label">Verify Password</label>
            <input type="password" class="form-control mb-2" name="checkpassword" placeholder="Re-type password" id="inputPassword4">    
        </div>
        <div class="col-12">
            <?php
            if(isset($_GET['username'])){
                if($_GET['username'] === "" && isset($_GET['empty'])){
                    echo '<span class="text-danger">*</span>';
                }
            }
            ?>
            <label for="inputAddress" class="form-label">User Name</label>
            <input type="text" class="form-control" name="uid" id="inputAddress" placeholder="User Name" value='<?php if(isset($_GET['username'])){
                $username = explode(" ", $_GET['username']);
                for ($i=0; $i < count($username) - 1; $i++) { 
                    print_r ($username[$i]);
                    echo " ";
                
                }echo $username[count($username) - 1];
                
            }
                ?>'>
        </div>

        
        <div class="col-12">
            <?php
            if(isset($_GET['firstname'])){
                if($_GET['firstname'] === "" && isset($_GET['empty'])){
                    echo '<span class="text-danger">*</span>';
                }
            }
            ?>
            <label for="inputAddress" class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstname" id="inputAddress" placeholder="First Name" value='<?php if(isset($_GET['firstname'])){
                $username = explode(" ", $_GET['firstname']);
                for ($i=0; $i < count($username) - 1; $i++) { 
                    print_r ($username[$i]);
                    echo " ";
                
                }echo $username[count($username) - 1];
                
            }
                ?>'>
        </div>
        <div class="col-12">
            <?php
            if(isset($_GET['lastname'])){
                if($_GET['lastname'] === "" && isset($_GET['empty'])){
                    echo '<span class="text-danger">*</span>';
                }
            }
            ?>
            <label for="inputAddress" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastname" id="inputAddress" placeholder="Last Name" value='<?php if(isset($_GET['lastname'])){
                $username = explode(" ", $_GET['lastname']);
                for ($i=0; $i < count($username) - 1; $i++) { 
                    print_r ($username[$i]);
                    echo " ";
                
                }echo $username[count($username) - 1];
                
            }
                ?>'>
        </div>
        <div class="col-12">
            <?php
            if(isset($_GET['dob'])){
                if($_GET['dob'] === "" && isset($_GET['empty'])){
                    echo '<span class="text-danger">*</span>';
                }
            }
            ?>
            <label for="inputAddress" class="form-label">Date of birth</label>
            <input type="date" class="form-control" name="dob" id="inputAddress" value='<?php if(isset($_GET['dob'])){
                $username = explode(" ", $_GET['dob']);
                for ($i=0; $i < count($username) - 1; $i++) { 
                    print_r ($username[$i]);
                    echo " ";
                
                }echo $username[count($username) - 1];
                
            }
                ?>'>
        </div>
        <div class="col-12">
            <?php
            if(isset($_GET['addr1'])){
                if($_GET['addr1'] === "" && isset($_GET['empty'])){
                    echo '<span class="text-danger">*</span>';
                }
            }
            ?>
            <label for="inputAddress" class="form-label">Address 1</label>
            <input type="text" class="form-control" name="address1" id="inputAddress" placeholder="1234 Main St" value='<?php if(isset($_GET['addr1'])){
                $username = explode(" ", $_GET['addr1']);
                for ($i=0; $i < count($username) - 1; $i++) { 
                    print_r ($username[$i]);
                    echo " ";
                
                }echo $username[count($username) - 1];
                
            }
                ?>'>
        </div>
        <div class="col-12">
            <?php
            if(isset($_GET['addr2'])){
                if($_GET['addr2'] === "" && isset($_GET['empty'])){
                    echo '<span class="text-danger">*</span>';
                }
            }
            ?>
            <label for="inputAddress2" class="form-label">Address 2</label>
            <input type="text" class="form-control" name="address2" id="inputAddress2" placeholder="Apartment, studio, or floor" value='<?php if(isset($_GET['addr2'])){
                $username = explode(" ", $_GET['addr2']);
                for ($i=0; $i < count($username) - 1; $i++) { 
                    print_r ($username[$i]);
                    echo " ";
                
                }echo $username[count($username) - 1];
                
            }
                ?>'>
        </div>
        <div class="col-md-6">
            <?php
            if(isset($_GET['city'])){
                if($_GET['city'] === "" && isset($_GET['empty'])){
                    echo '<span class="text-danger">*</span>';
                }
            }
            ?>
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" name="city" placeholder="Your city" id="inputCity" value='<?php if(isset($_GET['city'])){
                $username = explode(" ", $_GET['city']);
                for ($i=0; $i < count($username) - 1; $i++) { 
                    print_r ($username[$i]);
                    echo " ";
                
                }echo $username[count($username) - 1];
                
            }
                ?>'>
        </div>
        <div class="col-md-4">
            <?php
            if(isset($_GET['state'])){
                if($_GET['state'] === "" && isset($_GET['empty'])){
                    echo '<span class="text-danger">*</span>';
                }
            }
            ?>
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select" name="state">
            <?php if(isset($_GET['state']) && $_GET['state'] !== ""){
                echo '<option value="' . $_GET['state'] . '">' . $_GET['state'] . '</option>';
            }
            else{ echo '
            <option selected></option>
            <option value="California">California</option>
            <option value="New York">New York</option>
            <option value="Texas">Texas</option>
            <option value="Nevada">Nevada</option>';
        }?>
            </select>
        </div>
        <div class="col-md-2">
            <?php
            if(isset($_GET['zip'])){
                if($_GET['zip'] === "" && isset($_GET['empty'])){
                    echo '<span class="text-danger">*</span>';
                }
            }
            ?>
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" name="zip" placeholder="Zip code" id="inputZip" value='<?php if(isset($_GET['zip'])){
                $username = explode(" ", $_GET['zip']);
                for ($i=0; $i < count($username) - 1; $i++) { 
                    print_r ($username[$i]);
                    echo " ";
                
                }echo $username[count($username) - 1];
                
            }
                ?>'>
        </div>
        <div class="col-12">
            <?php
            if(isset($_GET['phone'])){
                if($_GET['phone'] === "" && isset($_GET['empty'])){
                    echo '<span class="text-danger">*</span>';
                }
            }
            ?>
            <label for="inputAddress" class="form-label">Telephone</label>
            <input type="number" class="form-control" name="phone" id="inputAddress" placeholder="Your phone number" value='<?php if(isset($_GET['phone'])){
                $username = explode(" ", $_GET['phone']);
                for ($i=0; $i < count($username) - 1; $i++) { 
                    print_r ($username[$i]);
                    echo " ";
                
                }echo $username[count($username) - 1];
                
            }
                ?>'>
        </div>
        <div class="col-12">
            <div class="form-check">
                <?php
            if(isset($_GET['checkbox'])){
                if($_GET['checkbox'] === "" && isset($_GET['empty']) || isset($_GET['passdontmatch'])){
                    echo '<span class="text-danger">*</span>';
                }
            }
            ?>
            <input class="form-check-input" type="checkbox" name="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Privacy policy
            </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
        </div>
        </form>
</div>
<?php
include_once 'footer.php';