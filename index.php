<?php

$to = 'infoglobalmiami@gmail.com';
$subject = 'This came for your client';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message= $_POST['message'];

$body = <<<EMAIL

Hi! My name is $name.

$message

From $name
oh ya, my email is $email

EMAIL;
$header = "from: $email";

if($_POST){
    if($name =='' || $email == '' || $phone == '' ||$message == ''){
    $feedback = 'fill out all the fields';
}else{
    mail($to, $subject, $body,$header);
    $feedback = 'Thank you';

    }
}




?>
                 <form action="http://www.globalmiaminsurance.com/thankyou.html" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email"  name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" name="phone" id="phone" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" name="message" id="message" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <input type="hidden" name="subject" value="Form Submission" />
                                <input type="hidden" name="redirect" value="index.html" />
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>