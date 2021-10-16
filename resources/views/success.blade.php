
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');

        body {
            font-family: 'Ubuntu', sans-serif;
        }

        .email_container {
            padding: 50px 0;
            text-align: center;
            display: flex;
  flex-flow: column wrap;
  justify-content: center;
  align-content: center;
  align-items: center;


        }

        .email_container > h3 {
            text-align: center;
        }

        .email_container > form > div  > input {
            width: 250px;
            height: 40px;
            background: #F5F6F8;
/* Stroke/1 */

            border: 1px solid #E4E6EB;
            box-sizing: border-box;
            border-radius: 4px;

            padding: 0 5px;

            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 20px;
            letter-spacing: -0.2px;

            /* Primary/Black */

            color: #130E00;

        }

        .email_container > form > div  > textarea {
            width: 500px;
            height: 500px;
            background: #F5F6F8;
/* Stroke/1 */

            border: 1px solid #E4E6EB;
            box-sizing: border-box;
            border-radius: 4px;

            padding: 5px;

            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 20px;
            letter-spacing: -0.2px;

            /* Primary/Black */

            color: #130E00;
            margin: 20px 0;


        }

        .email_container > form > div  > button {
            background: #D7A81E;
            border-radius: 6px;
            width: 250px;
            height: 40px;
            border: 0;

            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 20px;
            letter-spacing: -0.2px;

            /* Primary/Black */

            color: #fff;
        }

    </style>
</head>
<body>
    <div class="email_container">
        <h3>
            Email sent successfully
        </h3>

            <div>
               <a href="/">Go Home</a>
            </div>

    </div>
</body>
</html>
