<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            color: black;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <div style="width: 100%; min-height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div
            style="width: fit-content; height: fit-content; border: solid 2px #ccc; border-top: solid 8px #090; margin: 20px;">
            <p style="background-color: #aaa; padding:10px 30px;">
                Thank you for placing your order
            </p>
            <p style="background-color:#ddd; padding: 10px 30px;">

            <p>
                Dear {{ auth()->user()->name }},
            </p>

            Thank you for choosing <strong>KAPADA GHAR</strong> for ordering your product. We are pleased to inform you
            that your product
            has been ordered successfully.
            We appreciate your business and are committed to providing you with a quality customer experience. If
            you have any questions or concerns, please do not hesitate to contact us.
            <br>
            Thank you again for your order, and we look forward to serving you in the future.
            <br><br>
            Best regards, <br>
            The <strong>KAPADA GHAR</strong> Team
            </p>
        </div>
    </div>
</body>

</html>
