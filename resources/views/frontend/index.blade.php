@extends('frontend.masterLayout.Main')

@section('content')



<div class="top-banner">
    <div class="container">
        <div class="usbdisd">
            <div class="top-line"></div>
            <span class="ml-2">Committed to success</span>
        </div>
        <h1 class="asasas">
            WE CARE ABOUT <br />
            YOUR HEALTH
        </h1>
        <a href="$" class="btn btn-primary ncgao"> View Doctors</a>


    </div>
</div>

<div class="pt-3 pb-3">
    <div class="doc-apoi">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="appointment-heading">
                        <h3>CHECK SCHEDULES</h3>
                    </div>
                    <form action="/submit_schedule" method="POST" name="scheduleForm" class="schedule">
                        <div class="form-group">
                            <label for="department-schedule">Department's Name</label>
                            <select name="department" id="department-schedule" class="form-control">
                                <option value="">Choose a Department</option>
                                <option value="cardiology">Cardiology</option>
                                <option value="dental">Dental</option>
                                <option value="neurologist">Neurologist</option>
                                <option value="pediatric">Pediatric</option>
                                <option value="pulmonary">Pulmonary</option>
                                <option value="traumatology">Traumatology</option>
                                <option value="urology">Urology</option>
                                <option value="xray">Xray</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="doctor-schedule">Doctor's Name</label>
                            <select name="doctor" id="doctor-schedule" class="form-control">
                                <option value="">Choose a Doctor</option>
                                <option value="dr-smith">Dr. Smith</option>
                                <option value="dr-jones">Dr. Jones</option>
                                <option value="dr-doe">Dr. Doe</option>
                                <!-- Add more doctors as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn"
                                style="background: #f20c36; color: white; font-weight: 400; padding: 10px 15px;">View
                                Schedule</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <form action="/submit_appointment" method="POST" name="appointmentForm" class="appointment">
                        <div class="appointment-heading">
                            <h3>BOOK APPOINTMENT</h3>
                        </div>
                        <div class="appointment-form">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="patient-name">Patient Name</label>
                                    <input type="text" name="pname" id="patient-name" class="form-control" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone-number">Phone Number</label>
                                    <input type="tel" name="phone" id="phone-number" class="form-control" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="gender">Gender</label>
                                    <select name="doctor" id="gender" class="form-control">
                                        <option value="">Choose Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email-address">Email Address</label>
                                    <input type="email" name="email" id="email-address" class="form-control" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="age">Age</label>
                                    <input type="number" name="age" id="age" class="form-control" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="choose-date">Choose Date</label>
                                    <input type="date" name="date" id="choose-date" class="form-control" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="choose-date">Time</label>
                                    <input type="time" name="date" id="choose-date" class="form-control" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="doctor-appointment">Choose Doctor</label>
                                    <select name="doctor" id="doctor-appointment" class="form-control">
                                        <option value="">Choose a Doctor</option>
                                        <option value="dr-smith">Dr. Smith</option>
                                        <option value="dr-jones">Dr. Jones</option>
                                        <option value="dr-doe">Dr. Doe</option>
                                        <!-- Add more doctors as needed -->
                                    </select>
                                </div>
                                <div class="form-goup col-md-4 sa">
                                    <button class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our-info-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="single_image">
                    <img src="{{ asset('frontend/./img/single-img-01.jpg') }}" class="img-fluid" width="1140" height="1196"
                        alt="Responsive Image" />
                </div>
            </div>

            <div class="col-lg-6 right-info-section">
                <div class="section-title p-3">
                    <h3>WHY CHOOSE US</h3>
                    <h2 class="text-md">Heart Surgery Specialist Expert Doctors</h2>
                    <p>Chest pain is the most common warning sign of a heart attack. But there can be other
                        symptoms, too, like lightheadedness.</p>
                </div>

                <div class="row p-3">
                    <div class="col-12 col-md-6 mt-1 mb-1">
                        <div class="row">
                            <div class="col-4 S#JDJBD">
                                <div class="icon-cont">
                                    <i class="fa-solid fa-heart-circle-plus"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="featured-content">
                                    <h5 class="fw-semibold">Heart Transplante</h5>
                                    <p class="m-0">Chest pain is the most common warning sign of a heart attack. But
                                        there</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex align-items-center mt-1 mb-1">
                        <div class="row">
                            <div class="col-4 S#JDJBD">
                                <div class="icon-cont">
                                    <i class="fa-solid fa-heart-pulse"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="featured-content">
                                    <h5 class="fw-semibold">Heart Transplante</h5>
                                    <p class="m-0">Chest pain is the most common warning sign of a heart attack. But
                                        there</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="border: 1px solid #ff0000; width: 100%;" />

                <div class="row p-3">
                    <div class="col-3 m-auto">
                        <img src="{{ asset('frontend/./img/male-student-practicing-medicine.jpg') }}" class="img-fluid"
                            alt="Medical Student" width="150px" height="100px" />
                    </div>
                    <div class="col-9 d-flex align-self-center">
                        <p class="mb-0">Our Cardiology Hospital Services Manufacture Found In 1996</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="welcome_docmed_area pb-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="welcome_docmed_info">
                    <h2>Welcome to Docmed</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>
                                Best Care For Your <br />
                                Good Health
                            </h3>
                            <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture
                                placing drawing. Apartments frequently or motionless on reasonable projecting
                                expression.</p>
                        </div>
                        <div class="col-lg-6">
                            <div id="animation-container">
                                <ul class="animated-list">
                                    <li><i class="fa fa-circle-right"></i>Apartments frequently or motionless.</li>
                                    <li><i class="fa fa-circle-right"></i>Duis aute irure dolor in reprehenderit in
                                        voluptate.</li>
                                    <li><i class="fa fa-circle-right"></i>Voluptatem quia voluptas sit aspernatur.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="jsuabs mt-2 mb-2">
                        <a href="#" class="boxed-btn3-white-2">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="welcome_thumb">
                    <div class="thumb_1">
                        <img src="{{ asset('frontend/./img/1.png') }}" class="img-fluid" />
                    </div>
                    <div class="thumb_2">
                        <img src="{{ asset('frontend/./img/2.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="our_department_area" id="department" style="padding: 6rem 0rem; background-color: ghostwhite;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-55">
                    <h3>Our Departments</h3>
                    <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing
                        drawing.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_department">
                    <div class="department_thumb">
                        <img src="{{ asset('frontend/./img/eye.png') }}" />
                    </div>

                    <div class="department_content">
                        <h3><a href="#" class="department-title">Eye Care</a></h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_department">
                    <div class="department_thumb">
                        <img src="{{ asset('frontend/./img/skin.png') }}" />
                    </div>

                    <div class="department_content">
                        <h3><a href="#" class="department-title">Skin Surgery</a></h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_department">
                    <div class="department_thumb">
                        <img src="{{ asset('frontend/./img/physical.png') }}" />
                    </div>

                    <div class="department_content">
                        <h3><a href="#" class="department-title">Physical Therapy</a></h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_department">
                    <div class="department_thumb">
                        <img src="{{ asset('frontend/./img/dental.png') }}" />
                    </div>

                    <div class="department_content">
                        <h3><a href="#" class="department-title">Dental Care</a></h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_department">
                    <div class="department_thumb">
                        <img src="{{ asset('frontend/./img/surgery.png') }}" />
                    </div>

                    <div class="department_content">
                        <h3><a href="#" class="department-title">Surgery Service</a></h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_department">
                    <div class="department_thumb">
                        <img src="{{ asset('frontend/./img/dia.png') }}" />
                    </div>

                    <div class="department_content">
                        <h3><a href="#" class="department-title">Diagnostic Test</a></h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="expert_doctors_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="doctors_title mb-2">
                    <h3>Expert Doctors</h3>
                    <div class="custom-navigation">
                        <i class="fa fa-arrow-left owl-prev"></i>
                        <i class="fa fa-arrow-right owl-next"></i>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="owl-carousel">
                    <div class="single_expert" style="width: 255px; margin-right: 30px;">
                        <div class="item expert_thumb">
                            <img src="{{ asset('frontend/./img/do1.jpg') }}" alt="Shoe 1" />
                        </div>
                        <div class="experts_name text-center">
                            <h3>Mirazul Alom</h3>
                            <span>Anesthesiology</span>
                        </div>
                    </div>

                    <div class="single_expert" style="width: 255px; margin-right: 30px;">
                        <div class="item expert_thumb">
                            <img src="{{ asset('frontend/./img/do2.jpg') }}" alt="Shoe 1" />
                        </div>
                        <div class="experts_name text-center">
                            <h3>Dr. Christopher Morgan</h3>
                            <span>Radiology</span>
                        </div>
                    </div>

                    <div class="single_expert" style="width: 255px; margin-right: 30px;">
                        <div class="item expert_thumb">
                            <img src="{{ asset('frontend/./img/do3.jpg') }}" alt="Shoe 1" />
                        </div>
                        <div class="experts_name text-center">
                            <h3>Dr. Daniel Clarke</h3>
                            <span>Psychiatry</span>
                        </div>
                    </div>

                    <div class="single_expert" style="width: 255px; margin-right: 30px;">
                        <div class="item expert_thumb">
                            <img src="{{ asset('frontend/./img/do4.jpg') }}" alt="Shoe 1" />
                        </div>
                        <div class="experts_name text-center">
                            <h3>Dr. Ethan Reynolds</h3>
                            <span>Dermatology</span>
                        </div>
                    </div>

                    <div class="single_expert" style="width: 255px; margin-right: 30px;">
                        <div class="item expert_thumb">
                            <img src="{{ asset('frontend/./img/do5.jpg') }}" alt="Shoe 1" />
                        </div>
                        <div class="experts_name text-center">
                            <h3>Dr. Alexander Ross</h3>
                            <span>Neurology</span>
                        </div>
                    </div>

                    <div class="single_expert" style="width: 255px; margin-right: 30px;">
                        <div class="item expert_thumb">
                            <img src="{{ asset('frontend/./img/docc.png') }}" alt="Shoe 1" />
                        </div>
                        <div class="experts_name text-center">
                            <h3>Dr. Emily Parker</h3>
                            <span>Pulmonology</span>
                        </div>
                    </div>

                    <!-- Add more items as needed -->
                </div>


            </div>
        </div>
    </div>
</div>

<div class="footer-section">
    <footer class="container-fluid bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sas">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('frontend/./img/logo.png.webp') }}" class="img-fluid" alt="Logo" />
                        </a>
                    </div>
                    <p class="mt-4 mb-4">Firmament morning sixth subdue darkness creeping gathered divide.</p>
                    <ul class="social-link">
                        <li>
                            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <h5>Departments</h5>
                    <ul class="ftr-js">
                        <li><a href="#">Eye Care</a></li>
                        <li><a href="#">Skin Care</a></li>
                        <li><a href="#">Pathology</a></li>
                        <li><a href="#">Dental</a></li>
                        <li><a href="#">Medicine</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6 brdras">
                    <h5>Useful Links</h5>
                    <ul class="ftr-js">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Appointment</a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h5 class="kdddjjd">Address</h5>
                    <div class="mappp">
                        <address>
                            200, D-block, Green lane +91 8378477289 sonukumawat6282@gmail.com
                        </address>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43114229.764751576!2d-33.55224609375001!3d48.73445537176822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696348be05ba74b%3A0xb4dd920d69b40ad!2sNational%20Medical%20Research%20Center.%20VA%20Almazov!5e0!3m2!1sen!2sin!4v1704275666181!5m2!1sen!2sin"
                            width="265" height="225" style="border: 0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @endsection
