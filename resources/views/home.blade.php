<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');


        * {
            width: 100%;
            box-sizing: border-box;
        }

        body {
            font-family: 'Ubuntu', sans-serif;
            margin: 0;
        }

        .email_container {
            max-width: 800px;
            margin: auto;
            padding: 50px 0;
            text-align: center;
            display: flex;
            flex-flow: column wrap;
            justify-content: center;
            align-content: center;
            align-items: center;
        }

        .email_container>h3 {
            text-align: center;
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 20px;
            color: #000000;
        }

        .email_container>form>p {
            text-align: right;
            margin-top: 10px;
            margin-bottom: 0;
        }

        .email_container>form>p>button {
            width: auto;
            cursor: pointer;
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 132.2% color: #333333;
            border: 0;
            background-color: transparent;
            outline: 0;
        }

        .email_container>form>div>input {
            height: 50px;
            background: #F5F6F8;
            padding: 0 5px;
            border: 1px solid #4B545A;
            border-radius: 3px;
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            color: #4B545A;
            margin-bottom: 10px
        }

        .email_container>form>div>textarea {
            min-height: 500px;
            background: #F5F6F8;
            padding: 0 5px;
            border: 1px solid #4B545A;
            border-radius: 3px;
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            color: #4B545A;
            margin: 20px 0;
        }

        .email_container>form>div>button {
            background: #0361F0;
            border-radius: 6px;
            height: 50px;
            border: 0;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 20px;
            letter-spacing: -0.2px;
            color: #fff;
            cursor: ;

        }
    </style>
</head>

<body>
    <div class="email_container">
        <h3>
            EMAIL TESTER
        </h3>
        <form method="post" action="/email">
            {{ csrf_field() }}
            <div>
                <input type="text" name="email_address" id="email_address"
                    placeholder="Enter emails seperated by comma" value="" required />
            </div>
            {{-- <p>
                <button onClick="addEmail(event)"> Add Email</button>
            </p> --}}
            <div>
                <textarea name="email_code" placeholder="Paste code" required></textarea>
            </div>
            <div>
                <button type="submit">Send E-Mail</button>
            </div>
        </form>
    </div>

</body>

</html>
