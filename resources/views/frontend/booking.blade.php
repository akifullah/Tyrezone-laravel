@extends('frontend.layout.app')

@section('main')
    <div class="wrapper">
        
        

        <!-- BOOKING STEPS START-->
        <div class="container step-container">
            <div class="booking-steps d-flex align-items-center justify-content-between">

                <div class="step active">
                    <div class="step-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <p>Search</p>
                </div>

                <div class="step active">
                    <div class="step-icon">
                        <i class="fa-regular fa-rectangle-list"></i>
                    </div>
                    <p>Proceed to Booking</p>
                </div>


                <div class="step active">
                    <div class="step-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <p>View Cart</p>
                </div>


                <div class="step active">
                    <div class="step-icon">
                        <i class="fa-regular fa-calendar-days"></i>
                    </div>
                    <p>Booking Details</p>
                </div>

                <div class="step ">
                    <div class="step-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <p>Proceed to Booking</p>
                </div>

                <div class="step ">
                    <div class="step-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <p>Confirmation</p>
                </div>


            </div>
        </div>
        <!-- BOOKING STEPS END -->



        <!-- BOOKING DETAIL -->
        <section class="booking-detail ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h4>Select Fitting Time</h4>

                        <div class="row">
                            <div class="col-2 col-sm-1 align-self-end">
                                <div class=""></div>
                                <div class="">
                                    <h6>AM</h6>
                                    <h6 class="mb-1 mb-sm-2">PM</h6>
                                </div>
                            </div>
                            <div class="col-10 col-sm-11 pe-0 pe-sm-3">
                                <form action="">
                                    <div class="times owl-carousel owl-theme" id="date-slides">

                                        <div class="text-center time-box">
                                            <h6>Sat <br /> 06</h6>
                                            <p>Jul</p>
                                            <div class="avail-time">
                                                <input type="radio" name="time" id="time-1">
                                                <label for="time-1">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                                <input type="radio" name="time" id="time-2">
                                                <label for="time-2">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="text-center time-box">
                                            <h6>Sun <br /> 7</h6>
                                            <p>Jul</p>
                                            <div class="avail-time">
                                                <input type="radio" disabled name="time" id="time-3">
                                                <label for="time-3">
                                                    <span class="avail-btn not disabled">Not Available</span>
                                                </label>
                                                <input type="radio" name="time" id="time-4">
                                                <label for="time-4">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="text-center time-box">
                                            <h6>Mon <br /> 08</h6>
                                            <p>Jul</p>
                                            <div class="avail-time">
                                                <input type="radio" name="time" id="time-5">
                                                <label for="time-5">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                                <input type="radio" name="time" id="time-6">
                                                <label for="time-6">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="text-center time-box">
                                            <h6>Tue <br /> 09</h6>
                                            <p>Jul</p>
                                            <div class="avail-time">
                                                <input type="radio" name="time" id="time-7">
                                                <label for="time-7">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                                <input type="radio" name="time" id="time-8">
                                                <label for="time-8">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="text-center time-box">
                                            <h6>Wed <br /> 10</h6>
                                            <p>Jul</p>
                                            <div class="avail-time">
                                                <input type="radio" name="time" id="time-9">
                                                <label for="time-9">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                                <input type="radio" name="time" id="time-10">
                                                <label for="time-10">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center time-box">
                                            <h6>Thu<br /> 11</h6>
                                            <p>Jul</p>
                                            <div class="avail-time">
                                                <input type="radio" name="time" id="time-11">
                                                <label for="time-11">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                                <input type="radio" name="time" id="time-12">
                                                <label for="time-12">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center time-box">
                                            <h6>Thu <br /> 12</h6>
                                            <p>Jul</p>
                                            <div class="avail-time">
                                                <input type="radio" name="time" id="time-13">
                                                <label for="time-13">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                                <input type="radio" name="time" id="time-14">
                                                <label for="time-14">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center time-box">
                                            <h6>Sat <br /> 13</h6>
                                            <p>Jul</p>
                                            <div class="avail-time">
                                                <input type="radio" name="time" id="time-15">
                                                <label for="time-15">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                                <input type="radio" name="time" id="time-16">
                                                <label for="time-16">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center time-box">
                                            <h6>Sub <br /> 14</h6>
                                            <p>Jul</p>
                                            <div class="avail-time">
                                                <input type="radio" name="time" id="time-17">
                                                <label for="time-17">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                                <input type="radio" name="time" id="time-18">
                                                <label for="time-18">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center time-box">
                                            <h6>Mon <br /> 15</h6>
                                            <p>Jul</p>
                                            <div class="avail-time">
                                                <input type="radio" name="time" id="time-19">
                                                <label for="time-19">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                                <input type="radio" name="time" id="time-20">
                                                <label for="time-20">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center time-box">
                                            <h6>Tue <br /> 16</h6>
                                            <p>Jul</p>
                                            <div class="avail-time">
                                                <input type="radio" name="time" id="time-21">
                                                <label for="time-21">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                                <input type="radio" name="time" id="time-22">
                                                <label for="time-22">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center time-box">
                                            <h6>Wed <br /> 17</h6>
                                            <p>Jul</p>
                                            <div class="avail-time">
                                                <input type="radio" name="time" id="time-23">
                                                <label for="time-23">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                                <input type="radio" name="time" id="time-24">
                                                <label for="time-24">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center time-box">
                                            <h6>Thu <br /> 18</h6>
                                            <p>Jul</p>
                                            <div class="avail-time">
                                                <input type="radio" name="time" id="time-25">
                                                <label for="time-25">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                                <input type="radio" name="time" id="time-26">
                                                <label for="time-26">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center time-box">
                                            <h6>Fri <br /> 19</h6>
                                            <p>Jul</p>
                                            <div class="avail-time">
                                                <input type="radio" name="time" id="time-27">
                                                <label for="time-27">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                                <input type="radio" name="time" id="time-28">
                                                <label for="time-28">
                                                    <span class="avail-btn">Available</span>
                                                </label>
                                            </div>
                                        </div>



                                    </div>
                                </form>



                            </div>
                        </div>


                        <p class="mt-4 mt-sm-5">Add a discount or FREE service to your order</p>

                        <form action="">
                            <div class="dicount-offer">
                                <div class="row">
                                    <div class="col-md-4 col-lg-3">
                                        <label for="offer-1">
                                            <div class="card offer-card text-center">
                                                <input type="checkbox" id="offer-1">
                                                <div class="card-body">
                                                    <div class="offer-img">
                                                        <img src="assets/imgs/wheel-balancing.png" alt="">
                                                    </div>
                                                    <strong>Balancing And Repiars </strong>
                                                    <h6>$100</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="call-us justify-content-between d-flex flex-column flex-sm-row  align-items-center">
                            <h2 class="text-center text-sm-start">Call Us For Immediate Fitting Requirement
                            </h2>
                            <a href="#" class="m-btn text-nowrap">CALL US!</a>
                        </div>

                        <!-- SEARCH SECTION START -->
                        <section class="man-search px-0  pb-0">
                            <div class="search-wrap mb-0">
                                <div class="row">



                                    <div class="col-12 ">
                                        <div class="search-by-tyres">
                                            <h3>Search by Tyre size</h3>

                                            <form action="">
                                                <div class="row">
                                                    <div class="col-lg-3 col-xl-2 col-6 mb-2 px-1">
                                                        <div class="form-group">
                                                            <select name="" class="form-select" id="">
                                                                <option value="215">215</option>
                                                                <option value="22">22</option>
                                                                <option value="225">225</option>
                                                                <option value="235">235</option>
                                                                <option value="24">24</option>
                                                                <option value="245">245</option>
                                                                <option value="25">25</option>
                                                                <option value="255">255</option>
                                                                <option value="265">265</option>
                                                                <option value="275">275</option>
                                                                <option value="285">285</option>
                                                                <option value="295">295</option>
                                                                <option value="305">305</option>
                                                                <option value="31">31</option>
                                                                <option value="315">315</option>
                                                                <option value="325">325</option>
                                                                <option value="33">33</option>
                                                                <option value="335">335</option>
                                                                <option value="345">345</option>
                                                                <option value="350">350</option>
                                                                <option value="355">355</option>
                                                                <option value="500">500</option>
                                                                <option value="7.50">7.50</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-xl-2 col-6 mb-2 px-1">
                                                        <div class="form-group">
                                                            <select name="profile" class="form-select">
                                                                <option value="">Profile</option>
                                                                <option value="40">40</option>
                                                                <option value="45">45</option>
                                                                <option value="50">50</option>
                                                                <option value="55" selected="">55</option>
                                                                <option value="60">60</option>
                                                                <option value="65">65</option>
                                                                <option value="70">70</option>
                                                                <option value="75">75</option>
                                                                <option value="80">80</option>
                                                            </select>

                                                        </div>

                                                    </div>


                                                    <div class="col-lg-3 col-xl-2 col-6 mb-2 px-1">
                                                        <div class="form-group">
                                                            <select name="diameter" class="form-control">
                                                                <option value="">Rim Size</option>
                                                                <option value="15">15</option>
                                                                <option value="16" selected="">16</option>
                                                                <option value="17">17</option>
                                                                <option value="19">19</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-xl-2 col-6 mb-2 px-1">
                                                        <div class="form-group">
                                                            <select name="speed" class="form-select">
                                                                <option value="">Any</option>
                                                                <option value="H">H</option>
                                                                <option value="T">T</option>
                                                                <option value="V">V</option>
                                                                <option value="W">W</option>
                                                                <option value="Y">Y</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-xl-2 col-6 mb-2 px-1">
                                                        <div class="form-group">
                                                            <select name="order_type" class="form-select">
                                                                <option selected="selected" value="fullyfitted">Garage
                                                                    Fitted</option>
                                                                <option value="mobilefitted">Mobile Fitted</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-xl-2 col-6 mb-2 px-1">
                                                        <button class="search-btn w-100">
                                                            Search
                                                        </button>
                                                    </div>


                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- SEARCH SECTION END -->

                        <p class="or">OR</p>

                        <!-- SEARCH SECTION START -->
                        <section class="man-search px-0">
                            <div class="search-wrap">
                                <div class="row">
                                    <div class="col-12 mb-4 mb-md-0">
                                        <div class="search-reg-number">
                                            <form action="#">
                                                <h3>Search Tyres by Vehicle Registration</h3>
                                                <div class="row">
                                                    <div class="col-lg-6 mb-2 px-1">
                                                        <div class="form-group reg">
                                                            <input type="text" class="form-control"
                                                                placeholder="ENTER REG">
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-3 col-6 mb-2 px-1">
                                                        <div class="form-group ">
                                                            <select name="" id="" class="form-select">
                                                                <option value="">Garage Fitted</option>
                                                                <option value="">Mobile Fitted</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-6 mb-2 px-1">
                                                        <button class="search-btn px-0 w-100">
                                                            Search
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>



                                </div>
                            </div>
                        </section>
                        <!-- SEARCH SECTION END -->

                    </div>

                    <!-- CART SECTION START -->
                    <div class="col-lg-4">
                        <h4>Your Order</h4>
                        <div class="cart">
                            <div class="cart-items">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>

                                            <tr>
                                                <td>
                                                    <div class="item-title">
                                                        <p>Balancing And Repairs</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="item-qty input-group input-group-sm">
                                                        <input type="number" class="form-control" value="1"><button
                                                            class="upt-qty-btn input-group-text"><i
                                                                class="fa-solid fa-arrows-rotate"></i></button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="price">£10.00</p>
                                                </td>
                                                <td>
                                                    <div class="text-end">
                                                        <button class="remove-item">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="item-title">
                                                        <p>Summer Tyre Dunlop GRANDTREK AT20 265/65R17 112 S
                                                            (Garage Fitted)</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="item-qty input-group input-group-sm">
                                                        <input type="number" class="form-control" value="1"><button
                                                            class="upt-qty-btn input-group-text"><i
                                                                class="fa-solid fa-arrows-rotate"></i></button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="price">£10.00</p>
                                                </td>
                                                <td>
                                                    <div class="text-end">
                                                        <button class="remove-item">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td class="px-0"><strong>Sub-Total</strong></td>
                                                <td>
                                                    <p class="m-0 text-end">£132.65</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td class="px-0"><strong>Total</strong></td>
                                                <td>
                                                    <p class="m-0 text-end">£132.65</p>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="my-3">
                            <a href="checkout.html">
                                <button class="main-btn">PROCEED TO BOOKING</button>
                            </a>
                        </div>

                    </div>
                    <!-- CART SECTION END -->


                </div>
            </div>
        </section>
        <!-- BOOKING DETAIL END -->






      


    </div>
@endsection
