<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- For more projects: Visit codeastro.com  -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RMS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    
.content {
    animation: fadeIn 2s ease-in-out;
}

        .m-b-md {
            margin-bottom: 30px;
        }
        .footer {
    position: absolute;
    bottom: 10px;
    width: 100%;
    text-align: center;
    color: #fff;
}

.links>a:hover {
    color: var(--primary-color);
}
:root {
    --primary-color: #3498db;
    --secondary-color: #636b6f;
    --text-shadow-color: rgba(0, 0, 0, 0.5);
}

.title {
    color: var(--primary-color);
    text-shadow: 2px 2px 4px var(--text-shadow-color);
}

.links>a {
    transition: border 0.3s ease;
    border: 2px solid transparent;
}

.links>a:hover {
    border-color: var(--primary-color);
}


    </style>
</head>
<!-- For more projects: Visit codeastro.com  -->
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Restaurant Management system
            </div>

            <div class="links">
			<!-- For more projects: Visit codeastro.com  -->
                <a href="Restro/admin/">Admin Log In</a>
                <a href="Restro/cashier/">cashier Log In</a>
                <a href="Restro/customer">Customer Log In</a>
            </div>
        </div>
    </div>
</body>
<!-- For more projects: Visit codeastro.com  -->
</html>