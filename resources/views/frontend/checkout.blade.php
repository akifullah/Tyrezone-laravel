@extends('frontend.layout.app')

@section('style')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> --}}
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        /* body {
                                background-color: #f5f5f5;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                min-height: 100vh;
                                padding: 1rem;
                            } */

        /* Card container */
        .payment-card.card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            /* max-width: 450px; */
            overflow: hidden;
        }

        /* Card header */
        .payment-card .card-header {
            padding: 1.5rem 1.5rem 1rem;
            background: #fff
        }

        .payment-card .card-title-wrapper {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .payment-card .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #333;
        }

        .payment-card .card-description {
            font-size: 0.875rem;
            color: #666;
        }

        /* Card content */
        .payment-card .card-content {
            padding: 1rem 1.5rem 1rem 1.5rem;
        }

        .payment-card .form-group {
            margin-bottom: 1rem;
        }

        .payment-card .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .payment-card .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.875rem;
            transition: all 0.2s ease;
        }

        .payment-card .form-input:focus {
            outline: none;
            border-color: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.2);
        }

        .payment-card .form-input::placeholder {
            color: #aaa;
        }

        /* Grid layout for card details */
        .payment-card .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 1rem;
        }

        /* Card footer */
        .payment-card .card-footer {
            padding: 0 1.5rem 1.5rem;
            border-top: 0px;
            background: #fff;
        }

        .payment-card .btn-pay {
            width: 100%;
            background-color: #f59e0b;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 1rem;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .payment-card .btn-pay:hover {
            background-color: #d97706;
        }

        /* Credit card icon */
        .payment-card .icon {
            width: 20px;
            height: 20px;
        }

        /* Select styling */
        .payment-card select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23666' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px;
        }
    </style>
@endsection


@section('main')
    <div class="wrapper">


        <!-- CHECKOUT DETAILS START -->
        <div class="checkout">
            <div class="container">
                <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                    data-cc-on-file="false"
                    data-stripe-publishable-key="{{ $stripe_publishable_key != null ? $stripe_publishable_key : '' }}"
                    id="payment-form">

                    @csrf

                    <div class="row">
                        <div class="col-lg-7">
                            <h3>Enter your details</h3>


                            <div class="checkout-form form-wrap">

                                <div class="row">

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">First Name <span>*</span></label>
                                            <input type="text" name="fname"
                                                value="{{ old('fname') ?? Auth::user()?->fname }}"
                                                class="form-control @error('fname') is-invalid @enderror"
                                                placeholder="First Name">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Last Name <span>*</span></label>
                                            <input type="text" name="lname"
                                                value="{{ old('lname') ?? Auth::user()?->lname }}"
                                                class="form-control @error('lname') is-invalid @enderror"
                                                placeholder="Last Name">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Email <span>*</span></label>
                                            <input type="email" name="email"
                                                value="{{ old('email') ?? Auth::user()?->email }}"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Telephone <span>*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    +44
                                                </div>
                                                <input type="number" name="phone"
                                                    value="{{ old('phone') ?? Auth::user()?->phone }}"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    placeholder="Telephone">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Reg. No. <span>*</span></label>
                                            <div class="input-group">
                                                <input type="Text" name="reg_no"
                                                    class="form-control @error('reg_no') is-invalid @enderror"
                                                    placeholder="REG No.">
                                                <button type="button" class="input-group-text igt-btn">
                                                    Lookup
                                                </button>
                                            </div>
                                        </div>
                                    </div> --}}

                                </div>

                                <h4 class="mt-4">Your Address</h4>
                                <div class="row">

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Post Code <span>*</span></label>
                                            <div class="input-group">
                                                <input type="text" name="post_code"
                                                    value="{{ old('post_code') ?? Auth::user()?->post_code }}"
                                                    class="form-control @error('post_code') is-invalid @enderror"
                                                    placeholder="Post Code">
                                                {{-- <button type="button" class="input-group-text igt-btn">
                                                    Lookup
                                                </button> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Company <span>*</span></label>
                                            <input type="text" name="company"
                                                value="{{ old('company') ?? Auth::user()?->company }}"
                                                class="form-control @error('company') is-invalid @enderror"
                                                placeholder="Company">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label for="">Address <span>*</span></label>
                                            <input type="text" name="address"
                                                value="{{ old('address') ?? Auth::user()?->address }}"
                                                class="form-control @error('address') is-invalid @enderror"
                                                placeholder="Address">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">City <span>*</span></label>
                                            <input type="text" name="city"
                                                value="{{ old('city') ?? Auth::user()?->city }}"
                                                class="form-control @error('city') is-invalid @enderror" placeholder="City">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">State <span>*</span></label>
                                            <select class="form-select @error('state') is-invalid @enderror" name="state">
                                                <option value="Aberdeen">Aberdeen</option>
                                                <option value="Aberdeenshire">Aberdeenshire</option>
                                                <option value="Anglesey">Anglesey</option>
                                                <option value="Angus">Angus</option>
                                                <option value="Argyll and Bute">Argyll and Bute</option>
                                                <option value="Bedfordshire">Bedfordshire</option>
                                                <option value="Berkshire">Berkshire</option>
                                                <option value="Blaenau Gwent">Blaenau Gwent</option>
                                                <option value="Bridgend">Bridgend</option>
                                                <option value="Bristol">Bristol</option>
                                                <option value="Buckinghamshire">Buckinghamshire</option>
                                                <option value="Caerphilly">Caerphilly</option>
                                                <option value="Cambridgeshire">Cambridgeshire</option>
                                                <option value="Cardiff">Cardiff</option>
                                                <option value="Carmarthenshire">Carmarthenshire</option>
                                                <option value="Ceredigion">Ceredigion</option>
                                                <option value="Cheshire">Cheshire</option>
                                                <option value="Clackmannanshire">Clackmannanshire</option>
                                                <option value="Conwy">Conwy</option>
                                                <option value="Cornwall">Cornwall</option>
                                                <option value="Denbighshire">Denbighshire</option>
                                                <option value="Derbyshire">Derbyshire</option>
                                                <option value="Devon">Devon</option>
                                                <option value="Dorset">Dorset</option>
                                                <option value="Dumfries and Galloway">Dumfries and Galloway</option>
                                                <option value="Dundee">Dundee</option>
                                                <option value="Durham">Durham</option>
                                                <option value="East Ayrshire">East Ayrshire</option>
                                                <option value="East Dunbartonshire">East Dunbartonshire</option>
                                                <option value="East Lothian">East Lothian</option>
                                                <option value="East Renfrewshire">East Renfrewshire</option>
                                                <option value="East Riding of Yorkshire">East Riding of Yorkshire
                                                </option>
                                                <option value="East Sussex">East Sussex</option>
                                                <option value="Edinburgh">Edinburgh</option>
                                                <option value="Essex">Essex</option>
                                                <option value="Falkirk">Falkirk</option>
                                                <option value="Fife">Fife</option>
                                                <option value="Flintshire">Flintshire</option>
                                                <option value="Glasgow">Glasgow</option>
                                                <option value="Gloucestershire">Gloucestershire</option>
                                                <option value="Greater London">Greater London</option>
                                                <option value="Greater Manchester">Greater Manchester</option>
                                                <option value="Gwynedd">Gwynedd</option>
                                                <option value="Hampshire">Hampshire</option>
                                                <option value="Herefordshire">Herefordshire</option>
                                                <option value="Hertfordshire">Hertfordshire</option>
                                                <option value="Highlands">Highlands</option>
                                                <option value="Inverclyde">Inverclyde</option>
                                                <option value="Isle of Wight">Isle of Wight</option>
                                                <option value="Kent">Kent</option>
                                                <option value="Lancashire">Lancashire</option>
                                                <option value="Leicestershire">Leicestershire</option>
                                                <option value="Lincolnshire">Lincolnshire</option>
                                                <option value="Merseyside">Merseyside</option>
                                                <option value="Merthyr Tydfil">Merthyr Tydfil</option>
                                                <option value="Midlothian">Midlothian</option>
                                                <option value="Monmouthshire">Monmouthshire</option>
                                                <option value="Moray">Moray</option>
                                                <option value="Neath Port Talbot">Neath Port Talbot</option>
                                                <option value="Newport">Newport</option>
                                                <option value="Norfolk">Norfolk</option>
                                                <option value="North Ayrshire">North Ayrshire</option>
                                                <option value="North Lanarkshire">North Lanarkshire</option>
                                                <option value="North Yorkshire">North Yorkshire</option>
                                                <option value="Northamptonshire">Northamptonshire</option>
                                                <option value="Northumberland">Northumberland</option>
                                                <option value="Nottinghamshire">Nottinghamshire</option>
                                                <option value="Orkney Islands">Orkney Islands</option>
                                                <option value="Oxfordshire">Oxfordshire</option>
                                                <option value="Pembrokeshire">Pembrokeshire</option>
                                                <option value="Perth and Kinross">Perth and Kinross</option>
                                                <option value="Powys">Powys</option>
                                                <option value="Renfrewshire">Renfrewshire</option>
                                                <option value="Rhondda Cynon Taff">Rhondda Cynon Taff</option>
                                                <option value="Rutland">Rutland</option>
                                                <option value="Scottish Borders">Scottish Borders</option>
                                                <option value="Shetland Islands">Shetland Islands</option>
                                                <option value="Shropshire">Shropshire</option>
                                                <option value="Somerset">Somerset</option>
                                                <option value="South Ayrshire">South Ayrshire</option>
                                                <option value="South Lanarkshire">South Lanarkshire</option>
                                                <option value="South Yorkshire">South Yorkshire</option>
                                                <option value="Staffordshire">Staffordshire</option>
                                                <option value="Stirling">Stirling</option>
                                                <option value="Suffolk">Suffolk</option>
                                                <option value="Surrey">Surrey</option>
                                                <option value="Swansea">Swansea</option>
                                                <option value="Torfaen">Torfaen</option>
                                                <option value="Tyne and Wear">Tyne and Wear</option>
                                                <option value="Vale of Glamorgan">Vale of Glamorgan</option>
                                                <option value="Warwickshire">Warwickshire</option>
                                                <option value="West Dunbartonshire">West Dunbartonshire</option>
                                                <option value="West Lothian">West Lothian</option>
                                                <option value="West Midlands">West Midlands</option>
                                                <option value="West Sussex">West Sussex</option>
                                                <option value="West Yorkshire">West Yorkshire</option>
                                                <option value="Western Isles">Western Isles</option>
                                                <option value="Wiltshire">Wiltshire</option>
                                                <option value="Worcestershire">Worcestershire</option>
                                                <option value="Wrexham">Wrexham</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Country <span>*</span></label>
                                            <select class="form-select @error('country') is-invalid @enderror"
                                                name="country">
                                                <!-- <option value=""></option> -->
                                                <option {{ Auth::user()?->country == 'uk' ? 'selected' : '' }}
                                                    value="uk" selected="">United Kingdom
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <div class="form-group ">
                                            <label for="">Comment/Notes</label>
                                            <textarea name="comments" class="form-control" rows="4" id="">{{ old('comments') }}</textarea>
                                        </div>
                                    </div>

                                    <input type="hidden" id="totalPayAmount" name="pay_amount">
                                </div>


                            </div>

                        </div>

                        <!-- CART SECTION START -->
                        <div class="col-lg-5">
                            @include('frontend.common.alert')
                            <h3>Your Order</h3>

                            <!-- CART START -->
                            <div class="cart" id="checkCartItems">
                                <div class="cart-items">
                                    <div class="table-responsive">
                                        <table class="table mb-0" id="checkout-table">
                                            <tbody id="checkout-tbody">

                                                <tr>
                                                    <td>
                                                        <div class="item-title">
                                                            <p>Balancing And Repairs</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="qty-wrap d-flex align-items-center">
                                                            <button><i class="fa-solid fa-minus"></i></button>
                                                            <input type="text" min="1" value="1">
                                                            <button><i class="fa-solid fa-plus"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="price mb-0">£10.00</p>
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
                                                        <div class="qty-wrap d-flex align-items-center">
                                                            <button><i class="fa-solid fa-minus"></i></button>
                                                            <input type="text" min="1" value="1">
                                                            <button><i class="fa-solid fa-plus"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="price mb-0">£10.00</p>
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
                                                        <p class="m-0 text-end" id="subTotal">£132.65</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td class="px-0"><strong>Vat Tax</strong></td>
                                                    <td>
                                                        <p class="m-0 text-end" id="vatTotal">£132.65</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td class="px-0"><strong>Total</strong></td>
                                                    <td>
                                                        <p class="m-0 text-end" id="total">£132.65</p>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- CART END -->

                            <!-- APPOINTMENT DETAIL START-->
                            {{-- <div class="appointment-detail mt-4">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Appointment Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Centre Locator</td>
                                                <td>
                                                    <strong>TYRE ZONE TYRES LTD
                                                        Unit 4 Church Street, Middleton Manchester M24 2PY, UK</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Date time</td>
                                                <td>
                                                    <strong>07th, Jul 2024 morning</strong>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div> --}}
                            <!-- APPOINTMENT DETAIL END-->

                            {{-- <div class="form-check my-3">
                                <input type="radio"  class="form-check-input" name="payment" value="ondelivery"
                                    id="atFitting">
                                <label for="atFitting">Pay at Fitting Time</label>
                            </div> --}}

                            @if ($stripe_publishable_key != '')
                                <div class="form-check my-3">
                                    <input type="radio" checked class="form-check-input d-none" name="payment"
                                        value="stripe" id="payOnline">
                                    {{-- <label for="payOnline">Pay
                                        Now</label> --}}
                                    {{-- @else --}}
                                    {{-- @if (Auth::check())
                                        <button id="onDeliveryBtn" class="main-btn ">PROCEED TO
                                            BOOKING</button>
                                    @else
                                        <button type="button" class="main-btn "
                                            style="cursor: not-allowed; pointer-events: all; opacity: .7; ">Please Login to
                                            Continue</button>
                                    @endif --}}
                            @endif
                        </div>

                        {{-- <div class="form-check my-3">
                                <input type="checkbox" class="form-check-input" id="terms">
                                <label for="terms">I have read and agree to the <a href="#">Terms & Conditions of
                                        Use</a></label>
                            </div> --}}



                        <div class="mt-4">
                            @if (Auth::check())
                                @if ($stripe_publishable_key != '')
                                    <div class="card payment-card ">
                                        <div class="card-header px-3 py-2">
                                            <div class="card-title-wrapper">
                                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <rect x="1" y="4" width="22" height="16" rx="2"
                                                        ry="2"></rect>
                                                    <line x1="1" y1="10" x2="23" y2="10">
                                                    </line>
                                                </svg>
                                                <h2 class="card-title mb-0">Payment Method</h2>
                                            </div>
                                            <p class="card-description mb-0">Enter your card details to complete payment
                                            </p>
                                        </div>
                                        <div class="card-content">
                                            <div class="form-group">
                                                <label for="cardHolder" class="form-label">Card Holder Name</label>
                                                <input type="text" id="cardHolder" class="form-input"
                                                    placeholder="Name on Card" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cardNumber" class="form-label">Card Number</label>
                                                <input type="text" id="cardNumber" class="form-input card-number"
                                                    placeholder="1234 1234 1234 1234" maxlength="19" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="cvc" class="form-label">CVC</label>
                                                    <input type="text" id="cvc" class="form-input card-cvc"
                                                        placeholder="ex. 311" maxlength="4" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="expMonth" class="form-label">Exp. Month</label>
                                                    <select id="expMonth" class="form-input card-expiry-month" required>
                                                        <option value="" disabled selected>MM</option>
                                                        <!-- Months will be populated by JavaScript -->
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="expYear" class="form-label">Exp. Year</label>
                                                    <select id="expYear" class="form-input card-expiry-year" required>
                                                        <option value="" disabled selected>YYYY</option>
                                                        <!-- Years will be populated by JavaScript -->
                                                    </select>
                                                </div>
                                            </div>
                                            @if (Session::has('pay_error'))
                                                <p class="m-0 text-danger">
                                                    {{ Session::get('pay_error') == 'Must provide source or customer.' ? 'Please enter valid payment details.' : '' }}
                                                </p>
                                            @endif
                                        </div>
                                        <div class='form-row row mt-3'>
                                            <div class='col-md-12 error form-group hide d-none' id="error">

                                                <div class='alert-danger alert payment-alert'>Please correct
                                                    the
                                                    errors and
                                                    try again.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer  p-0 p-2">
                                            <button class="main-btn w-100" type="submit">Pay Now
                                                <span id="totalPay"></span></button>
                                        </div>
                                    </div>
                                @endif
                            @else
                                <button type="button" class="main-btn "
                                    style="cursor: not-allowed; pointer-events: all; opacity: .7; ">Please Login to
                                    Continue</button>
                            @endif
                        </div>
                    </div>


                    <!-- CART SECTION END -->
            </div>

            </form>

        </div>
    </div>
    <!-- CHECKOUT DETAILS END -->






    </div>
@endsection


@section('customjs')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script>
        // Format card number with spaces
        const cardNumberInput = document.getElementById('cardNumber');
        cardNumberInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\s/g, '');
            value = value.replace(/[^\d]/g, '').substring(0, 16);

            // Add spaces every 4 digits
            const formattedValue = value.replace(/(.{4})/g, '$1 ').trim();
            e.target.value = formattedValue;
        });

        // Restrict CVC to numbers only
        const cvcInput = document.getElementById('cvc');
        cvcInput.addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/[^\d]/g, '').substring(0, 4);
        });

        // Populate month dropdown
        const expMonthSelect = document.getElementById('expMonth');
        for (let i = 1; i <= 12; i++) {
            const option = document.createElement('option');
            option.value = i.toString().padStart(2, '0');
            option.textContent = i.toString().padStart(2, '0');
            expMonthSelect.appendChild(option);
        }

        // Populate year dropdown
        const expYearSelect = document.getElementById('expYear');
        const currentYear = new Date().getFullYear();
        for (let i = 0; i < 10; i++) {
            const year = currentYear + i;
            const option = document.createElement('option');
            option.value = year.toString();
            option.textContent = year.toString();
            expYearSelect.appendChild(option);
        }

        let payOnline = document.getElementById("payOnline");
        let payAtFitting = document.getElementById("atFitting");

        payOnline?.addEventListener("click", function() {
            document.getElementById("collapseExample").classList.add("show");
            document.getElementById("onDeliveryBtn").classList.add("d-none");

            /*------------------------------------------
            --------------------------------------------
            Stripe Payment Code
            --------------------------------------------
            --------------------------------------------*/

            var $form = $(".require-validation");

            $('form.require-validation').unbind('submit').bind('submit', function(e) {

                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]', 'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;

                $errorMessage.addClass('hide');

                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.addClass('is-invalid');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }
            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    console.log(response.error.message);
                    $('.error')
                        .removeClass('d-none')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }
        });

        payAtFitting.addEventListener("click", function() {
            document.getElementById("collapseExample").classList.remove("show");
            document.getElementById("onDeliveryBtn").classList.remove("d-none");

            // Disable Stripe form validation when Pay at Fitting is selected
            var $form = $(".require-validation");
            $('form.require-validation').unbind('submit');
        });
    </script>
@endsection
