<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battery Percentage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMvhV88K2Zn5kPxO+DHB/i1I4/j/OViD/b8I1v" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: "Asset";
            src: url(font/Asset.ttf);
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #27a770;
            background-image: linear-gradient(315deg, #27a770 0%, #efefef 74%);
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
        }

        .back-button i {
            margin-right: 5px; /* Add space between icon and text if needed */
        }

        h1 {
            font-family: 'Asset', sans-serif;
            font-size: 40px;
            color: #4d9559;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 24px;
            color: #4d9559;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #666;
            margin: 10px 0;
        }

        .error {
            color: red;
            font-size: 18px;
            margin-top: 20px;
        }

        .battery-percentage {
            font-size: 50px;
            color: #4CAF50; /* Green color for battery percentage */
            margin: 20px 0;
            font-weight: bold;
        }

        .life-days,
        .time-since {
            margin-top: 15px;
        }

        .life-days span,
        .time-since span {
            font-weight: bold;
            color: #4d9559;
        }

        .battery-percentage::after {
            content: '%';
            font-size: 30px;
        }

        /* Media query for mobile responsiveness */
        @media (max-width: 680px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 32px;
            }

            h2 {
                font-size: 20px;
            }

            .battery-percentage {
                font-size: 40px;
            }

            p {
                font-size: 16px;
            }

            .back-button {
                padding: 8px 16px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
<a href="{{ route('home') }}" class="back-button"><i class="fas fa-arrow-left"></i> Back</a>
<div class="container">
    <!-- Back button with icon -->


    @if ($error)
        <p class="error">{{ $error }}</p>
    @else
        <h1>Battery Status</h1>
        <h2>Hello, {{ $user_name }}!</h2> <!-- Display the user's name here -->
        <div class="battery-percentage">{{ $battery_percentage }}</div>
        <p class="life-days">Estimated Life Days: <span>{{ $estimated_life_days }}</span> days</p>
        <p class="time-since">Days Since Last Replacement: <span>{{ $days_since_last_replacement }}</span> days</p>
    @endif
</div>
</body>
</html>
