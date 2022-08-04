<?php include 'inc/app.php'; ?>
<link rel="stylesheet" href="css/booking.css">
<!--  Start Here -->
<!-- wester-sec Start Here -->
<section class="booking-sec">
    <div class="container">
        <div class="books-detail1">
            <form action="">
                <div class="row">
                    <div class="col-md-2 ">
                        <div class="book-heading1 arrival-border">
                            <h3>Book your <br>
                                <span>rooms</span>
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="arrival">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-calendar __web-inspector-hide-shortcut__">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                            <!-- <input type="text" class="form-control " placeholder="<i class="fa fa-calendar"></i> "> -->
                            <input type="text" class="form-control empt" id="iconified" placeholder="  Arrival Date" />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="arrival">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-calendar __web-inspector-hide-shortcut__">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                            <!-- <input type="text" class="form-control " placeholder="<i class="fa fa-calendar"></i> "> -->
                            <input type="text" class="form-control empt" id="iconified" placeholder=" Departure Date" />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="arrival">
                            <select class="selt" placeholder="  Arrival Date">
                                <option>No of rooms</option>
                                <option>No of Persons</option>
                                <option>No of Persons</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="arrival">
                            <select class="selt" placeholder="  Arrival Date">
                                <option>No of Persons</option>
                                <option>No of Persons</option>
                                <option>No of Persons</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="book-heading">
                            <a href="">
                                <button class="btn btn-primary reserve-btn">Check availibity</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <div class="booking-heading">
                                <h3>Dundonnell Hotel</h3>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Price</label>
                                <select class="form-control" id="exampleFormControlSelect1" placeholder="Sort by">
                                    <option>Sort by</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Currency</label>
                                <select class="form-control" id="exampleFormControlSelect1" placeholder="GBP">
                                    <option>GBP</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Promo Code</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Type Here">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--wester-sec End Here -->
<!-- booking-forms -->
<section class="booking-form-sec">
    <div class="leaves-sec">
        <div class="leave-wrapper box up-down">
            <img src="./img/path12.png" class="img-fluid" alt="">
        </div>
        <div class="leave-wrapper1 box up-down">
            <img src="./img/path14.png" class="img-fluid" alt="">
        </div>
        <div class="leave-wrapper2 box up-down">
            <img src="./img/left1.png" class="img-fluid" alt="">
        </div>
        <div class="leave-wrapper3 box up-down">
            <img src="./img/left1.png" class="img-fluid" alt="">
        </div>
        <div class="leave-wrapper4 box up-down">
            <img src="./img/path15.png" class="img-fluid" alt="">
        </div>
        <div class="leave-wrapper5 box up-down">
            <img src="./img/path16.png" class="img-fluid" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tabs">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item " role="presentation">
                            <button class="nav-link active show" id="pills-home-tab" data-toggle="pill"
                                data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Choose</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Customize</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Book</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boking-slider-wrapper">
                                <div class="row">
                                    <div class="col-md-3  p-0">
                                        <div class="img-wrapper-slider">
                                            <img src="./img/path11.png" class="img-fluid" alt="">
                                            <img src="./img/path3.png" class="img-fluid" alt="">
                                            <img src="./img/path4.png" class="img-fluid" alt="">
                                            <img src="./img/path5.png" class="img-fluid" alt="">
                                            <img src="./img/path6.png" class="img-fluid" alt="">
                                            <img src="./img/path7.png" class="img-fluid" alt="">
                                            <img src="./img/path8.png" class="img-fluid" alt="">
                                            <img src="./img/path10.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <div class="save-content">
                                            <div class="bed-text-wrapper">
                                                <div class="headind-bed">
                                                    <h4>BED & BREAKFAST, PAY NOW & SAVE 10%</h4>
                                                </div>
                                                <div class="five-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-bed">
                                            <button class="btn1">
                                                NON refundable
                                            </button>
                                            <button class="btn1">
                                                Breakfast included
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="para-fivestar">
                                                    <p>Fully pre-paid once booking has been received, non-refundable and
                                                        non-transferable. A credit or debit card is required to
                                                        guarantee your
                                                        booking, the full cost of the stay will be taken at the time of
                                                        booking.
                                                        Please note all guests must present a debit/credit card on check
                                                        in to
                                                        validate..... <span> read more</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Here -->

<?php include 'inc/footer.php'; ?>