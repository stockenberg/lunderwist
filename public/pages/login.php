<div class="row" style="margin-top: 10%;">
    <form onsubmit="login(this); return false;" action="#" method="post" id="login" class="col offset-s3 s6">
        <h5 class="center">Login</h5>
        <div class="row">
            <div class="input-field s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate username">
                <label for="icon_prefix">Username</label>
            </div>
            <div class="input-field s6">
                <i class="material-icons prefix">vpn_key</i>
                <input id="icon_telephone" type="tel" class="validate password">
                <label for="icon_telephone">Password</label>
            </div>
            <div class="center">
                <input type="submit" class="center btn login" value="Login">
            </div>
        </div>
    </form>
</div>