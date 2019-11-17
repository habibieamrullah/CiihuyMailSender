<?php
    $mainurl = "https://webapps.ciihuy.com/mailsender";
?>
<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Ciihuy Free Mass Bulk Mail Sender</title>
		
		<link rel="icon" href="https://ciihuy.com/wp-content/uploads/2019/03/cropped-icon-32x32.jpg" sizes="32x32" />
        <link rel="icon" href="https://ciihuy.com/wp-content/uploads/2019/03/cropped-icon-192x192.jpg" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="https://ciihuy.com/wp-content/uploads/2019/03/cropped-icon-180x180.jpg" />
        <meta name="msapplication-TileImage" content="https://ciihuy.com/wp-content/uploads/2019/03/cropped-icon-270x270.jpg" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script
          src="https://code.jquery.com/jquery-3.3.1.min.js"
          integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		
		<style>
		    body{
            	font-family: 'Roboto', sans-serif;
            	margin: 0;
            	background-color: #e5e5e5;
            	color: #424242;
            	padding: 20px;
            }
            h1, h2, h3, h4, h5, p{
                margin-bottom: 15px;
            }
            .wrapper{
                background-color: white;
                padding: 10px;
                margin: 10px;
                border-radius: 5px;
                overflow: auto;
            }
            
            .tabbtn{
                color: #4CAF50;
                background-color: white;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                display: inline-block;
                padding: 5px;
                margin-right: 5px;
                border: 1px solid #4CAF50;
                cursor: pointer;
            }
            .tabbtn:hover{
                color: white;
                background-color: #4CAF50;
            }
            
            table {
                border-collapse: collapse;
                width: 100%;
                font-size: 12px;
            }
            
            th, td {
                text-align: left;
                padding: 8px;
            }
            
            /*tr:nth-child(even){background-color: #f2f2f2}*/
            
            th {
                background-color: #4CAF50;
                color: white;
            }
            
            input{
                padding: 10px;
                width: 100%;
                box-sizing: border-box;
                margin-bottom: 10px;
            }
            
            .lds-grid {
              display: inline-block;
              position: relative;
              width: 64px;
              height: 64px;
            }
            .lds-grid div {
              position: absolute;
              width: 13px;
              height: 13px;
              border-radius: 50%;
              background: gray;
              animation: lds-grid 1.2s linear infinite;
            }
            .lds-grid div:nth-child(1) {
              top: 6px;
              left: 6px;
              animation-delay: 0s;
            }
            .lds-grid div:nth-child(2) {
              top: 6px;
              left: 26px;
              animation-delay: -0.4s;
            }
            .lds-grid div:nth-child(3) {
              top: 6px;
              left: 45px;
              animation-delay: -0.8s;
            }
            .lds-grid div:nth-child(4) {
              top: 26px;
              left: 6px;
              animation-delay: -0.4s;
            }
            .lds-grid div:nth-child(5) {
              top: 26px;
              left: 26px;
              animation-delay: -0.8s;
            }
            .lds-grid div:nth-child(6) {
              top: 26px;
              left: 45px;
              animation-delay: -1.2s;
            }
            .lds-grid div:nth-child(7) {
              top: 45px;
              left: 6px;
              animation-delay: -0.8s;
            }
            .lds-grid div:nth-child(8) {
              top: 45px;
              left: 26px;
              animation-delay: -1.2s;
            }
            .lds-grid div:nth-child(9) {
              top: 45px;
              left: 45px;
              animation-delay: -1.6s;
            }
            @keyframes lds-grid {
              0%, 100% {
                opacity: 1;
              }
              50% {
                opacity: 0.5;
              }
            }
            
            select{
                width: 100%;
                box-sizing: border-box;
                padding: 10px;
            }
            
            textarea{
                width: 100%;
                box-sizing: border-box;
                padding: 10px;
                height: 150px;
            }
            .postbutton{
                background-color: green; padding: 25px; margin-top: 10px; margin-bottom: 10px; color: white; text-align: center; border: 1px solid green; cursor: pointer;
            }
            .postbutton:hover{
                background-color: white;
                color: green;
            }
            #dimmer{
                background-color: rgba(0, 0, 0, .85);
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                text-align: center;
                padding: 50px;
                display: none;
            }
            a{
                text-decoration: none;
                color: #ed1a3b;
            }
            a:hover{
                text-decoration: underline;
            }
            
            table {
                border-collapse: collapse;
                width: 100%;
                color: black;
            }
            
            tr{
                border-bottom: 1px solid gray;
            }
            
            th, td {
                text-align: left;
                padding: 8px;
            }
            
            /*tr:nth-child(even){background-color: #f2f2f2}*/
            
            th {
                background-color: #ed1a3b;
                color: white;
            }
            
            .abutt{
                background-color: green;
                color: white;
                border: 1px solid green;
                margin: 5px;
                padding: 5px;
                font-size: 12px;
                display: inline-block;
                cursor: pointer;
                
            }
            .abutt:hover{
                background-color: white;
                color: green;
            }
            
            #ui{
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0,0,0,.8);
                padding: 50px;
                display: none;
                font-size: 16px;
                color: white;
            }
            
            button{
                padding: 10px;
                margin-top: 10px;
                border: 1px solid #ed1a3b;
                color: white;
                background-color: #ed1a3b;
                cursor: pointer;
                z-index: 100;
            }
            button:hover{
                background-color: white;
                color: #ed1a3b;
            }
            
            #burger{
                position: fixed;
                left: 0;
                top: 0;
                background-color: black;
                color: white;
                padding: 10px;
                cursor: pointer;
            }
            #drawer{
                background-color: black;
                width: 250px;
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                color: white;
                display: none;
            }
            #drawer a{
                text-decoration: none;
                color: white;
            }
            .mitem{
                padding: 10px;
                border-bottom: 1px solid gray;
                cursor: pointer;
            }
            .mitem:hover{
                color: black;
                background-color: white;
            }
		</style>
		
    </head>
    <body>
        <div id="ui" style"width:100%">
            <div id="uitext"></div>
            <div id="floatad"></div>
            <h3 align="center">If the mailing job is stopped, just reload the page to continue. Or <a href="#" onclick="resetmailer()">click here</a> to reset.</h3>
            
        </div>
        <div id="allcontent">
            <h1 align="center"><a href="<?php echo $mainurl ?>">Ciihuy Free Mass Bulk Mail Sender</a></h1>
            
            <p>
                Ciihuy MailSender is a web application created for sending bulk/mass emails with a single click.
            </p>
            
            <p>To use this web app, you only need to fill in your email account credentials, such as email address and password, mail server address, port, etc. But don’t worry, we do not store your entered information.</p>
            
            <div style="text-align: center">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- WebBanner -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-5796843895531667"
                 data-ad-slot="3754890034"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            </div>
            
            <p>
                Watch this video tutorial to see how to use it:
            </p>
            <figure><iframe width="100%" height="315" src="https://www.youtube.com/embed/-pF5X0MKuhs" allowfullscreen=""></iframe></figure>
            <h2>Mailing Credentials</h2>
            <input id="mailhost" placeholder="Mail Host e.g. mail.somewebsite.com">
            <input id="mailusername" placeholder="Email Account e.g. somename@somewebsite.com">
            <input id="mailpassword" placeholder="Password e.g. somepassword" type="password">
            <input id="mailsendername" placeholder="Sender Name e.g. Alex Banna">
            <input id="mailsmtpsecure" value="TLS" placeholder="SSL - Default value is ssl">
            <input id="mailport" value="587" placeholder="Port - Default value is 587">
            <h2>Recipients</h2>
            <p>You can enter multiple email addresses separated by a comma.</p>
            <textarea placeholder="Email recipients separated by comma..." id="emaildata"></textarea>
            
            <h2>Title</h2>
            <input placeholder="Title" id="mailtitle">
            <h2>Content</h2>
            <textarea placeholder="Content goes here..." id="mailcontent"></textarea>
            <button onclick="sendmails()">Execute</button>
            
            <div id="applulad" style='display: none; height: 200px;'>ciihuy</div>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
            <script src="https://applulbayt.ciihuy.com/applulbayt/applulad.js"></script>
            
            <div style="color: gray;">
                <h2>ATTENTION : </h2>
                <ul>
                <li>We do not collect your input data on our server from this page. However if you have a bulk mail job, your data is stored temporarily on your web browser locally and deleted directly after your mailing job is done.</li>
                <li>Some mailing servers has mailing limitation, for example you may only can send 200 emails per hour, not more. You must ask this to your service provider.</li>
                <li>Some mailing servers lacks good mailing ability, just for example the email you send will go to spam folder of the recipient's inbox.</li>
                <li>Use this web page at your own risk. We do not guarantee or responsible of anything happened caused by this web page.</li>
                </ul>
            </div>
            <p align="center" style="margin: 30px;">Ciihuy SMTP Bulk Mail Sender<br>
            <i style="font-size: 10px;">
                Watch this tutorial about how to use it: <a href="https://youtu.be/-pF5X0MKuhs">https://youtu.be/-pF5X0MKuhs</a><br>
                Coded by <a href="https://habibie.ciihuy.com/" target="_blank">https://habibie.ciihuy.com/</a><br>
                If you like this tool, please consider to give a donation: <a href="https://www.paypal.me/habibieamrullah">https://www.paypal.me/habibieamrullah</a><br>
                The source code is available here: <a href="https://github.com/habibieamrullah/CiihuyMailSender">https://github.com/habibieamrullah/CiihuyMailSender</a>
            </i>
            </p>
        </div>
        <script>
            var emaildata = {
                recipients : [],
                title : "",
                content : "",
                mailhost : "",
                mailusername : "",
                mailpassword : "",
                mailsmtpsecure : "",
                mailport : "",
                mailsendername : "",
                
            };
            if(localStorage.getItem("ciihuymailsender") === null){
            }else{
                emaildata = JSON.parse(localStorage.getItem("ciihuymailsender"));
            }
            var sendingmails = false;
            if(emaildata.recipients.length > 0){
                $("#ui").show();
                sendingmails = true;
                commit();
                setTimeout(function(){
                    $("#allcontent").html("");
                }, 5000);
            }
            function saveData(){
                localStorage.setItem("ciihuymailsender", JSON.stringify(emaildata));
            }
            
            function sendmails(){
                
                emaildata.recipients = $("#emaildata").val().split(",");
                emaildata.title = $("#mailtitle").val();
                emaildata.content = $("#mailcontent").val();
                
                emaildata.mailhost = $("#mailhost").val();
                emaildata.mailusername = $("#mailusername").val();
                emaildata.mailpassword = $("#mailpassword").val();
                emaildata.mailsmtpsecure = $("#mailsmtpsecure").val();
                emaildata.mailport = $("#mailport").val();
                emaildata.mailsendername = $("#mailsendername").val();
                
                if(emaildata.recipients != "" && emaildata.title != "" && emaildata.content != "" && emaildata.mailhost != "" && emaildata.mailusername != "" && emaildata.mailpassword != "" && emaildata.mailsmtpsecure != "" && emaildata.mailport != "" && emaildata.mailsendername != ""){
                    $("#ui").show();
                    $("#uitext").html("Please wait...");
                    saveData();
                    sendingmails = true;
                    commit();
                    $("#allcontent").html("");
                }else{
                    alert("Incomplete information");
                }
            }
            function commit(){
                if(sendingmails){
                    if(emaildata.recipients.length > 0){
                        //send current mail
                        $("#ui").show();
                        //$("#floatad").html("<ins class=\"adsbygoogle\" style=\"display:block\" data-ad-client=\"ca-pub-5796843895531667\" data-ad-slot=\"3754890034\" data-ad-format=\"auto\" data-full-width-responsive=\"true\"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); <\/script>");
                        $("#uitext").html("<h2>Sending Bulk Mails. Please don't close this page.</h2><p>Sending email to " + emaildata.recipients[0] + ". " + (emaildata.recipients.length-1) + " more email(s) left.</p>");
                        if(emaildata.recipients[0] != ""){
                            setTimeout(function(){
                                $.post( "sendmail.php", { 
                                    to : emaildata.recipients[0], 
                                    title : emaildata.title, 
                                    content : emaildata.content,
                                    mailhost : emaildata.mailhost,
                                    mailusername : emaildata.mailusername,
                                    mailpassword : emaildata.mailpassword,
                                    mailsmtpsecure : emaildata.mailsmtpsecure,
                                    mailport : emaildata.mailport,
                                    mailsendername : emaildata.mailsendername,
                                } , function( data ){
                                    emaildata.recipients.splice(0, 1);
                                    saveData();
                                    commit();
                                });
                            }, 5000);
                        }else{
                            emaildata = {
                                recipients : [],
                                title : "",
                                content : "",
                                mailhost : "",
                                mailusername : "",
                                mailpassword : "",
                                mailsmtpsecure : "",
                                mailport : "",
                                mailsendername : "",
                                
                            };
                            saveData();
                            commit();
                        }
                    }else{
                        $("#ui").show();
                        $("#uitext").html("<p>Done!</p><button onclick='location.reload()'>Close</button>");
                        sendingmails = false;
                    }
                }
            }
            
            function resetmailer(){
                localStorage.clear();
                location.reload();
            }
        </script>
        <script src="https://www.w3counter.com/tracker.js?id=123663"></script>
    </body>
</html>