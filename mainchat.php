<div id="chatbox">


    <div id="primary">
        <div id="window"></div>

    </div>
</div>      
<div id="summarizer">

</div>

<div id="form" class="container">

    <div class="form-group">
        <input type="text" class="form-control" id="chat_text" name="chat_text" data-provide="typeahead" onkeypress="if (event.keyCode == 13) {
                    chat_send();
                }" />



        <input class="btn btn-success" type="button" id="chat_send" value="chat!" onClick="chat_send()"/> 
        <input class="btn btn-primary" type="button" id="chat_logout" value="Logout" onClick="chat_logout()"/>


    </div>

</div>