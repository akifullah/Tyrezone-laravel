

<?php $__env->startSection('style'); ?>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>
    <div class="wrapper">


        <!-- CHECKOUT DETAILS START -->
        <div class="checkout">
            <div class="container">
                <form role="form" action="<?php echo e(route('stripe.post')); ?>" method="post" class="require-validation"
                    data-cc-on-file="false"
                    data-stripe-publishable-key="<?php echo e($stripe_publishable_key != null ? $stripe_publishable_key : ''); ?>"
                    id="payment-form">

                    <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="col-lg-7">
                            <h3>Enter your details</h3>


                            <div class="checkout-form form-wrap">

                                <div class="row">

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">First Name <span>*</span></label>
                                            <input type="text" name="fname"
                                                class="form-control <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                placeholder="First Name">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Last Name <span>*</span></label>
                                            <input type="text" name="lname"
                                                class="form-control <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                placeholder="Last Name">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Email Name <span>*</span></label>
                                            <input type="email" name="email"
                                                class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
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
                                                    class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    placeholder="Telephone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Reg. No. <span>*</span></label>
                                            <div class="input-group">
                                                <input type="Text" name="reg_no"
                                                    class="form-control <?php $__errorArgs = ['reg_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    placeholder="REG No.">
                                                <button type="button" class="input-group-text igt-btn">
                                                    Lookup
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <h4 class="mt-4">Your Address</h4>
                                <div class="row">

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Post Code <span>*</span></label>
                                            <div class="input-group">
                                                <input type="text" name="post_code"
                                                    class="form-control <?php $__errorArgs = ['post_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    placeholder="Post Code">
                                                <button type="button" class="input-group-text igt-btn">
                                                    Lookup
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Company <span>*</span></label>
                                            <input type="text" name="company"
                                                class="form-control <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                placeholder="Company">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label for="">Address <span>*</span></label>
                                            <input type="text" name="address"
                                                class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                placeholder="Company">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">City <span>*</span></label>
                                            <input type="text" name="city"
                                                class="form-control <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="City">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">State <span>*</span></label>
                                            <select class="form-select <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="state">
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
                                            <select class="form-select <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="country">
                                                <!-- <option value=""></option> -->
                                                <option value="uk" selected="">United Kingdom
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <div class="form-group ">
                                            <label for="">Comment/Notes</label>
                                            <textarea name="comments" class="form-control" rows="4" id=""></textarea>
                                        </div>
                                    </div>

                                    <input type="hidden" id="totalPayAmount" name="pay_amount">
                                </div>


                            </div>

                        </div>

                        <!-- CART SECTION START -->
                        <div class="col-lg-5">
                            <?php echo $__env->make('frontend.common.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
                            
                            <!-- APPOINTMENT DETAIL END-->

                            <div class="form-check my-3">
                                <input type="radio" checked class="form-check-input" name="payment" value="ondelivery"
                                    id="atFitting">
                                <label for="atFitting">Pay at Fitting Time</label>
                            </div>

                            <?php if($stripe_publishable_key != ''): ?>
                                <div class="form-check my-3">
                                    <input type="radio" class="form-check-input" name="payment" value="stripe"
                                        id="payOnline">
                                    <label for="payOnline">Pay
                                        Now</label>
                                <?php else: ?>
                                    <?php if(Auth::check()): ?>
                                        <button id="onDeliveryBtn" class="main-btn ">PROCEED TO
                                            BOOKING</button>
                                    <?php else: ?>
                                        <button type="button" class="main-btn "
                                            style="cursor: not-allowed; pointer-events: all; opacity: .7; ">Please Login to
                                            Continue</button>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>

                        



                        <div class="mt-4">
                            <?php if(Auth::check()): ?>
                                <?php if($stripe_publishable_key != ''): ?>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card  credit-card-box">

                                            <div class="card-header display-table">

                                                <h5 class="card-title my-1">Payment Details</h5>

                                            </div>

                                            <div class="card-body">



                                                <?php if(Session::has('success')): ?>
                                                    <div class="alert alert-success text-center">

                                                        <a href="#" class="close" data-dismiss="alert"
                                                            aria-label="close">×</a>

                                                        <p><?php echo e(Session::get('success')); ?></p>

                                                    </div>
                                                <?php endif; ?>





                                                <div class='row'>

                                                    <div class='col-12 form-group required'>

                                                        <label class='control-label'>Card Holder Name</label> <input
                                                            class='form-control' size='4' type='text'>

                                                    </div>

                                                </div>



                                                <div class='form-row row'>

                                                    <div class='col-xs-12 form-group  required'>

                                                        <label class='control-label'>Card Number</label> <input
                                                            autocomplete='off' class='form-control card-number'
                                                            size='20' type='text'>

                                                    </div>

                                                </div>



                                                <div class='form-row row'>

                                                    <div class='col-12 col-md-4 form-group cvc required'>

                                                        <label class='control-label'>CVC</label> <input autocomplete='off'
                                                            class='form-control card-cvc' placeholder='ex. 311'
                                                            size='4' type='text'>

                                                    </div>

                                                    <div class='col-12 col-md-4 form-group expiration required'>

                                                        <label class='control-label'>Exp. Mon.</label> <input
                                                            class='form-control card-expiry-month' placeholder='MM'
                                                            size='2' type='text'>

                                                    </div>

                                                    <div class='col-12 col-md-4 form-group expiration required'>

                                                        <label class='control-label'>Exp. Year</label> <input
                                                            class='form-control card-expiry-year' placeholder='YYYY'
                                                            size='4' type='text'>

                                                    </div>

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


                                                <div class="">

                                                    <button class="main-btn w-100" type="submit">Pay Now
                                                        <span id="totalPay"></span></button>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <button id="onDeliveryBtn" class="main-btn ">PROCEED TO
                                        BOOKING</button>
                                <?php endif; ?>
                            <?php else: ?>
                                <button type="button" class="main-btn "
                                    style="cursor: not-allowed; pointer-events: all; opacity: .7; ">Please Login to
                                    Continue</button>
                            <?php endif; ?>
                        </div>
                    </div>


                    <!-- CART SECTION END -->
            </div>

            </form>

        </div>
    </div>
    <!-- CHECKOUT DETAILS END -->






    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('customjs'); ?>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script>
        // $("document").ready(function() {
        //     $("#onDeliveryBtn").click(() => {
        //        let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));

        //        if(cart != null){
        //         $.ajax({
        //             url: "<?php echo e(route('saveCart')); ?>",
        //             type: "get", 
        //             data: {"cart": cart},
        //             dataType: "json",
        //             success: function(res){
        //                 console.log(res);
        //             }
        //         })
        //        }

        //     })
        // })




        let payOnline = document.getElementById("payOnline");
        let payAtFitting = document.getElementById("atFitting");

        payOnline.addEventListener("click", function() {
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/frontend/checkout.blade.php ENDPATH**/ ?>