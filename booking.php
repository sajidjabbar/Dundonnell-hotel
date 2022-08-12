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
                    <div class="col-md-12 col-12">
                        <div class="form-wrapper">
                            <div class="col-md-2 p-0">
                                <div class="booking-heading">
                                    <h3>Dundonnell Hotel</h3>
                                </div>
                            </div>
                            <div class="col-md-3">
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
                            </div>
                            <div class="col-md-3">
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
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Promo Code</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Type Here">
                                </div>
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
            <div class="col-md-12 col-12">
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
                                    <div class="col-md-3 col-3 p-0">
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
                                    <div class="col-md-9 col-9 p-0">
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
                                            <div class="col-md-8 col-8">
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
                                            <div class="col-md-4 col-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
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
                                    <div class="col-md-3 col-3 p-0">
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
                                    <div class="col-md-9 col-9 p-0">
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
                                            <div class="col-md-8 col-8">
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
                                            <div class="col-md-4 col-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
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
                                    <div class="col-md-3 col-3 p-0">
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
                                    <div class="col-md-9 col-9 p-0">
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
                                            <div class="col-md-8 col-8">
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
                                            <div class="col-md-4 col-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
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
                                    <div class="col-md-3 col-3 p-0">
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
                                    <div class="col-md-9 col-9 p-0">
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
                                            <div class="col-md-8 col-8">
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
                                            <div class="col-md-4 col-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
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
                                    <div class="col-md-3 col-3 p-0">
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
                                    <div class="col-md-9 col-9 p-0">
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
                                            <div class="col-md-8 col-8">
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
                                            <div class="col-md-4 col-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
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
                                    <div class="col-md-3 col-3 p-0">
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
                                    <div class="col-md-9 col-9 p-0">
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
                                            <div class="col-md-8 col-8">
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
                                            <div class="col-md-4 col-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
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
                                    <div class="col-md-3 col-3 p-0">
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
                                    <div class="col-md-9 col-9 p-0">
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
                                            <div class="col-md-8 col-8">
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
                                            <div class="col-md-4 col-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
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
                                    <div class="col-md-3 col-3 p-0">
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
                                    <div class="col-md-9 col-9 p-0">
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
                                            <div class="col-md-8 col-8">
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
                                            <div class="col-md-4 col-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
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
                                    <div class="col-md-3 col-3 p-0">
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
                                    <div class="col-md-9 col-9 p-0">
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
                                            <div class="col-md-8 col-8">
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
                                            <div class="col-md-4 col-4">
                                                <div class="august">
                                                    <h5>Mon, 15 August, 2 nights <br>
                                                        <span> <i class="fa-regular fa-user"></i> 1 adult</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group1.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Only 3 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <div class="img-bed-wrapper2">
                                                    <a href=""><button class="btn12">
                                                            Book now
                                                        </button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="img-bed-rest">
                                                    <img src="./img/group2.png" alt="">
                                                    <div class="img-bed-wrapper1">
                                                        <h5>Executive Bedroom</h5>
                                                        <h6>Last chance! only 1 left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2 p-0">
                                                <div class="img-bed-wrapper">
                                                    <h5>avg.price per night</h5>
                                                    <h6>£117.50</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-1">
                                                <div class="img-bed-wrapper">
                                                    <h5>£267.50</h5>
                                                    <h6> <strike> £330.50 </strike></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-3">
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
                            <div class="booking-wrapper-content">
                                <div class="boking-slider-wrappers">
                                    <div class="row">
                                        <div class="col-md-9 p-0">
                                            <div class="customize-heading">
                                                <h3>BED & BREAKFAST, PAY NOW & SAVE 10%</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="five-star stars">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                        <<<<<<< HEAD <div class="customize-heading">
                                            <a href="javascript:void(0) " class="btn btn-primary custom">NON
                                                refundable</a>
                                            <a href="javascript:void(0)" class="btn btn-primary custom">Breakfast
                                                included</a>
                                            <p>Fully pre-paid once booking has been received, non-refundable and
                                                non-transferable. A credit or debit
                                                card is required to guarantee your booking, the full cost of the stay
                                                will
                                                be taken at the time of booking. Please note all
                                                guests must present a debit/credit card on check in to validate..... <a
                                                    href="javascript:void(0)" class="custom-read"> read more</a></p>
                                    </div>
                                    <div class="discount-box">
                                        <div class="col-md-7">
                                            <div class="discount-left">
                                                <h4>Discount Code?</h4>
                                                <p>If you have a discount code, please enter it here</p>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="discount">
                                                <form class="form-inline">
                                                    <div class="form-group mx-sm-3 mb-2">
                                                        <input type="" class="form-control" id="inputvocher2"
                                                            placeholder="Discount Code">
                                                        <div class="input-group">
                                                            <button class="btn btn-primary  discount-btn  custom"
                                                                type="button">Apply Code</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="custom-bed-imgbox">
                                            <img src="img/custombed.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="custom-imgbox">
                                                    <img src="img/custom-1.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-imgbox">
                                                    <img src="img/custom2.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-imgbox">
                                                    <img src="img/custom3.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-imgbox cus-img">
                                                    <img src="img/custom4.png" alt="" class="img-fluid">
                                                    <div class="custom-add-img">
                                                        <a href=""><i class="fas fa-images"></i> 25+</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-heading">
                                            <h3>EXECUTIVE BEDROOM (CASTLE, COURTYARD OR GARDEN LOCATION)</h3>
                                            <p>Fully pre-paid once booking has been received, non-refundable and
                                                non-transferable.
                                                A credit or debit card is required to guarantee your booking, the
                                                full
                                                cost of the stay
                                                will be taken at the time of booking. Please note all guests must
                                                present a debit/credit
                                                card on check in to validate..... <a href="javascript:void(0)"
                                                    class="custom-read"> read more</a></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-booking">
                                            <div class="col-md-9">
                                                <div class="booking-box">
                                                    <div class="col-md-12 p-0">
                                                        <div class="quantity-box">
                                                            <div class="col-md-9">
                                                                <div class="adult">
                                                                    <h2>Adult prices</h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="adult-select-this">
                                                                    <div class="form-group">
                                                                        <select class="form-control"
                                                                            id="exampleFormControlSelect1">
                                                                            <option>1 Adult</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="custom-room">
                                                            <div class="col-md-3">
                                                                <div class="room-name">
                                                                    <span>Per room</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="room-name">
                                                                    <span>$245.55</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="all-cart-quality">
                                                                    <div class="quality-heading">
                                                                        <h5>Room</h5>
                                                                    </div>
                                                                    <div class="cart-quality">
                                                                        <div class="product-quantity">
                                                                            <input data-min="1" data-max="0" type="text"
                                                                                name="quantity" value="1"
                                                                                readonly="true">
                                                                            <div class="quantity-selectors-container">
                                                                                <div class="quantity-selectors">
                                                                                    <button type="button"
                                                                                        class="increment-quantity"
                                                                                        aria-label="Add one"
                                                                                        data-direction="1"><span>&#43;</span></button>
                                                                                    <button type="button"
                                                                                        class="decrement-quantity"
                                                                                        aria-label="Subtract one"
                                                                                        data-direction="-1"
                                                                                        disabled="disabled"><span>&#8722;</span></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="custom-room">
                                                            <div class="col-md-9">
                                                                <h4>Guest Room Booking</h4>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="all-cart-quality">
                                                                    <div class="quality-heading">
                                                                        <h5>Room</h5>
                                                                    </div>
                                                                    <div class="cart-quality">
                                                                        <div class="product-quantity">
                                                                            <input data-min="1" data-max="0" type="text"
                                                                                name="quantity" value="1"
                                                                                readonly="true">
                                                                            <div class="quantity-selectors-container">
                                                                                <div class="quantity-selectors">
                                                                                    <button type="button"
                                                                                        class="increment-quantity"
                                                                                        aria-label="Add one"
                                                                                        data-direction="1"><span>&#43;</span></button>
                                                                                    <button type="button"
                                                                                        class="decrement-quantity"
                                                                                        aria-label="Subtract one"
                                                                                        data-direction="-1"
                                                                                        disabled="disabled"><span>&#8722;</span></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="book-summary">
                                                            <h1>Booking Summery</h1>
                                                            <p>Mon, 15 august 2022 (2 night)</p>
                                                            <h4>Executive Bedroom</h4>
                                                        </div>
                                                        <div class="extra-sumary">
                                                            <div class="extra-bedroom-dv summary_same">
                                                                <h5>Executive Bedroom</h5>
                                                                <p>$457.55</p>
                                                            </div>
                                                            <div class="extras summary_same">
                                                                <h5>Extras</h5>
                                                            </div>
                                                            <hr>
                                                            <div class="extra-bedroom-dv summary_same">
                                                                <h5>Total</h5>
                                                                <p>$457.55</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="dundon-heading">
                                            <h5>Dundonnell Hotel</h5>
                                            <h3>Room Name</h3>
                                            <div class="five-star dundon-star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <span>5.0</span>
                                            </div>
                                            <span><i class="fa-regular fa-user"></i>Guests rated this property 4.4/5
                                                for
                                                cleanliness.</span>
                                            <a href="javascript:void(0)">See all 667 Reviews</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="javascript:void(0)" class="btn btn-primary   custom">Continue</a>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="amenities-box">
                                            <h4>Popular Amenities</h4>
                                            <a href="javascript:void(0)"><i class="fa fa-wifi" aria-hidden="true"></i>
                                                Free WiFi</a>
                                            <a href="javascript:void(0)"><i class='fas fa-parking'></i>Parking
                                                included</a>
                                            <a href="javascript:void(0)"> <i class='fas fa-star-of-life'></i>Air
                                                Conditioning</a>
                                            <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="30px" height="30px" version="1.1" viewBox="0 0 752 752">
                                                    <g fill="#818181">
                                                        <path
                                                            d="m291.69 398.14 57.195-55.73-141.49-136.88c-31.102 30.305-31.102 80.172 0 110.48z" />
                                                        <path
                                                            d="m428.16 362.94c31.113 13.691 74.258 3.9141 105.36-27.371 38.129-37.152 46.164-90.926 16.059-119.28-29.105-29.332-84.293-21.5-122.42 15.652-32.113 31.285-42.148 73.328-28.094 102.66-44.16 43.996-195.68 191.62-195.68 191.62l28.098 27.371 138.48-134.92 138.47 134.92 28.094-27.371-138.47-134.93z" />
                                                    </g>
                                                </svg>Restaurant</a>
                                            <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                    version="1.2" baseProfile="tiny" width="50" height="50"
                                                    viewBox="0 0 50 50" overflow="inherit">
                                                    <path
                                                        d="M17.962 44.874c.374.403.352 1.041-.05 1.416l-2.172 2.031c-.402.375-1.037.353-1.411-.051l-12.649-13.632c-.374-.403-.351-1.04.051-1.416l2.175-2.028c.402-.376 1.037-.353 1.411.051l12.645 13.629zm16.14-25.65c.374.403.351 1.041-.051 1.416l-13.67 12.77c-.402.375-1.037.353-1.411-.051l-3.263-3.521c-.374-.403-.351-1.041.051-1.416l13.667-12.77c.401-.375 1.036-.353 1.41.051l3.267 3.521zm-11.489 21.303c.374.403.351 1.04-.051 1.416l-2.175 2.03c-.402.376-1.037.353-1.411-.051l-12.642-13.632c-.374-.403-.352-1.041.05-1.416l2.171-2.029c.402-.375 1.037-.353 1.411.051l12.647 13.631zm21.063-20.814c.374.403.351 1.041-.052 1.416l-2.174 2.03c-.402.375-1.037.353-1.412-.05l-12.644-13.629c-.375-.403-.352-1.04.05-1.416l2.18-2.035c.401-.375 1.036-.353 1.41.051l12.642 13.633zm4.644-4.34c.374.403.351 1.041-.051 1.417l-2.17 2.029c-.401.376-1.036.353-1.41-.05l-12.642-13.635c-.374-.403-.352-1.041.05-1.417l2.172-2.033c.401-.376 1.035-.354 1.409.05l12.642 13.639z">
                                                    </path>
                                                </svg>Gym</a>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="Popular-amenities">
                                            <h4>Popular Amenities</h4>
                                            <a href="javascript:void(0)"><i class="fad fa-coffee"></i> Breakfast
                                                available</a>
                                            <a href="javascript:void(0)"><i class="fas fa-glass-martini-alt"></i>bar</a>
                                            <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                    height="24" viewBox="0 0 24 24" width="24">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path
                                                        d="M2 17h20v2H2zm11.84-9.21c.1-.24.16-.51.16-.79 0-1.1-.9-2-2-2s-2 .9-2 2c0 .28.06.55.16.79C6.25 8.6 3.27 11.93 3 16h18c-.27-4.07-3.25-7.4-7.16-8.21z" />
                                                </svg>Room service</a>
                                            <a href="javascript:void(0)"><i class="far fa-hourglass-end"></i>24/7
                                                front
                                                desk</a>
                                            <a href="javascript:void(0)"><i class="fas fa-briefcase"></i>Business
                                                services</a>
                                        </div>
                                    </div>
                                    <div class="boking-slider-wrapper">
                                        <div class="row">
                                            <div class="col-md-3 col-3 p-0">
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
                                            <div class="col-md-9 col-9 p-0">
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
                                                    <div class="col-md-8 col-8">
                                                        <div class="para-fivestar">
                                                            <p>Fully pre-paid once booking has been received,
                                                                non-refundable and
                                                                non-transferable. A credit or debit card is required
                                                                to
                                                                guarantee your
                                                                booking, the full cost of the stay will be taken at
                                                                the
                                                                time of
                                                                booking.
                                                                Please note all guests must present a debit/credit
                                                                card
                                                                on check
                                                                in to
                                                                validate..... <span> read more</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-4">
                                                        <div class="august">
                                                            <h5>Mon, 15 August, 2 nights <br>
                                                                <span> <i class="fa-regular fa-user"></i> 1
                                                                    adult</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6 col-6">
                                                        <div class="img-bed-rest">
                                                            <img src="./img/group1.png" alt="">
                                                            <div class="img-bed-wrapper1">
                                                                <h5>Executive Bedroom</h5>
                                                                <h6>Only 3 left</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-2 p-0">
                                                        <div class="img-bed-wrapper">
                                                            <h5>avg.price per night</h5>
                                                            <h6>£117.50</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1 col-1">
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
                                                    <div class="col-md-6 col-6">
                                                        <div class="img-bed-rest">
                                                            <img src="./img/group2.png" alt="">
                                                            <div class="img-bed-wrapper1">
                                                                <h5>Executive Bedroom</h5>
                                                                <h6>Last chance! only 1 left</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-2 p-0">
                                                        <div class="img-bed-wrapper">
                                                            <h5>avg.price per night</h5>
                                                            <h6>£117.50</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1 col-1">
                                                        <div class="img-bed-wrapper">
                                                            <h5>£267.50</h5>
                                                            <h6> <strike> £330.50 </strike></h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-3">
                                                        <div class="img-bed-wrapper2">
                                                            <a href=""><button class="btn12">
                                                                    Book now
                                                                </button></a>
                                                        </div>
                                                        =======
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="dundon-btn">
                                                            <a href="javascript:void(0)"
                                                                class="btn btn-primary   custom">Continue</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="amenities-box">
                                                            <h4>Popular Amenities</h4>
                                                            <a href="javascript:void(0)"><span><img src="img/wifi.png"
                                                                        alt=""></span> <span>Free WiFi</span></a>
                                                            <a href="javascript:void(0)"><span><img
                                                                        src="img/parking.png" alt=""></span>
                                                                <span>Parking included</span></a>
                                                            <a href="javascript:void(0)"><span><img src="img/air.png"
                                                                        alt=""></span> <span>Air Conditioning</span></a>
                                                            <a href="javascript:void(0)"><span><img src="img/spoon.png"
                                                                        alt=""></span> <span>Restaurant</span></a>
                                                            <a href="javascript:void(0)"><span><img src="img/gym.png"
                                                                        alt=""></span> <span>Gym</span></a>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="Popular-amenities">
                                                            <h4>Popular Amenities</h4>
                                                            <a href="javascript:void(0)"><span><img
                                                                        src="img/breakfast.png" alt=""></span>
                                                                <span>Breakfast available</span></a>
                                                            <a href="javascript:void(0)"><span><img src="img/bar.png"
                                                                        alt=""></span> <span>bar</span></a>
                                                            <a href="javascript:void(0)"><span><img src="img/food.png"
                                                                        alt=""></span> <span>Room service</span></a>
                                                            <a href="javascript:void(0)"><span><img
                                                                        src="img/hourglass-end.png" alt=""></span>
                                                                <span>24/7 front desk</span></a>
                                                            <a href="javascript:void(0)"><span><img
                                                                        src="img/material-business-center.png"
                                                                        alt=""></span> <span>Business
                                                                    services</span></a>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="internet-heading">
                                                            <h4>Internet</h4>
                                                            <li>Available in all rooms: Free Wi-Fi and wired Internet
                                                            </li>
                                                            <li> Available in some public areas: Free Wi-Fi</li>
                                                            <div class="Parking">
                                                                <h4>Parking and transportation</h4>
                                                                <li>Free self-parking on site</li>
                                                                <li> Free valet parking on site</li>
                                                                <li> Limited onsite parking</li>
                                                                <li> Wheelchair-accessible parking and van parking are
                                                                    available</li>
                                                                <li> 24-hour roundtrip airport shuttle (surcharge)</li>
                                                                <li> Airport shuttle on request</li>
                                                            </div>
                                                            <div class="Parking">
                                                                <h4>Food and drink</h4>
                                                                <li> Buffet breakfast available for a fee daily 6:00
                                                                    AM–10:30 AM: EUR 15 per person</li>
                                                                <li> 1 restaurant and 1 coffee shop/café</li>
                                                                <li> 1 bar</li>
                                                                <li> 24-hour room service</li>
                                                                <li> Coffee/tea in common area(s)</li>
                                                                <li> Airport shuttle on request</li>
                                                            </div>
                                                            <div class="Parking">
                                                                <h4>Family-friendly</h4>
                                                                <li> Babysitting (surcharge)</li>
                                                                <li> Free cribs/infant beds</li>
                                                                <li> Highchair</li>
                                                                <li> In-room child care (surcharge)</li>
                                                                <li> Laundry facilities</li>
                                                                <li> Snack bar/deli</li>
                                                                <li> Soundproofed rooms</li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="internet-heading">
                                                            <h4>Conveniences</h4>
                                                            <li> Elevator</li>
                                                            <li> Free newspapers in lobby</li>
                                                            <li> Front-desk safe</li>
                                                            <div class="Parking">
                                                                <h4>Guest services</h4>
                                                                <li>24-hour front desk</li>
                                                                <li> Concierge services</li>
                                                                <li> Daily housekeeping</li>
                                                                <li> Dry cleaning service</li>
                                                                <li> Laundry facilities</li>
                                                                <li> Luggage storage</li>
                                                                <li> Multilingual staff</li>
                                                                <li> Porter/bellhop</li>
                                                                <li> Tour/ticket assistance</li>
                                                                <li>Turndown service</li>
                                                            </div>
                                                            <div class="Parking">
                                                                <h4>Business services</h4>
                                                                <li> 24-hour business center</li>
                                                                <li> Computer station</li>
                                                                <li> Conference space (67 square feet)</li>
                                                                <li> Coworking space</li>
                                                                <li> Meeting rooms - 2</li>

                                                            </div>
                                                            <div class="Parking">
                                                                <h4>Outdoors</h4>
                                                                <li> Terrace</li>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="boking-slider-wrapper this-custom-wrapper">
                                                            <div class="row">
                                                                <div class="col-md-5 col-5 p-0">
                                                                    <div class="img-wrapper-slider">
                                                                        <img src="./img/path11.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path3.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path4.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path5.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path6.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path7.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path8.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path10.png" class="img-fluid"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 p-0">
                                                                    <div class="save-content">
                                                                        <div class="bed-text-wrapper custom-card">
                                                                            <div class="headind-bed">
                                                                                <h4>BED & BREAKFAST, PAY NOW & SAVE 10%
                                                                                </h4>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="btn-bed custom-bed">
                                                                        <button class="btn1">
                                                                            NON refundable
                                                                        </button>

                                                                        <button class="btn1">
                                                                            Breakfast included
                                                                        </button>
                                                                        <div class="five-star">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <span>5.0</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-2">
                                                                        <div class="col-md-7 col-6">
                                                                            <div class="img-bed-rest">
                                                                                <img src="./img/group1.png" alt="">
                                                                                <div class="img-bed-wrapper1">
                                                                                    <h5>Executive Bedroom</h5>
                                                                                    <h6>Only 3 left</h6>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-5 p-0">
                                                                            <div class="img-bed-wrapper2">
                                                                                <a href=""><button class="btn12">
                                                                                        Book now
                                                                                    </button></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-4 p-0">
                                                                            <div class="img-bed-wrapper">
                                                                                <h5>avg.price per night</h5>
                                                                                <h6>£117.50</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-3">
                                                                            <div class="img-bed-wrapper">
                                                                                <h5>£267.50</h5>
                                                                                <h6> <strike> £330.50 </strike></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-7 col-7">
                                                                            <div class="img-bed-rest">
                                                                                <img src="./img/group2.png" alt="">
                                                                                <div class="img-bed-wrapper1">
                                                                                    <h5>Executive Bedroom</h5>
                                                                                    <h6>Last chance! only 1 left</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5 col-5 p-0">
                                                                            <div class="img-bed-wrapper2">
                                                                                <a href=""><button class="btn12">
                                                                                        Book now
                                                                                    </button></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-4 p-0">
                                                                            <div class="img-bed-wrapper ">
                                                                                <h5>avg.price per night</h5>
                                                                                <h6>£117.50</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-3">
                                                                            <div class="img-bed-wrapper ">
                                                                                <h5>£267.50</h5>
                                                                                <h6> <strike> £330.50 </strike></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="boking-slider-wrapper this-custom-wrapper">
                                                            <div class="row">
                                                                <div class="col-md-5 col-5 p-0">
                                                                    <div class="img-wrapper-slider">
                                                                        <img src="./img/path11.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path3.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path4.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path5.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path6.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path7.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path8.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path10.png" class="img-fluid"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-7 p-0">
                                                                    <div class="save-content">
                                                                        <div class="bed-text-wrapper custom-card">
                                                                            <div class="headind-bed">
                                                                                <h4>BED & BREAKFAST, PAY NOW & SAVE 10%
                                                                                </h4>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="btn-bed custom-bed">
                                                                        <button class="btn1">
                                                                            NON refundable
                                                                        </button>

                                                                        <button class="btn1">
                                                                            Breakfast included
                                                                        </button>
                                                                        <div class="five-star">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <span>5.0</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-2">
                                                                        <div class="col-md-7 col-6">
                                                                            <div class="img-bed-rest">
                                                                                <img src="./img/group1.png" alt="">
                                                                                <div class="img-bed-wrapper1">
                                                                                    <h5>Executive Bedroom</h5>
                                                                                    <h6>Only 3 left</h6>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-5 p-0">
                                                                            <div class="img-bed-wrapper2">
                                                                                <a href=""><button class="btn12">
                                                                                        Book now
                                                                                    </button></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-4 p-0">
                                                                            <div class="img-bed-wrapper">
                                                                                <h5>avg.price per night</h5>
                                                                                <h6>£117.50</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-3">
                                                                            <div class="img-bed-wrapper">
                                                                                <h5>£267.50</h5>
                                                                                <h6> <strike> £330.50 </strike></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-7 col-7">
                                                                            <div class="img-bed-rest">
                                                                                <img src="./img/group2.png" alt="">
                                                                                <div class="img-bed-wrapper1">
                                                                                    <h5>Executive Bedroom</h5>
                                                                                    <h6>Last chance! only 1 left</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5 col-5 p-0">
                                                                            <div class="img-bed-wrapper2">
                                                                                <a href=""><button class="btn12">
                                                                                        Book now
                                                                                    </button></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-4 p-0">
                                                                            <div class="img-bed-wrapper ">
                                                                                <h5>avg.price per night</h5>
                                                                                <h6>£117.50</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-3">
                                                                            <div class="img-bed-wrapper ">
                                                                                <h5>£267.50</h5>
                                                                                <h6> <strike> £330.50 </strike></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="boking-slider-wrapper this-custom-wrapper">
                                                            <div class="row">
                                                                <div class="col-md-5 col-5 p-0">
                                                                    <div class="img-wrapper-slider">
                                                                        <img src="./img/path11.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path3.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path4.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path5.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path6.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path7.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path8.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path10.png" class="img-fluid"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-7 p-0">
                                                                    <div class="save-content">
                                                                        <div class="bed-text-wrapper custom-card">
                                                                            <div class="headind-bed">
                                                                                <h4>BED & BREAKFAST, PAY NOW & SAVE 10%
                                                                                </h4>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="btn-bed custom-bed">
                                                                        <button class="btn1">
                                                                            NON refundable
                                                                        </button>

                                                                        <button class="btn1">
                                                                            Breakfast included
                                                                        </button>
                                                                        <div class="five-star">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <span>5.0</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-2">
                                                                        <div class="col-md-7 col-6">
                                                                            <div class="img-bed-rest">
                                                                                <img src="./img/group1.png" alt="">
                                                                                <div class="img-bed-wrapper1">
                                                                                    <h5>Executive Bedroom</h5>
                                                                                    <h6>Only 3 left</h6>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-5 p-0">
                                                                            <div class="img-bed-wrapper2">
                                                                                <a href=""><button class="btn12">
                                                                                        Book now
                                                                                    </button></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-4 p-0">
                                                                            <div class="img-bed-wrapper">
                                                                                <h5>avg.price per night</h5>
                                                                                <h6>£117.50</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-3">
                                                                            <div class="img-bed-wrapper">
                                                                                <h5>£267.50</h5>
                                                                                <h6> <strike> £330.50 </strike></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-7 col-7">
                                                                            <div class="img-bed-rest">
                                                                                <img src="./img/group2.png" alt="">
                                                                                <div class="img-bed-wrapper1">
                                                                                    <h5>Executive Bedroom</h5>
                                                                                    <h6>Last chance! only 1 left</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5 col-5 p-0">
                                                                            <div class="img-bed-wrapper2">
                                                                                <a href=""><button class="btn12">
                                                                                        Book now
                                                                                    </button></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-4 p-0">
                                                                            <div class="img-bed-wrapper ">
                                                                                <h5>avg.price per night</h5>
                                                                                <h6>£117.50</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-3">
                                                                            <div class="img-bed-wrapper ">
                                                                                <h5>£267.50</h5>
                                                                                <h6> <strike> £330.50 </strike></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="boking-slider-wrapper this-custom-wrapper">
                                                            <div class="row">
                                                                <div class="col-md-5 col-5 p-0">
                                                                    <div class="img-wrapper-slider">
                                                                        <img src="./img/path11.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path3.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path4.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path5.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path6.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path7.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path8.png" class="img-fluid"
                                                                            alt="">
                                                                        <img src="./img/path10.png" class="img-fluid"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-7 p-0">
                                                                    <div class="save-content">
                                                                        <div class="bed-text-wrapper custom-card">
                                                                            <div class="headind-bed">
                                                                                <h4>BED & BREAKFAST, PAY NOW & SAVE 10%
                                                                                </h4>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="btn-bed custom-bed">
                                                                        <button class="btn1">
                                                                            NON refundable
                                                                        </button>

                                                                        <button class="btn1">
                                                                            Breakfast included
                                                                        </button>
                                                                        <div class="five-star">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <span>5.0</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-2">
                                                                        <div class="col-md-7 col-6">
                                                                            <div class="img-bed-rest">
                                                                                <img src="./img/group1.png" alt="">
                                                                                <div class="img-bed-wrapper1">
                                                                                    <h5>Executive Bedroom</h5>
                                                                                    <h6>Only 3 left</h6>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-5 p-0">
                                                                            <div class="img-bed-wrapper2">
                                                                                <a href=""><button class="btn12">
                                                                                        Book now
                                                                                    </button></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-4 p-0">
                                                                            <div class="img-bed-wrapper">
                                                                                <h5>avg.price per night</h5>
                                                                                <h6>£117.50</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-3">
                                                                            <div class="img-bed-wrapper">
                                                                                <h5>£267.50</h5>
                                                                                <h6> <strike> £330.50 </strike></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-7 col-7">
                                                                            <div class="img-bed-rest">
                                                                                <img src="./img/group2.png" alt="">
                                                                                <div class="img-bed-wrapper1">
                                                                                    <h5>Executive Bedroom</h5>
                                                                                    <h6>Last chance! only 1 left</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5 col-5 p-0">
                                                                            <div class="img-bed-wrapper2">
                                                                                <a href=""><button class="btn12">
                                                                                        Book now
                                                                                    </button></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-4 p-0">
                                                                            <div class="img-bed-wrapper ">
                                                                                <h5>avg.price per night</h5>
                                                                                <h6>£117.50</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-3">
                                                                            <div class="img-bed-wrapper ">
                                                                                <h5>£267.50</h5>
                                                                                <h6> <strike> £330.50 </strike></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="boking-slider-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-3 col-3 p-0">
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
                                                        <div class="col-md-9 col-9 p-0">
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
                                                                <div class="col-md-8 col-8">
                                                                    <div class="para-fivestar">
                                                                        <p>Fully pre-paid once booking has been
                                                                            received, non-refundable
                                                                            and
                                                                            non-transferable. A credit or debit card is
                                                                            required to
                                                                            guarantee your
                                                                            booking, the full cost of the stay will be
                                                                            taken at the time
                                                                            of
                                                                            booking.
                                                                            Please note all guests must present a
                                                                            debit/credit card on
                                                                            check
                                                                            in to
                                                                            validate..... <span> read more</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-4">
                                                                    <div class="august">
                                                                        <h5>Mon, 15 August, 2 nights <br>
                                                                            <span> <i class="fa-regular fa-user"></i> 1
                                                                                adult</span>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-6 col-6">
                                                                    <div class="img-bed-rest">
                                                                        <img src="./img/group1.png" alt="">
                                                                        <div class="img-bed-wrapper1">
                                                                            <h5>Executive Bedroom</h5>
                                                                            <h6>Only 3 left</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-2 p-0">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>avg.price per night</h5>
                                                                        <h6>£117.50</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1 col-1">
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
                                                                <div class="col-md-6 col-6">
                                                                    <div class="img-bed-rest">
                                                                        <img src="./img/group2.png" alt="">
                                                                        <div class="img-bed-wrapper1">
                                                                            <h5>Executive Bedroom</h5>
                                                                            <h6>Last chance! only 1 left</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-2 p-0">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>avg.price per night</h5>
                                                                        <h6>£117.50</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1 col-1">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>£267.50</h5>
                                                                        <h6> <strike> £330.50 </strike></h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-3">
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
                                                        <div class="col-md-3 col-3 p-0">
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
                                                        <div class="col-md-9 col-9 p-0">
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
                                                                <div class="col-md-8 col-8">
                                                                    <div class="para-fivestar">
                                                                        <p>Fully pre-paid once booking has been
                                                                            received, non-refundable
                                                                            and
                                                                            non-transferable. A credit or debit card is
                                                                            required to
                                                                            guarantee your
                                                                            booking, the full cost of the stay will be
                                                                            taken at the time
                                                                            of
                                                                            booking.
                                                                            Please note all guests must present a
                                                                            debit/credit card on
                                                                            check
                                                                            in to
                                                                            validate..... <span> read more</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-4">
                                                                    <div class="august">
                                                                        <h5>Mon, 15 August, 2 nights <br>
                                                                            <span> <i class="fa-regular fa-user"></i> 1
                                                                                adult</span>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-6 col-6">
                                                                    <div class="img-bed-rest">
                                                                        <img src="./img/group1.png" alt="">
                                                                        <div class="img-bed-wrapper1">
                                                                            <h5>Executive Bedroom</h5>
                                                                            <h6>Only 3 left</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-2 p-0">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>avg.price per night</h5>
                                                                        <h6>£117.50</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1 col-1">
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
                                                                <div class="col-md-6 col-6">
                                                                    <div class="img-bed-rest">
                                                                        <img src="./img/group2.png" alt="">
                                                                        <div class="img-bed-wrapper1">
                                                                            <h5>Executive Bedroom</h5>
                                                                            <h6>Last chance! only 1 left</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-2 p-0">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>avg.price per night</h5>
                                                                        <h6>£117.50</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1 col-1">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>£267.50</h5>
                                                                        <h6> <strike> £330.50 </strike></h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3  col-3">
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
                                                        <div class="col-md-3 col-3 p-0">
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
                                                        <div class="col-md-9 col-9 p-0">
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
                                                                <div class="col-md-8 col-8">
                                                                    <div class="para-fivestar">
                                                                        <p>Fully pre-paid once booking has been
                                                                            received, non-refundable
                                                                            and
                                                                            non-transferable. A credit or debit card is
                                                                            required to
                                                                            guarantee your
                                                                            booking, the full cost of the stay will be
                                                                            taken at the time
                                                                            of
                                                                            booking.
                                                                            Please note all guests must present a
                                                                            debit/credit card on
                                                                            check
                                                                            in to
                                                                            validate..... <span> read more</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-4">
                                                                    <div class="august">
                                                                        <h5>Mon, 15 August, 2 nights <br>
                                                                            <span> <i class="fa-regular fa-user"></i> 1
                                                                                adult</span>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-6 col-6">
                                                                    <div class="img-bed-rest">
                                                                        <img src="./img/group1.png" alt="">
                                                                        <div class="img-bed-wrapper1">
                                                                            <h5>Executive Bedroom</h5>
                                                                            <h6>Only 3 left</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-2 p-0">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>avg.price per night</h5>
                                                                        <h6>£117.50</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1 col-1">
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
                                                                <div class="col-md-6 col-6">
                                                                    <div class="img-bed-rest">
                                                                        <img src="./img/group2.png" alt="">
                                                                        <div class="img-bed-wrapper1">
                                                                            <h5>Executive Bedroom</h5>
                                                                            <h6>Last chance! only 1 left</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-2 p-0">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>avg.price per night</h5>
                                                                        <h6>£117.50</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1 col-1">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>£267.50</h5>
                                                                        <h6> <strike> £330.50 </strike></h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-3">
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
                                                        <div class="col-md-3 col-3 p-0">
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
                                                        <div class="col-md-9 col-9 p-0">
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
                                                                <div class="col-md-8 col-8">
                                                                    <div class="para-fivestar">
                                                                        <p>Fully pre-paid once booking has been
                                                                            received, non-refundable
                                                                            and
                                                                            non-transferable. A credit or debit card is
                                                                            required to
                                                                            guarantee your
                                                                            booking, the full cost of the stay will be
                                                                            taken at the time
                                                                            of
                                                                            booking.
                                                                            Please note all guests must present a
                                                                            debit/credit card on
                                                                            check
                                                                            in to
                                                                            validate..... <span> read more</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-4">
                                                                    <div class="august">
                                                                        <h5>Mon, 15 August, 2 nights <br>
                                                                            <span> <i class="fa-regular fa-user"></i> 1
                                                                                adult</span>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-6 col-6">
                                                                    <div class="img-bed-rest">
                                                                        <img src="./img/group1.png" alt="">
                                                                        <div class="img-bed-wrapper1">
                                                                            <h5>Executive Bedroom</h5>
                                                                            <h6>Only 3 left</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-2 p-0">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>avg.price per night</h5>
                                                                        <h6>£117.50</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1 col-1">
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
                                                                <div class="col-md-6 col-6">
                                                                    <div class="img-bed-rest">
                                                                        <img src="./img/group2.png" alt="">
                                                                        <div class="img-bed-wrapper1">
                                                                            <h5>Executive Bedroom</h5>
                                                                            <h6>Last chance! only 1 left</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-2 p-0">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>avg.price per night</h5>
                                                                        <h6>£117.50</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1 col-1">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>£267.50</h5>
                                                                        <h6> <strike> £330.50 </strike></h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-3">
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
                                                        <div class="col-md-3 col-3 p-0">
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
                                                        <div class="col-md-9 col-9 p-0">
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
                                                                <div class="col-md-8 col-8">
                                                                    <div class="para-fivestar">
                                                                        <p>Fully pre-paid once booking has been
                                                                            received, non-refundable
                                                                            and
                                                                            non-transferable. A credit or debit card is
                                                                            required to
                                                                            guarantee your
                                                                            booking, the full cost of the stay will be
                                                                            taken at the time
                                                                            of
                                                                            booking.
                                                                            Please note all guests must present a
                                                                            debit/credit card on
                                                                            check
                                                                            in to
                                                                            validate..... <span> read more</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-4">
                                                                    <div class="august">
                                                                        <h5>Mon, 15 August, 2 nights <br>
                                                                            <span> <i class="fa-regular fa-user"></i> 1
                                                                                adult</span>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-6 col-6">
                                                                    <div class="img-bed-rest">
                                                                        <img src="./img/group1.png" alt="">
                                                                        <div class="img-bed-wrapper1">
                                                                            <h5>Executive Bedroom</h5>
                                                                            <h6>Only 3 left</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-2 p-0">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>avg.price per night</h5>
                                                                        <h6>£117.50</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1 col-1">
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
                                                                <div class="col-md-6 col-6">
                                                                    <div class="img-bed-rest">
                                                                        <img src="./img/group2.png" alt="">
                                                                        <div class="img-bed-wrapper1">
                                                                            <h5>Executive Bedroom</h5>
                                                                            <h6>Last chance! only 1 left</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-2 p-0">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>avg.price per night</h5>
                                                                        <h6>£117.50</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1 col-1">
                                                                    <div class="img-bed-wrapper">
                                                                        <h5>£267.50</h5>
                                                                        <h6> <strike> £330.50 </strike></h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-3">
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
                                            <div class="breaket-wrapper">
                                                <div class="container">
                                                    <div class="boking-slider-wrappers1">
                                                        <div class="row">
                                                            <div class="col-md-9 p-0">
                                                                <div class="customize-heading">
                                                                    <h3>BED & BREAKFAST, PAY NOW & SAVE 10%</h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="five-star stars">
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </div>
                                                            <div class="customize-heading">
                                                                <a href="javascript:void(0) "
                                                                    class="btn btn-primary custom">NON
                                                                    refundable</a>
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-primary custom">Breakfast
                                                                    included</a>
                                                                <p>Fully pre-paid once booking has been received,
                                                                    non-refundable and
                                                                    non-transferable. A credit or debit
                                                                    card is required to guarantee your booking, the full
                                                                    cost of the
                                                                    stay
                                                                    will
                                                                    be taken at the time of booking. Please note all
                                                                    guests must present a debit/credit card on check in
                                                                    to validate.....
                                                                    <a href="javascript:void(0)" class="custom-read">
                                                                        read more</a>
                                                                </p>
                                                            </div>
                                                            <div class="discount-box">
                                                                <div class="col-md-7">
                                                                    <div class="discount-left">
                                                                        <h4>Discount Code?</h4>
                                                                        <p>If you have a discount code, please enter it
                                                                            here</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="discount">
                                                                        <form class="form-inline">
                                                                            <div class="form-group mx-sm-3 mb-2">
                                                                                <input type="" class="form-control"
                                                                                    id="inputvocher2"
                                                                                    placeholder="Discount Code">
                                                                                <div class="input-group">
                                                                                    <button
                                                                                        class="btn btn-primary  discount-btn  custom"
                                                                                        type="button">Apply
                                                                                        Code</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 p-0">
                                                                    <div class="custom-bed-imgbox">
                                                                        <img src="img/custombed.png" alt=""
                                                                            class="img-fluid">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="heading-booking">
                                                                        <h3>Complete your booking</h3>
                                                                    </div>
                                                                    <div class="booking-box">

                                                                        <div class="col-md-12 p-0">
                                                                            <div class="quantity-box">
                                                                                <div class="col-md-8">
                                                                                    <div class="adult">
                                                                                        <h2>Adult prices</h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="adult-select-this">
                                                                                        <div class="form-group">
                                                                                            <select class="form-control"
                                                                                                id="exampleFormControlSelect1">
                                                                                                <option>1 Adult</option>
                                                                                                <option>2</option>
                                                                                                <option>3</option>
                                                                                                <option>4</option>
                                                                                                <option>5</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="custom-room">
                                                                                <div class="col-md-3">
                                                                                    <div class="room-name">
                                                                                        <span>Per room</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <div class="room-name">
                                                                                        <span>$245.55</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="all-cart-quality">
                                                                                        <div class="quality-heading">
                                                                                            <h5>Room</h5>
                                                                                        </div>
                                                                                        <div class="cart-quality">
                                                                                            <div
                                                                                                class="product-quantity">
                                                                                                <input data-min="1"
                                                                                                    data-max="0"
                                                                                                    type="text"
                                                                                                    name="quantity"
                                                                                                    value="1"
                                                                                                    readonly="true">
                                                                                                <div
                                                                                                    class="quantity-selectors-container">
                                                                                                    <div
                                                                                                        class="quantity-selectors">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="increment-quantity"
                                                                                                            aria-label="Add one"
                                                                                                            data-direction="1"><span>&#43;</span></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="decrement-quantity"
                                                                                                            aria-label="Subtract one"
                                                                                                            data-direction="-1"
                                                                                                            disabled="disabled"><span>&#8722;</span></button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="custom-room">
                                                                                <div class="col-md-8">
                                                                                    <h4>Guest Room Booking</h4>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="all-cart-quality">
                                                                                        <div class="quality-heading">
                                                                                            <h5>Room</h5>
                                                                                        </div>
                                                                                        <div class="cart-quality">
                                                                                            <div
                                                                                                class="product-quantity">
                                                                                                <input data-min="1"
                                                                                                    data-max="0"
                                                                                                    type="text"
                                                                                                    name="quantity"
                                                                                                    value="1"
                                                                                                    readonly="true">
                                                                                                <div
                                                                                                    class="quantity-selectors-container">
                                                                                                    <div
                                                                                                        class="quantity-selectors">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="increment-quantity"
                                                                                                            aria-label="Add one"
                                                                                                            data-direction="1"><span>&#43;</span></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="decrement-quantity"
                                                                                                            aria-label="Subtract one"
                                                                                                            data-direction="-1"
                                                                                                            disabled="disabled"><span>&#8722;</span></button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="book-summary">
                                                                                <h1>Booking Summery</h1>
                                                                                <p>Mon, 15 august 2022 (2 night)</p>
                                                                                <h4>Executive Bedroom</h4>
                                                                            </div>
                                                                            <div class="extra-sumary">
                                                                                <div
                                                                                    class="extra-bedroom-dv summary_same">
                                                                                    <h5>Executive Bedroom</h5>
                                                                                    <p>$457.55</p>
                                                                                </div>
                                                                                <div class="extras summary_same">
                                                                                    <h5>Extras</h5>
                                                                                </div>
                                                                                <hr>
                                                                                <div
                                                                                    class="extra-bedroom-dv summary_same">
                                                                                    <h5>Total</h5>
                                                                                    <p>$457.55</p>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Booker-Information">
                                                        <div class="row">
                                                            <div class="col-lg-7">
                                                                <div class="row">
                                                                    <div class="col-lg-8">
                                                                        <div class="information-heading">
                                                                            <h3>Booker Information</h3>
                                                                            <h5 class="field">Fields marked ( * ) are
                                                                                mandatory.</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="icon-sign-wrapper">
                                                                            <a href="">
                                                                                <i class="fa-regular fa-user"></i>
                                                                                <span>sign in</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <form action="">
                                                                    <div class="row">
                                                                        <div class="col-lg-2 ">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="exampleInputPassword1">Title*</label>
                                                                                <input type="name" class="form-control"
                                                                                    id="exampleInputPassword1"
                                                                                    placeholder="Title*">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 ">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputPassword1">First
                                                                                    name **</label>
                                                                                <input type="name" class="form-control"
                                                                                    id="exampleInputPassword1"
                                                                                    placeholder="First name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 ">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputPassword1">Last
                                                                                    name *</label>
                                                                                <input type="name" class="form-control"
                                                                                    id="exampleInputPassword1"
                                                                                    placeholder="Last name">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-7 ">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputPassword1">Email
                                                                                    address
                                                                                    *</label>
                                                                                <input type="email" class="form-control"
                                                                                    id="exampleInputPassword1"
                                                                                    placeholder="Email address ">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 ">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputPassword1">Phone
                                                                                    number
                                                                                    *</label>
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    id="exampleInputPassword1"
                                                                                    placeholder="xx-xx--xxx-xx">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-7 ">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="exampleInputPassword1">Address
                                                                                    *
                                                                                </label>
                                                                                <input type="text" class="form-control"
                                                                                    id="exampleInputPassword1"
                                                                                    placeholder="Line 1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 ">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputPassword1">Card
                                                                                    Number *</label>
                                                                                <input type="password"
                                                                                    class="form-control"
                                                                                    id="exampleInputPassword1"
                                                                                    placeholder="Town / City">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputPassword1">Card
                                                                                    Number *</label>
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    id="exampleInputPassword1"
                                                                                    placeholder="Postcode">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputPassword1">Card
                                                                                    Number *</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="exampleInputPassword1"
                                                                                    placeholder="Country / region / State">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <div class="arrival">
                                                                                    <label
                                                                                        for="exampleInputPassword1">Card
                                                                                        Number
                                                                                        *</label>
                                                                                    <select class="selt1"
                                                                                        placeholder=" --  please select country ">
                                                                                        <option> -- please select
                                                                                            country </option>
                                                                                        <option> -- please select
                                                                                            country </option>
                                                                                        <option> -- please select
                                                                                            country </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="guest-heading">
                                                                                <h4>Guest information</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="checkbook-btn">
                                                                                <div class="form-group">
                                                                                    <input type="checkbox" id="html">
                                                                                    <label for="html">Guest information
                                                                                        is different to
                                                                                        Booker information</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="guest-heading">
                                                                                <h4>Additional information</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputPassword1">Card
                                                                                    Number *</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="exampleInputPassword1"
                                                                                    placeholder="Company name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Card Number *</label>
                                                                                <select
                                                                                    placeholder="How did you hear about us?">
                                                                                    <option>No of rooms</option>
                                                                                    <option>No of Persons</option>
                                                                                    <option>No of Persons</option>
                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="checkbook-btn">
                                                                                <div class="form-group">
                                                                                    <input type="checkbox" id="html">
                                                                                    <label for="html">Please sign me up
                                                                                        to the
                                                                                        newsletter.
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-lg-5">
                                                                <form action="">
                                                                    <div class="row">
                                                                        <div class="col-lg-8">
                                                                            <div class="information-heading">
                                                                                <h3>Secure payment</h3>
                                                                                <h5 class="field">A valid credit or
                                                                                    debit card is
                                                                                    required
                                                                                    to guarantee your booking.</h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="icon-sign-wrapper">
                                                                                <a href="">
                                                                                    <img src="./img/secure.png"
                                                                                        class="img-fluid" alt="">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="form-group1">
                                                                                <label for="exampleInputPassword1">Card
                                                                                    Number *</label>
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    id="exampleInputPassword1"
                                                                                    placeholder="xxxxxxxxxxxxxx">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <label for="">Expiry Month *</label>
                                                                                <select class="selt"
                                                                                    placeholder=" --  please select --">
                                                                                    <option> -- please select --
                                                                                    </option>
                                                                                    <option> -- please select --
                                                                                    </option>
                                                                                    <option> -- please select --
                                                                                    </option>
                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <label for="">Expiry year *</label>
                                                                                <select class="selt"
                                                                                    placeholder=" --  please select --">
                                                                                    <option> -- please select --
                                                                                    </option>
                                                                                    <option> -- please select --
                                                                                    </option>
                                                                                    <option> -- please select --
                                                                                    </option>
                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4"></div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="checkbook-btn">
                                                                                <div class="form-group">
                                                                                    <input type="checkbox" id="html">
                                                                                    <label for="html">Cardholder
                                                                                        information is
                                                                                        different fromoker information
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="visa-banker">
                                                                                <a href=""><img
                                                                                        src="./img/icon-visa.png"
                                                                                        alt=""></a>
                                                                                <a href=""><img
                                                                                        src="./img/icon-visa1.png"
                                                                                        alt=""></a>
                                                                                <a href=""><img
                                                                                        src="./img/icon-visa2.png"
                                                                                        alt=""></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="heading-witn-para">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="term-condition-content">
                                                                    <div class="para-wrapper-term">
                                                                        <h4>Terms & Conditions</h4>
                                                                        <h6>Hotel Privacy Policy
                                                                        </h6>
                                                                        <p>A full copy of our privacy policy is located
                                                                            here
                                                                        </p>
                                                                    </div>
                                                                    <div class="para-wrapper-term">
                                                                        <h6>Rate terms
                                                                        </h6>
                                                                        <p>Pre-Paid Rates - Fully pre-paid once booking
                                                                            has been
                                                                            received, non-refundable and
                                                                            non-transferable. Please
                                                                            present your credit/debit card on check in
                                                                            to validate the
                                                                            booking. Please note all guests must present
                                                                            a debit/credit
                                                                            card on check in to validate all bookings
                                                                            and a part payment
                                                                            will be taken for authorisation and security
                                                                            purposes.
                                                                        </p>
                                                                    </div>
                                                                    <div class="para-wrapper-term">
                                                                        <h6>Hotel terms
                                                                        </h6>
                                                                        <p>Book Now Rates- Free cancellation charge if a
                                                                            booking is
                                                                            cancelled before two day(s) before the date
                                                                            of arrival.
                                                                            Where cancellation is made outside of the
                                                                            above terms the
                                                                            guest will be charged the full amount for
                                                                            the first night's
                                                                            accommodation. A credit or debit card is
                                                                            required to
                                                                            guarantee your booking, the full
                                                                            accommodation will be
                                                                            charged at check in.Please note all guests
                                                                            must present a
                                                                            debit/credit card on check in to validate
                                                                            all bookings and a
                                                                            part payment will be taken for authorisation
                                                                            and security
                                                                            purposes. Rates are only based on either 1
                                                                            or 2 people as
                                                                            specified.

                                                                        </p>
                                                                    </div>
                                                                    <div class="para-wrapper-term">
                                                                        <h6>Best Rate Guarantee
                                                                        </h6>
                                                                        <p>Flexible Rates: Bed & Breakfast, Book Now &
                                                                            Pay Later
                                                                        </p>
                                                                        <p>Book Now Rates- Free cancellation charge if a
                                                                            booking is
                                                                            cancelled before two day(s) before the date
                                                                            of arrival.
                                                                            Where cancellation is made outside of the
                                                                            above terms the
                                                                            guest will be charged the full amount for
                                                                            the first night's
                                                                            accommodation. A credit or debit card is
                                                                            required to
                                                                            guarantee your booking, the full
                                                                            accommodation will be
                                                                            charged at check in. Please note all guests
                                                                            must present a
                                                                            debit/credit card on check in to validate
                                                                            all bookings and
                                                                            part payment will be taken for authorisation
                                                                            and security
                                                                            purposes. Rates are only based on either 1
                                                                            or 2 people as
                                                                            specified.</p>
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
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</section>
<!-- End Here -->

<?php include 'inc/footer.php'; ?>