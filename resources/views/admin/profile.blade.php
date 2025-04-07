@extends('admin.layout.main')

@section('style')
@endsection






@section('maincontent')
    <div class="content-area px-4 px-sm-5 mt-5">

        @include('admin.common.alert')

        <h5 class="m-0">Profile</h5>
        <div class="row d-flex justify-content-between align-items-start ">

            <div class="col-md-6 mb-5  col-md-6">
                <form action="{{ route('profile.update') }}" class="form form-wrap sign-up-wrap" method="post">
                    @csrf
                    <div class="row ">

                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" value="{{ Auth::user()->fname }}" name="fname" class="form-control"
                                    placeholder="name">
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" value="{{ Auth::user()->lname }}" name="lname" class="form-control"
                                    placeholder="name">
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="text" disabled value="{{ Auth::user()->email }}" name="name"
                                    class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label for="">Phone:</label>
                                <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control"
                                    placeholder="Phone">
                            </div>
                        </div>


                        <div class="col-12 text-center">
                            <button class="main-btn w-100">Update Profile</button>
                        </div>

                    </div>
                </form>

                <div class="user-main col-md-12 px-0 ">

                    <section class="registration form-wrap  py-3 mt-0">
                        <div class=" px-0">

                            <form action="{{ route('udpatePassword') }}" method="post">
                                @csrf
                                <div class=" col-md-12  sign-up-wrap px-2 px-sm-3">
                                    <h5>Change Password</h5>
                                    <div class="row ">

                                        <div class="col-12  mb-4 mb-lg-0">
                                            <input type="hidden" value="{{ Auth::user()->id }}" name="user-id">



                                            <div class="form-group mb-4">

                                                <input value="{{ old('old_password') }}"
                                                    class="form-control @error('old_password') is-invalid @enderror"
                                                    type="password" name="old_password"
                                                    placeholder="Enter your old password">

                                                @error('old_password')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-4">
                                                <input value="{{ old('password') }}"
                                                    class="form-control  @error('password') is-invalid @enderror"
                                                    type="password" name="password" placeholder="Enter new password">
                                                @error('password')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-4">
                                                <input value="{{ old('password_confirmation') }}"
                                                    class="form-control  @error('password_confirmation') is-invalid @enderror"
                                                    type="password" name="password_confirmation"
                                                    placeholder="Confirm new password">
                                                @error('password_confirmation')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>


                                        </div>



                                    </div>
                                    <div class="mt-2 px-0">
                                        <button class="main-btn w-100">Change Password</button>
                                    </div>





                                </div>
                            </form>
                        </div>
                    </section>

                </div>
            </div>



            <div class="user-main col-md-5 px-0  ms-auto">

                <section class="registration form-wrap  pb-3 mt-0">
                    <div class=" px-0">

                        <form action="{{ route('admin.change.logo') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class=" col-md-12 sign-up-wrap px-2 px-sm-3">
                                <h5>Change Logo</h5>
                                <div class="row ">
                                    <div class="col-12  mb-4 mb-lg-0">

                                        <div class="form-group mb-3">
                                            <label for="">Logo <span>*</span></label>
                                            <input type="file" name="logo" class="form-control">
                                            @error('logo')
                                                <span class="invalid-feedback d-block ">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mt-2 px-0">
                                            <button class="main-btn w-100">Change Logo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                {{-- <div class="col-md-12 px-5 sign-up-wrap form-wrap">

                    <h5>SMTP Settings</h5>

                    <form action="{{ route('admin.smtp.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="mb-2 col-md-6 px-1">
                                <label for="mail_mailer" class="">Mailer</label>
                                <input type="text" placeholder="smtp" class="form-control" id="mail_mailer"
                                    name="mail_mailer" value="{{ $smtpSetting->mail_mailer ?? 'smtp' }}">
                            </div>

                            <div class="mb-2 col-md-6 px-1">
                                <label for="mail_host" class="">Host</label>
                                <input type="text" placeholder="smtp.gmail.com" class="form-control" id="mail_host"
                                    name="mail_host" value="{{ $smtpSetting->mail_host ?? '' }}">
                            </div>

                            <div class="mb-2 col-md-6 px-1">
                                <label for="mail_port" class="">Port</label>
                                <input type="text" placeholder="Port" class="form-control" id="mail_port"
                                    name="mail_port" value="{{ $smtpSetting->mail_port ?? '587' }}">
                            </div>

                            <div class="mb-2 col-md-6 px-1">
                                <label for="mail_username" class="">Username</label>
                                <input type="text" class="form-control" placeholder="Username or Email address"
                                    id="mail_username" name="mail_username"
                                    value="{{ $smtpSetting->mail_username ?? '' }}">
                            </div>

                            <div class="mb-2 col-md-6 px-1">
                                <label for="mail_password" class="">Password</label>
                                <input type="password" placeholder="Password" class="form-control" id="mail_password"
                                    name="mail_password" value="{{ $smtpSetting->mail_password ?? '' }}">
                            </div>

                            <div class="mb-2 col-md-6 px-1">
                                <label for="mail_encryptionform-label">Encryption</label>
                                <input type="text" placeholder="Encryption" class="form-control" id="mail_encryption"
                                    name="mail_encryption" value="{{ $smtpSetting->mail_encryption ?? 'tls' }}">
                            </div>

                            <div class="mb-2 col-md-6 px-1">
                                <label for="mail_from_addressform-label">From Address</label>
                                <input type="email" placeholder="From Email Address" class="form-control"
                                    id="mail_from_address" name="mail_from_address"
                                    value="{{ $smtpSetting->mail_from_address ?? '' }}">
                            </div>

                            <div class="mb-2 col-md-6 px-1">
                                <label for="mail_from_name">From Name</label>
                                <input type="text" placeholder="From Name" class="form-control" id="mail_from_name"
                                    name="mail_from_name" value="{{ $smtpSetting->mail_from_name ?? '' }}">
                            </div>

                            <div class="px-1 mt-2">
                                <button type="submit" class="main-btn w-100 d-block">Save SMTP Settings</button>

                            </div>
                        </div>

                    </form>

                </div> --}}

                <div class="col-md-12 ms-auto px-5 sign-up-wrap form-wrap">

                    <h5>Stripe Keys Settings</h5>

                    <form action="{{ route('admin.stripe_setting.update') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="stripe_publishable_key">Stripe Publishable Key</label>
                            <input type="text" name="stripe_publishable_key" id="stripe_publishable_key"
                                class="form-control"
                                value="{{ old('stripe_publishable_key', $stripeKeys->stripe_publishable_key ?? '') }}">
                            @error('stripe_publishable_key')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="stripe_secret_key">Stripe Secret Key</label>
                            <input type="text" name="stripe_secret_key" id="stripe_secret_key" class="form-control"
                                value="{{ old('stripe_secret_key', $stripeKeys->stripe_secret_key ?? '') }}">
                            @error('stripe_secret_key')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="main-btn w-100">Update Keys</button>
                        </div>
                    </form>

                </div>

            </div>






        </div>



        <div class="row align-items-start">

            {{-- <div class="col-md-6 px-5 sign-up-wrap form-wrap">

                <h5>SMTP Settings</h5>

                <form action="{{ route('admin.smtp.update') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-2 col-md-6 px-1">
                            <label for="mail_mailer" class="">Mailer</label>
                            <input type="text" placeholder="smtp" class="form-control" id="mail_mailer"
                                name="mail_mailer" value="{{ $smtpSetting->mail_mailer ?? 'smtp' }}">
                        </div>

                        <div class="mb-2 col-md-6 px-1">
                            <label for="mail_host" class="">Host</label>
                            <input type="text" placeholder="smtp.gmail.com" class="form-control" id="mail_host"
                                name="mail_host" value="{{ $smtpSetting->mail_host ?? '' }}">
                        </div>

                        <div class="mb-2 col-md-6 px-1">
                            <label for="mail_port" class="">Port</label>
                            <input type="text" placeholder="Port" class="form-control" id="mail_port"
                                name="mail_port" value="{{ $smtpSetting->mail_port ?? '587' }}">
                        </div>

                        <div class="mb-2 col-md-6 px-1">
                            <label for="mail_username" class="">Username</label>
                            <input type="text" class="form-control" placeholder="Username or Email address"
                                id="mail_username" name="mail_username" value="{{ $smtpSetting->mail_username ?? '' }}">
                        </div>

                        <div class="mb-2 col-md-6 px-1">
                            <label for="mail_password" class="">Password</label>
                            <input type="password" placeholder="Password" class="form-control" id="mail_password"
                                name="mail_password" value="{{ $smtpSetting->mail_password ?? '' }}">
                        </div>

                        <div class="mb-2 col-md-6 px-1">
                            <label for="mail_encryptionform-label">Encryption</label>
                            <input type="text" placeholder="Encryption" class="form-control" id="mail_encryption"
                                name="mail_encryption" value="{{ $smtpSetting->mail_encryption ?? 'tls' }}">
                        </div>

                        <div class="mb-2 col-md-6 px-1">
                            <label for="mail_from_addressform-label">From Address</label>
                            <input type="email" placeholder="From Email Address" class="form-control"
                                id="mail_from_address" name="mail_from_address"
                                value="{{ $smtpSetting->mail_from_address ?? '' }}">
                        </div>

                        <div class="mb-2 col-md-6 px-1">
                            <label for="mail_from_name">From Name</label>
                            <input type="text" placeholder="From Name" class="form-control" id="mail_from_name"
                                name="mail_from_name" value="{{ $smtpSetting->mail_from_name ?? '' }}">
                        </div>

                        <div class="px-1 mt-2">
                            <button type="submit" class="main-btn w-100 d-block">Save SMTP Settings</button>

                        </div>
                    </div>

                </form>

            </div> --}}


        </div>


        <div class="row col-12 sign-up-wrap form-wrap">
            <h5>Privacy Policy</h5>
            <form action="{{ route('admin.privacy') }}" method="POST">
                @csrf
                <textarea class="summernote" name="privacy" id="" cols="30" rows="10">{{ $privacy?->privacy }}</textarea>
                <button class="main-btn sm mt-2 px-4 mx-auto d-block">Save</button>
            </form>
            
        </div>


    </div>
@endsection










@section('customjs')
@endsection
