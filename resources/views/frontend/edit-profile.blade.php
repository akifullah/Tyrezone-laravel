@extends('frontend.layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/user-dashboard.css') }}">
@endsection


@section('main')
    <div class="wrapper">






        <!-- USER DASHBOARD -->
        <div class="user-dashboard">

            <div class="">



                <div class="row">
                    <div class="col-lg-3">
                        @include('frontend.includes.sidebar')
                    </div>

                    <div class="col-lg-9 pe-4 my-lg-4">

                        @include('frontend.common.alert')

                        <div class="user-main ">

                            <section class="registration mt-0 form-wrap">
                                <div class="container ">
                                    <form action="{{ route('profile.update') }}" method="post">
                                        @csrf
                                        <div class="col-lg-12  sign-up-wrap">
                                            <h3 class="text-center mb-4">Edit Profile</h3>
                                            <div class="row">


                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">First Name <span>*</span></label>
                                                        <input type="text" name="fname" value="{{ $user->fname }}"
                                                            placeholder="First Name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Last Name <span>*</span></label>
                                                        <input type="text" name="lname" value="{{ $user->lname }}"
                                                            placeholder="Last Name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Email <span>*</span></label>
                                                        <input type="email" name="email" value="{{ $user->email }}"
                                                            disabled placeholder="Email Address"
                                                            class="form-control bg-muted">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Phone Number <span>*</span></label>
                                                        <input type="number" name="phone" value="{{ $user->phone }}"
                                                            placeholder="Phone" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <label for="">City </label>
                                                       <input type="text" name="city" value="{{ $user->city }}"
                                                            placeholder="City" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <label for="">Postal Code</label>
                                                       <input type="text" name="post_code" value="{{ $user->post_code }}"
                                                            placeholder="Postal Code" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="">Company</label>
                                                       <input type="text" name="company" value="{{ $user->company }}"
                                                            placeholder="Company" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="">State </label>
                                                        <select class="form-select @error('state') is-invalid @enderror"
                                                            name="state">
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
                                                            <option value="Clackmannanshire">Clackmannanshire
                                                            </option>
                                                            <option value="Conwy">Conwy</option>
                                                            <option value="Cornwall">Cornwall</option>
                                                            <option value="Denbighshire">Denbighshire</option>
                                                            <option value="Derbyshire">Derbyshire</option>
                                                            <option value="Devon">Devon</option>
                                                            <option value="Dorset">Dorset</option>
                                                            <option value="Dumfries and Galloway">Dumfries and
                                                                Galloway
                                                            </option>
                                                            <option value="Dundee">Dundee</option>
                                                            <option value="Durham">Durham</option>
                                                            <option value="East Ayrshire">East Ayrshire</option>
                                                            <option value="East Dunbartonshire">East Dunbartonshire
                                                            </option>
                                                            <option value="East Lothian">East Lothian</option>
                                                            <option value="East Renfrewshire">East Renfrewshire
                                                            </option>
                                                            <option value="East Riding of Yorkshire">East Riding of
                                                                Yorkshire
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
                                                            <option value="Greater Manchester">Greater Manchester
                                                            </option>
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
                                                            <option value="Neath Port Talbot">Neath Port Talbot
                                                            </option>
                                                            <option value="Newport">Newport</option>
                                                            <option value="Norfolk">Norfolk</option>
                                                            <option value="North Ayrshire">North Ayrshire</option>
                                                            <option value="North Lanarkshire">North Lanarkshire
                                                            </option>
                                                            <option value="North Yorkshire">North Yorkshire
                                                            </option>
                                                            <option value="Northamptonshire">Northamptonshire
                                                            </option>
                                                            <option value="Northumberland">Northumberland</option>
                                                            <option value="Nottinghamshire">Nottinghamshire
                                                            </option>
                                                            <option value="Orkney Islands">Orkney Islands</option>
                                                            <option value="Oxfordshire">Oxfordshire</option>
                                                            <option value="Pembrokeshire">Pembrokeshire</option>
                                                            <option value="Perth and Kinross">Perth and Kinross
                                                            </option>
                                                            <option value="Powys">Powys</option>
                                                            <option value="Renfrewshire">Renfrewshire</option>
                                                            <option value="Rhondda Cynon Taff">Rhondda Cynon Taff
                                                            </option>
                                                            <option value="Rutland">Rutland</option>
                                                            <option value="Scottish Borders">Scottish Borders
                                                            </option>
                                                            <option value="Shetland Islands">Shetland Islands
                                                            </option>
                                                            <option value="Shropshire">Shropshire</option>
                                                            <option value="Somerset">Somerset</option>
                                                            <option value="South Ayrshire">South Ayrshire</option>
                                                            <option value="South Lanarkshire">South Lanarkshire
                                                            </option>
                                                            <option value="South Yorkshire">South Yorkshire
                                                            </option>
                                                            <option value="Staffordshire">Staffordshire</option>
                                                            <option value="Stirling">Stirling</option>
                                                            <option value="Suffolk">Suffolk</option>
                                                            <option value="Surrey">Surrey</option>
                                                            <option value="Swansea">Swansea</option>
                                                            <option value="Torfaen">Torfaen</option>
                                                            <option value="Tyne and Wear">Tyne and Wear</option>
                                                            <option value="Vale of Glamorgan">Vale of Glamorgan
                                                            </option>
                                                            <option value="Warwickshire">Warwickshire</option>
                                                            <option value="West Dunbartonshire">West Dunbartonshire
                                                            </option>
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

                                                <div class="col-md-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="">Country </label>
                                                        <select class="form-select @error('country') is-invalid @enderror"
                                                            name="country">
                                                            <!-- <option value=""></option> -->
                                                            <option value="uk" selected="">United Kingdom
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Address</label>
                                                        <input type="text" name="address" value="{{ $user->address }}"
                                                            placeholder="Address" class="form-control">
                                                    </div>
                                                </div>






                                            </div>

                                            <div class="d-flex flex-column align-items-center justify-content-center">

                                                <div class="mt-2">
                                                    <button class="main-btn">Update</button>
                                                </div>

                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </section>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- USER DASHBOARD END -->







    </div>
@endsection
