<!DOCTYPE html>
<html>
<head>
    <title>Ticket</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: url('path_to_your_image.jpg') no-repeat center center fixed; 
            background-size: cover;
        }

        .ticket {
            width: 105mm;
            box-sizing: border-box;
            padding: 10mm;
            border: 1px solid #000;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        .event-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
            color: #2C3E50;
        }

        .event-details {
            font-size: 16px;
            margin-bottom: 20px;
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }

        .ticket-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .ticket-info span {
            font-size: 14px;
        }

        .ticket-info .label {
            font-weight: bold;
            color: #34495E;
        }

        .barcode {
            text-align: center;
            margin-top: 20px;
        }

        .barcode img {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <div class="event-name">{{ $event->event->title }}</div>
        <div class="event-details">
            <div class="ticket-info">
                <span class="label">User:</span>
                <span>{{ $event->user->name }}</span>
            </div>
            <div class="ticket-info">
                <span class="label">Date:</span>
                <span>{{ $event->event->date }}</span>
            </div>
            <div class="ticket-info">
                <span class="label">Location:</span>
                <span>{{ $event->event->adresse }}</span>
            </div>
        </div>
        <div class="barcode">
            <img src="data:image/png;base64,{{ \DNS1D::getBarcodePNG('4445645656', 'C39+') }}" alt="barcode" />
        </div>
    </div>
</body>
</html>