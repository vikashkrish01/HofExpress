<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="{{ route('register') }}" method ="POST" class="popup-form" id="myRegister">
                @csrf
                <div class="login_icon"><i class="icon_lock_alt"></i></div>
                <input type="text" class="form-control form-white" placeholder="First Name" name="firstname" required>
                <input type="text" class="form-control form-white" placeholder="Last Name" name="lastname" required>
                <input type="text" class="form-control form-white" placeholder="User Name" name="username" required>
                <input type="email" class="form-control form-white" placeholder="Email" name="email" required>
                <input type="password" class="form-control form-white" placeholder="Password"  id="password1" name="password" required>
                <input type="password" class="form-control form-white" placeholder="Confirm password"  id="password2" name="password_confirmation" required>
                <div id="pass-info" class="clearfix"></div>
                <div class="checkbox-holder text-left">
                    <div class="checkbox">
                        <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
                        <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                    </div>
                </div>
                <button type="submit" class="btn btn-submit">Register</button>
            </form>
        </div>
    </div>
</div>