<!doctype html>
<html lang="en">
<head>

<link rel="stylesheet" href="css/main.css">

    <meta charset="utf-8">
    <title>Thank You</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            line-height: 1.2;
            margin: 0;
        }

.four-heading{
			font-size: 36px;
              font-family: 'gandhi_sansbold';
	
}
        html {
            color: #888;
            display: table;

         font-family: 'gandhi_sansregular';
            height: 100%;
            text-align: center;
            width: 100%;
        }

        body {
            display: table-cell;
            vertical-align: middle;
            margin: 2em auto;
        }

        h1 {
            color: #336699;
            font-size: 4em;
            font-weight: 400;
            letter-spacing: 2px;
           font-family: 'gandhi_sansbold';           
        }
        
        
        h2 {
            color: #999999;
            font-size: 2em;
             letter-spacing: 2px;
               font-family: 'gandhi_sansbold';             
        }

        p {
            margin: 0 auto;
            width: 80%;
            padding-bottom: 30px;
             letter-spacing: 2px;
              font-family: 'gandhi_sansregular';
        }

.link-control{
		color: #1CB9A8;
		text-decoration: none;
		letter-spacing: 2px;
	
}


.link-control a{
		color: #1CB9A8;
		text-decoration: none;
	
}

.link-control a:hover{
		color: #999999;
	
}


        @media only screen and (max-width: 280px) {

            body, p {
                width: 95%;
            }

            h1 {
                font-size: 1.5em;
                margin: 0 0 0.3em;
            }
        }
        
    </style>
</head>
<body>
    <h1>THANK YOU!</h1>
    <!--<p class="four-heading">Page Not Found</p>-->
    <p style="margin-top: 30px;"> Thank you very much for your input.Your form is successfully submitted<br>
We will respond to you as soon as possible.</p>
<!--<div class="link-control">GO BACK TO <a href="index.php">HOMEPAGE </a></div>-->
    <div class="row" style="padding-top: 15px;padding-bottom: 15px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-10 col-xs-offset-1">
		<div class="submit-button">
		<input type="button" class="btn" onclick="goBack()" value="BACK">  </input>
	</div>
		</div>
	</div>
	
	<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>
<!-- IE needs 512+ bytes: http://blogs.msdn.com/b/ieinternals/archive/2010/08/19/http-error-pages-in-internet-explorer.aspx -->
