<div class="row">
    <div class="col-lg-12">
        <div id="initial">

            <div class="header">
                <img src="images/icons/png/Chat.png" id="icon1"/>
            </div>
            <div class="login-form login1" style="width:30%">
                <div class="form-group">
                    <input type="text" class="form-control login-field" value="" placeholder="Enter your name" name="chat_user" id="chat_user" onkeypress="if (event.keyCode == 13) {
                                chat_initial();
                            }"/>
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control login-field" value="" placeholder="Password" name="chat_password" id="chat_password" onkeypress="if (event.keyCode == 13) {
                                chat_initial();
                            }"/>
                    <label class="login-field-icon fui-lock" for="login-pass"></label>


                </div>
            </div>

            <div class="login-form register1" style="width:30%">
                <div class="form-group">
                    <input type="text" class="form-control login-field" value="" placeholder="User name" name="reg_user" id="reg_user"/>
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>

                <div class="form-group" >
                    <input type="password" class="form-control login-field" value="" placeholder="Password" name="reg_password" id="reg_password" />
                    <label class="login-field-icon fui-lock" for="login-pass"></label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control login-field" value="" placeholder="Email Id" name="reg_email" id="reg_email"/>
                </div>

            </div>
            <div class="buttons" style="width:30%">
                <a class="btn btn-primary btn-lg btn-block loginbt" href="#" onclick="chat_initial()" style="width:30%; float:left; margin-top:5px">Login</a>
                <a class="btn btn-primary btn-lg btn-block registerbt" href="#" onclick="chat_register()" style="width:30%; float: right">Register</a>  
            </div>
        </div>
    </div>        
</div>