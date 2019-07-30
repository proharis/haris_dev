<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot Password</label>
        <div class="login-form">
            <div class="sign-in-htm">
                <form action="<?php base_url() ?>/admin/admin_home" method="post">
                    <div class="group">
                        <label for="email" class="label">Username or Email</label>
                        <input id="email" name="email" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="password" class="label">Password</label>
                        <input id="password" name="password" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                </form>
                <div class="hr"></div>
            </div>
            <div class="for-pwd-htm">
                <div class="group">
                    <label for="email" class="label">Username or Email</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Reset Password">
                </div>
                <div class="hr"></div>
            </div>
        </div>
    </div>
</div>