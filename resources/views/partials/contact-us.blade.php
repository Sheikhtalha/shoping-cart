@extends('layouts.master')
@section('title')
    Contact Us
 @endsection
 @section('content')
  <div class="text-center">
  	<h1 class="details">Contact Us</h1>
  	<p class="paragraph">Have any queries ? Get in touch with us.</p>
  </div>
<hr> 
 <section class="contact-us" id="contact">
	<div class="container">
		
            <div class="col-md-8 slideanim">
                <!--  <h3 class="text-center">Write To Us</h3>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>	 -->
			    <form action="sendmsg" method="post" name="sentMessage" id="contactForm" novalidate>
               		<div class="control-group form-group">
                        <div class="controls col-md-8">
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name " required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required placeholder="Please enter your email address.">
							<p class="help-block"></p>
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message placeholder="Please enter your phone number.">
							<p class="help-block"></p>
							<label class="contact-p1">Subject:</label>
                            <input type="text" class="form-control" name="subject" id="subject" required data-validation-required-message placeholder ="Please enter Subject.">
                            <p class="help-block"></p>
                            <label class="contact-p1">Message:</label>
                            <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
							<p class="help-block"></p>
                        </div>
                    </div>	
                	
                    <div class="controls col-md-8 text-center" id="success">
                     <input type="submit" name="search" class="btn btn-success btn-block" value="Submit">
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <!-- <button type="submit" class="btn btn-primary" value="{{csrf_token()}}">Send Message</button> -->
                    </div>
			    </form>

            </div>
            <div class="col-md-4 slideanim">
				<h4>Our Contacts :</h4>
                <p><b>Phone</b> : +92 345 9450232</p>
                <p><b>Email</b> : <a href="mailto:contact@rockstuff.com"></a>contact@rockstuff.com</p>
                <p><b>Address</b> :161 Raja Center Main Buleverd Gulberg , Lahore , Punjab , Pakistan</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13604.18375507149!2d74.3473029!3d31.5228982!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x29cef52eb2e09968!2sRaja+Center!5e0!3m2!1sen!2s!4v1506955405962" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="clearfix"></div>
    </div>
</section>
<!--form feedback-->
<!-- <section>
	<div class="container">
	<div class="col-lg-12">
	<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d380510.6741687111!2d-88.01234121699822!3d41.83390417061058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1455598377120" style="border:0" allowfullscreen></iframe>
	</div>
	</div>
	</section> -->
	<section class="footer">
		<h1>hell is here</h1>
	</section>
  @endsection
